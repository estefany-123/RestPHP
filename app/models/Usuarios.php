<?php

class Usuarios {
    private $db;


    public function __construct(){
        $this->db = new BaseConexion;
    }


    public function getAllUsuarios(){
        $this->db->query('SELECT * FROM usuarios');

        try{
            return $this->db->registros();
        }catch(Exception $e){
            error_log("Error al obtener usuarios:" . $e->getMessage());
            return [];
        }
    }

    public function login(){
        try{

            if($server)
            $this->db->query("SELECT * FROM usuarios WHERE documento = :documento AND contraseña = :contraseña");

            $this->db->bind(':documento',$datos['documento']);
            $this->db->bind(':password',$datos['password']);

            return  'Login exitoso';

        }catch (PDOException $e) {
            error_log("Error al loguear el usuario: " . $e->getMessage());
            return false;
        }

    }

    public function getByIdUsuario($datos){
        try{
            $this->db->query("SELECT * FROM usuarios WHERE id_usuario = :id");
            $this->db->bind(':id',$datos);

            return $this->db->registro();//ver de donde sale esta funcion
        }catch (PDOException $e) {
            error_log("Error al obtener usuario por ID: " . $e->getMessage());
            return null;
        }
    }

    public function registrarUsuario($datos){
        try{
            $this->db->query("INSERT INTO usuarios(documento,nombre,edad,telefono,correo,cargo,password,estado,fecha_registro,fecha_actualizacion) VALUES(:documento,:nombre,:edad,:telefono,:correo,:cargo,:password,:estado,:fecha_registro,:fecha_actualizacion)");
            
            $this->db->bind(':documento', $datos['documento']);
            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':edad',$datos['edad']);
            $this->db->bind(':telefono',$datos['telefono']);
            $this->db->bind(':correo',$datos['correo']);
            $this->db->bind(':cargo',$datos['cargo']);
            $this->db->bind(':password',$datos['password']);
            $this->db->bind(':estado',$datos['estado']);
            $this->db->bind(':fecha_registro',$datos['fecha_registro']);
            $this->db->bind(':fecha_actualizacion',$datos['fecha_actualizacion']);

            return $this->db->execute();

        }catch (PDOException $e) {
            error_log("Error al registrar usuario: " . $e->getMessage());
            return false;
        }
    }

    public function updateUsuario($datos){
        try{
            $this->db->query("UPDATE usuarios SET nombre = :nombre,edad = :edad, telefono = :telefono,correo = :correo, cargo = :cargo, password = :password, estado = :estado, fecha_registro = :fecha_registro, fecha_actualizacion = :fecha_actualizacion WHERE id_usuario = :id");

            $this->db->bind(':id', $datos['id_usuario']);
            $this->db->bind(':nombre', $datos['nombre']);
            $this->db->bind(':edad',$datos['edad']);
            $this->db->bind(':telefono',$datos['telefono']);
            $this->db->bind(':correo',$datos['correo']);
            $this->db->bind(':cargo',$datos['cargo']);
            $this->db->bind(':password',$datos['password']);
            $this->db->bind(':estado',$datos['estado']);
            $this->db->bind(':fecha_registro',$datos['fecha_registro']);
            $this->db->bind(':fecha_actualizacion',$datos['fecha_actualizacion']);

            return $this->db->execute();
        } catch (PDOException $e) {
            error_log("Error al actualizar usuario: " . $e->getMessage());
            return false;
        }
    }

    public function cambiaEstado($id){
        try{
                $this->db->query(`UPDATE usuarios SET estado =
            CASE 
            WHEN estado = true THEN false
            WHEN estado = false THEN true
            END
            WHERE id_usuario = :id`);

            $this->db->bind(':id',$id);

            return $this->db->execute();
        }catch (PDOException $e) {
            error_log("Error al actualizar el estado: " . $e->getMessage());
            return false;
        }
    }


    public function eliminarUsua($datos){

        try{
            $this->db->query("DELETE FROM usuarios WHERE id_usuario = :id");

            $this->db->bind(':id',$datos['id_usuario']);

            return $this->db->execute();
        }catch (PDOException $e) {
            error_log("Error al eliminar el usuario: " . $e->getMessage());
            return false;
        }
    }
}


?>