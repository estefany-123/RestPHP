<?php
//getAll registar actualizar cambiarEstado

class Categoria{

    private $db;


    public function __construct(){
        $this->db = new BaseConexion;
    }


    public function getAll(){
        $this->db->query('SELECT * FROM categorias');

        try{
            return $this->db->registros();
        }catch(Exception $e){
            error_log("Error al obtener categorias:" . $e->getMessage());
            return [];
        }
    }


    public function registrarCate($datos){
        try{

            $this->db->query('INSERT INTO categorias(nombre,fecha_creacion,fecha_actualizacion) VALUES(:nombre,:fecha_creacion,:fecha_actualizacion)');

            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':fecha_creacion', $datos['fecha_creacion']);
            $this->db->bind(':fecha_actualizacion', $datos['fecha_actualizacion']);

            return $this->db->execute();

        }catch (PDOException $e) {
            error_log("Error al registrar categoria: " . $e->getMessage());
            return false;
        }
    }

    public function actualizarCate($datos){

        try{

            $this->db->query('UPDATE categorias SET nombre = :nombre, fecha_creacion = :fecha_creacion, fecha_actualizacion = :fecha_actualizacion WHERE id_categoria = :id_categoria');

            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':fecha_creacion', $datos['fecha_creacion']);
            $this->db->bind(':fecha_actualizacion', $datos['fecha_actualizacion']);
            
            return $this->db->execute();

        }catch (PDOException $e) {
            error_log("Error al actualizar categoria: " . $e->getMessage());
            return false;
        }
    }

    public function EstadoCategoria($id){

        try{
            $this->db->query(`UPDATE categorias SET estado =
            CASE 
            WHEN estado = true THEN false
            WHEN estado = false THEN true
            END
            WHERE id_categoria = :id_categoria`);

            $this->db->bind(':id_categoria',$id);//ver si sirve asi

            return $this->db->execute();
        }catch (PDOException $e) {
            error_log("Error al actualizar categoria: " . $e->getMessage());
            return false;
        }
    }

}


?>