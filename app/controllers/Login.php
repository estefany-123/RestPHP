<?php
    require_once __DIR__.'/../../vendor/autoload.php';
    use Firebase\JWT\JWT;
    use Firebase\JWT\Key;

    class Login extends Controlador {
        private $usuarioModelo;
        public function __construct(){
            $this->usuarioModelo = $this->modelo('usuarios');
        }
        public function index(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $logged = $this->usuarioModelo->login();

                if($logged['logged']){
                    $payload = [
                        'usuario' => $logged['usuario']
                    ];
                    $token = JWT::encode($payload,KEY,'HS256');
                    print_r($token);
                }
                else{
                    header('HTTP/2 400');
                    echo("No iniciaste sesión");
                }

            }
            else{?>
                
                <form id='login'>
                    <label for="documento">
                        Documento:
                    </label>
                    <input id='documento' type="number">

                    <label for="password">
                        Password:
                    </label>
                    <input id='password' type="password">

                    <button type='submit'>Iniciar sesión</button>
                </form>

                <script>
                    const form = document.getElementById('login');
                    form.addEventListener('submit',(e)=>{
                        e.preventDefault();
                        const documento = document.getElementById('documento').value;
                        const password = document.getElementById('password').value;
                        const formData = new FormData();
                        formData.append('documento',documento);
                        formData.append('password',password);
                        fetch('login.php',{
                            method : 'POST',
                            body : formData
                        }).then(result=>
                            result.text()
                        ).then(data=>{
                            localStorage.setItem('token',data);
                        })
                    })
                </script>
                
            <?php
            }
        }
    }
?>