<?php
//Clase para conectarse a la base de datos y ejecutar consultas
class BaseConexion
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dataBase = DB_NOMBREDB;

    private $dbh;
    private $stmt;
    private $error;

    public function __construct()
    {
        //configirasr la conexion
        $dsn = "pgsql:host=" . $this->host .";port=5432;dbname=" . $this->dataBase;
        $opciones = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        //Crear instancia de PDO
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $opciones);
            $this->dbh->exec("SET CLIENT_ENCODING TO 'UTF8'");
            
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
    //Preparamos la consulta
    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    //Vinculamos la consulta con Bind
    public function bind($parametro, $valor, $tipo = null)
    {
        if (is_null($tipo)) {
            switch (true) {
                case is_int($valor):
                    $tipo = PDO::PARAM_INT;
                    break;
                case is_bool($valor):
                    $tipo = PDO::PARAM_BOOL;
                    break;
                case is_null($valor):
                    $tipo = PDO::PARAM_NULL;
                    break;
                default:
                    $tipo = PDO::PARAM_STR;
                    break;
            }
        }
        $this->stmt->bindValue($parametro, $valor, $tipo);
    }

    //Ejecuta la consulta
    public function execute()
    {
        return $this->stmt->execute();
    }

    //Obtener los registros de la consulta
    public function registros()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    //Obtener un registro de la consulta
    public function registro()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    //Obtener cantiad de filas con el metodo rowCount
    public function rowCount()
    {
        $this->execute();
        return $this->stmt->rowCount();
    }
}