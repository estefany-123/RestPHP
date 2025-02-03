<?php

// class Usuarios {

//     public function __construct(){

//         echo "Hola desde el controlador usuarios";
//     }

//     public function actualizar($id){
//         echo $id;
//     }

//     public function index(){
//         echo 'index';
//     }
// }

class Usuario extends Controlador {

    private $usuarioModelo;

    public function __construct(){
        $this->usuarioModelo = $this->modelo('usuarios');
    }


    // public function logout(){
        // FALTAAAA
    // }

    public function index(){
        $usuarios = $this->usuarioModelo->getAllUsuarios();

        $datos = [
            'usuarios' => $usuarios
        ];

        $this->vista('paginas/usuarios/listar',$datos);
    }


    public function agregar(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $datos = [
                'documento' => trim($_POST['documento']),
                'nombre' => trim($_POST['nombre']),
                'edad' => trim($_POST['edad']),
                'telefono' => trim($_POST['telefono']),
                'correo' => trim($_POST['correo']),
                'cargo' => trim($_POST['cargo']),
                'password' => trim($_POST['password']),
                'estado' => trim($_POST['estado']),
                'fecha_registro' => trim($_POST['fecha_registro']),
                'fecha_actualizacion' => trim($_POST['fecha_actualizacion'])

            ];

            if($this->usuarioModelo->registrarUsuario($datos)){
                redireccionar('/usuario');
            }else{
                die('Also salio mal');
            }
        }else{
            $datos = [

                'documento' => '',
                'nombre' => '',
                'edad' => '',
                'telefono' => '',
                'correo' => '',
                'cargo' => '',
                'password' => '',
                'estado' => '',
                'fecha_registro' => '',
                'fecha_actualizacion' => ''
            ];
            $this->vista('paginas/usuarios/registrar',$datos);//nombre de la vista en la pagina
        }
    }

    public function editar($id){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $datos = [
                'id_usuario' => $id,  //ver si asi es el id
                'nombre' => trim($_POST['nombre']),
                'edad' => trim($_POST['edad']),
                'telefono' => trim($_POST['telefono']),
                'correo' => trim($_POST['correo']),
                'cargo' => trim($_POST['cargo']),
                'password' => trim($_POST['password']),
                'estado' => trim($_POST['estado']),
                'fecha_registro' => trim($_POST['fecha_registro']),
                'fecha_actualizacion' => trim($_POST['fecha_actualizacion'])

            ];

            if($this->usuarioModelo->updateUsuario($datos)){
                redireccionar('/usuario');
            }else{
                die('Algo salio mal');
            }
        } else{

            $usuario = $this->usuarioModelo->getByIdUsuario($id);

            $datos = [
                'id_usuario' => $usuario->id_usuario,
                'documento' => $usuario->documento,
                'nombre' => $usuario->nombre,
                'edad' => $usuario->edad,
                'telefono' => $usuario-> telefono,
                'correo' => $usuario-> correo,
                'cargo' => $usuario-> cargo,
                'password' => $usuario-> password,
                'estado' => $usuario-> estado,
                'fecha_registro' => $usuario->fecha_registro,
                'fecha_actualizacion' => $usuario->fecha_actualizacion
            ];
            $this->vista('paginas/usuarios/actualizar',$datos);
        }
    }


    public function estado(){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $datos = [
                    'id_usuario' => $id,  //ver si asi es el id
                    'estado' => trim($_POST['estado'])

                ];

                if($this->usuarioModelo->updateUsuario($datos)){
                    redireccionar('/usuario');
                }else{
                    die('Algo salio mal');
                }
            }else{

                $usuario = $this->usuarioModelo->getByIdUsuario($id);

                $datos = [
                    'id_usuario' => $usuario->id_usuario,
                    'estado' => $usuario-> estado
                ];
                $this->vista('paginas/usuarios/actualizar',$datos);

            }
    }

    public function borrar($id){

        $usuario = $this->usuarioModelo->getByIdUsuario($id);

        $datos = [
                'id_usuario' => $usuario->id_usuario,
                'documento' => $usuario->documento,
                'nombre' => $usuario->nombre,
                'edad' => $usuario->edad,
                'telefono' => $usuario-> telefono,
                'correo' => $usuario-> correo,
                'cargo' => $usuario-> cargo,
                'password' => $usuario-> password,
                'estado' => $usuario-> estado,
                'fecha_registro' => $usuario->fecha_registro,
                'fecha_actualizacion' => $usuario->fecha_actualizacion
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $datos = [
                'id_usuario' => $id
            ];

            if($this->usuarioModelo->eliminarUsua($datos)){
                redireccionar('/usuario');
            }else{
                die('Algo salio mal');
            }
        }

        $this->vista('paginas/usuarios/eliminar',$datos);
    }
}

?>