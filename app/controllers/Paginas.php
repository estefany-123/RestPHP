
<?php

class Paginas extends Controlador{

    private $usuariosModelo;

    public function __construct(){

        $this->usuariosModelo = $this->modelo('usuarios');
    }

    public function index()
    {
        //obtener los usuarios

        $this->vista('paginas/inicio');

        // $usuarios = $this->usuariosModelo->getAllUsuarios();
        // // Preparamos los datos para pasarlos a la vista
        // $datos = [
        //     'usuarios' => $usuarios
        // ];

        // // Llamamos a la vista con los datos
        // $this->vista('paginas/usuarios/listar', $datos);
    }
    
}




    







    // public function index(){
        
    //  $login = $this->usuariosModelo->login($datos);

    //  $datos = [
    //     'documento' => 1070598678,
    //     'contraseña' => 'hola123'
    // ];

    //     $this->vista('/paginas/inicio',$datos);
    // }

    // public function index(){

    //     if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //         $datos = [

    //             'documento' => trim($_POST[$documento]),
    //             'contraseña' => trim($_POST[$contraseña])
                
    //         ];

    //         if($this->usuariosModelo->login($datos)){

    //             redireccionar('/paginas/dashboard');

    //         }else{
    //             die('Error iniciando, comprueba tu informacion');
    //         }

    //     }else{

    //         $datos = [
    //             'documento' => '',
    //             'contraseña' => ''
    //         ];

    //         $this->vista('paginas/inicio',$datos);
    //     }
    // }


    // public function logout(){

        
    // }

    

?>