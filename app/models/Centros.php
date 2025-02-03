<?php
//getAll, buscarNombre,registrar, actualizar, cambiar_estado

class Centros {

    private $db;


    public function __construct(){
        $this->db = new BaseConexion;
    }


    public function getAll(){
        $this->db->query('SELECT * FROM centros');

        try{
            return $this->db->registros();
        }catch(Exception $e){
            error_log("Error al obtener centros:" . $e->getMessage());
            return [];
        }
    }

    public function getByName($nombre){
        try{
            $this->db->query('SELECT * FROM centros WHERE nombre = :nombre');
    
            $this->db->bind(':nombre',$nombre); 
        
            return $this->db->registro();

        }catch (PDOException $e) {
            error_log("Error al obtener centros por nombre: " . $e->getMessage());
            return null;
        }
    }

    public function registrarCentro($datos){
        try{

            $this->db->query('INSERT INTO centros(nombre, fecha_creacion,fecha_actualizacion,fk_municipio) VALUES(:nombre, :fecha_creacion,:fecha_actualizacion,:fk_municipio)');

            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':fecha_creacion', $datos['fecha_creacion']);
            $this->db->bind(':fecha_actualizacion', $datos['fecha_actualizacion']);
            $this->db->bind(':fk_municipio', $datos['fk_municipio']);

            return $this->db->execute();

        }catch (PDOException $e) {
            error_log("Error al registrar centros: " . $e->getMessage());
            return false;
        }
    }

    public function actualizarMuni($datos){

        try{

            $this->db->query('UPDATE centros SET nombre = :nombre, fecha_creacion = :fecha_creacion, fecha_actualizacion = :fecha_actualizacion, fk_municipio = :fk_municipio WHERE id_municipio = :id_municipio');

            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':fecha_creacion', $datos['fecha_creacion']);
            $this->db->bind(':fecha_actualizacion', $datos['fecha_actualizacion']);
            $this->db->bind(':fk_municipio', $datos['fk_municipio']);
            
            return $this->db->execute();

        }catch (PDOException $e) {
            error_log("Error al actualizar centro: " . $e->getMessage());
            return false;
        }
    }

    public function EstadoMuni($id){

        try{
            $this->db->query(`UPDATE centros SET estado =
            CASE 
            WHEN estado = true THEN false
            WHEN estado = false THEN true
            END
            WHERE id_centro = :id_centro`);

            $this->db->bind(':id_centro',$id);//ver si sirve asi

            return $this->db->execute();
        }catch (PDOException $e) {
            error_log("Error al actualizar el centro: " . $e->getMessage());
            return false;
        }
    }

}


?>