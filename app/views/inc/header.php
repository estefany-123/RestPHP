<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css">
    <title><?php echo NOMBRE_SITIO; ?></title>
</head>
<body>
    <div class="container mt-3">
        
        <div class="col-md-8 mx-auto">
       
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded mb-3">
            
                <div class="container-fluid">
                    <a href="<?php echo RUTA_URL; ?>" class="navbar-brand">Formatrack</a>
                    <a class="btn btn-secondary ms-3" href="<?php echo RUTA_URL; ?>usuario">Usuarios</a>
                    <a class="btn btn-secondary ms-3" href="<?php echo RUTA_URL; ?>usuario/editar">Centros</a>
                    <a class="btn btn-secondary ms-3" href="<?php echo RUTA_URL; ?>ambientespage">Tipos de Sitios</a>
                    <a class="btn btn-secondary ms-3" href="<?php echo RUTA_URL; ?>ambientespage">Municipios</a>
                    <a class="btn btn-secondary ms-3" href="<?php echo RUTA_URL; ?>ambientespage">Categorias</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                        <ul class="navbar-nav ms-auto">
                            <!-- Aquí puedes añadir más enlaces si es necesario -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>