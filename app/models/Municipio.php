<?php

//getAll,buscarNombre,registrar,actualizar,cambiarEstado

class Municipio {

    private $db;


    public function __construct(){
        $this->db = new BaseConexion;
    }


    public function getAll(){
        $this->db->query('SELECT * FROM municipios');

        try{
            return $this->db->registros();
        }catch(Exception $e){
            error_log("Error al obtener municipios:" . $e->getMessage());
            return [];
        }
    }

    public function getByName($nombre){
        try{
            $this->db->query('SELECT * FROM municipios WHERE nombre = :nombre');
    
            $this->db->bind(':nombre',$nombre); 
        
            return $this->db->registro();

        }catch (PDOException $e) {
            error_log("Error al obtener municipio por nombre: " . $e->getMessage());
            return null;
        }
    }

    public function registrarMuni($datos){
        try{

            $this->db->query('INSERT INTO municipios(nombre, departamento,fecha_creacion,fecha_actualizacion) VALUES(:nombre,:departamento,:fecha_creacion,:fecha_actualizacion)');

            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':departamento', $datos['departamento']);
            $this->db->bind(':fecha_creacion', $datos['fecha_creacion']);
            $this->db->bind(':fecha_actualizacion', $datos['fecha_actualizacion']);

            return $this->db->execute();

        }catch (PDOException $e) {
            error_log("Error al registrar municipios: " . $e->getMessage());
            return false;
        }
    }

    public function actualizarMuni($datos){

        try{

            $this->db->query('UPDATE municipios SET nombre = :nombre, departamento = :departamento, fecha_creacion = :fecha_creacion, fecha_actualizacion = :fecha_actualizacion WHERE id_municipio = :id_municipio');

            $this->db->bind(':id_municipio', $datos['id_municipio']);
            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':departamento', $datos['departamento']);
            $this->db->bind(':fecha_creacion', $datos['fecha_creacion']);
            $this->db->bind(':fecha_actualizacion', $datos['fecha_actualizacion']);
            
            return $this->db->execute();

        }catch (PDOException $e) {
            error_log("Error al actualizar municipio: " . $e->getMessage());
            return false;
        }
    }

    public function EstadoMuni($id){

        try{
            $this->db->query(`UPDATE municipios SET estado =
            CASE 
            WHEN estado = true THEN false
            WHEN estado = false THEN true
            END
            WHERE id_municipio = :id_municipio`);

            $this->db->bind(':id_municipio',$id);//ver si sirve asi

            return $this->db->execute();
        }catch (PDOException $e) {
            error_log("Error al actualizar el municipio: " . $e->getMessage());
            return false;
        }
    }

}


?>