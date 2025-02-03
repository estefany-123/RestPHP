<?php
// configuracion de acceso a la base de datos

define('DB_HOST', 'localhost');
define('DB_CONNECTION','pgsql');
define('DB_PORT',5432);
define('DB_USER', 'postgres');
define('DB_PASS', '123');
define('DB_NOMBREDB', 'formatrack');
define('KEY','pepe');
//para el login
//ruta de la aplicacion

define('RUTA_APP', dirname(__DIR__));

//ruta url

define('RUTA_URL', 'http://localhost/formatrack_prueba/'); //Se debe cambiar la ruta.


define('NOMBRE_SITIO', 'Formatrack');