<?php

//listar,buscarNombre,registrar,actualizar,cambiarEstado

class Sitio{

    private $db;


    public function __construct(){
        $this->db = new BaseConexion;
    }


    public function getAllSitio(){

        $this->db->query("SELECT * FROM tipo_sitios");

        try{
            return $this->db->registros();
        }catch(Exception $e){
            error_log("Error al obtener tipos de sitios:" . $e->getMessage());
            return [];
        }
    }


    public function getByName($nombre){
        try{
            $this->db->query('SELECT * FROM tipo_sitios WHERE nombre = :nombre');
    
            $this->db->bind(':nombre',$nombre); //ver a ver si sirve con ese nombre de id
        
            return $this->db->registro();
        }catch (PDOException $e) {
            error_log("Error al obtener tipo de sitio por nombre: " . $e->getMessage());
            return null;
        }
    }


    public function registrarTipo($datos){

        try{

            $this->db->query('INSERT INTO tipo_sitios(nombre,fecha_creacion,fecha_actualizacion,fk_area) VALUES(:nombre,:fecha_creacion,:fecha_actualizacion,:fk_area)');

            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':fecha_creacion', $datos['fecha_creacion']);
            $this->db->bind(':fecha_actualizacion', $datos['fecha_actualizacion']);
            $this->db->bind(':fk_area',$datos['fk_area']);

            return $this->db->execute();

        }catch (PDOException $e) {
            error_log("Error al registrar tipo de sitios: " . $e->getMessage());
            return false;
        }
    }


    public function actualizarTipo($datos){

        try{

            $this->db->query('UPDATE tipo_sitios SET nombre = :nombre, fecha_creacion = :fecha_creacion, fecha_actualizacion = :fecha_actualizacion, fk_area = :fk_area WHERE id_tipo = :id_tipo');

            $this->db->bind(':id_tipo', $datos['id_tipo']);//ver si el id se pasa de ultimo
            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':fecha_creacion', $datos['fecha_creacion']);
            $this->db->bind(':fecha_actualizacion', $datos['fecha_actualizacion']);
            $this->db->bind(':fk_area',$datos['fk_area']);

            return $this->db->execute();

        }catch (PDOException $e) {
            error_log("Error al actualizar tipo de sitios: " . $e->getMessage());
            return false;
        }
    }


    public function EstadoTipo($id){

        try{
            $this->db->query(`UPDATE tipo_sitios SET estado =
            CASE 
            WHEN estado = true THEN false
            WHEN estado = false THEN true
            END
            WHERE id_tipo = :id_tipo`);

            $this->db->bind(':id_tipo',$id);

            return $this->db->execute();
        }catch (PDOException $e) {
            error_log("Error al actualizar el estado: " . $e->getMessage());
            return false;
        }
    }

}



?>