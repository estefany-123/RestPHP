<?php
require_once '../app/config/config.php';

require_once '../app/helpers/url_helper.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

spl_autoload_register(function ($nombreClase) {
    require_once 'Lib/' . $nombreClase . '.php';
});


?>