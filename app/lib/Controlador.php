<?php
//Controlador Principal
//Se encarga de cargar los modelos y las vistas

class Controlador
{
    //cargar modelo
    public function modelo($modelo)
    {
        //Carga modelo
        require_once '../app/models/' . $modelo . '.php';
        //Instanciar el modelo
        return new $modelo;
    }
    //cargar vista
    public function vista($vista, $datos = [])
    {
        //chequear si el archivo vista existe
        if (file_exists('../app/views/' . $vista . '.php')) {
            require_once '../app/views/' . $vista . '.php';
        } else {
            // si el archivo de la vista no existe
            die('La vista no existe');
        }
    }
}