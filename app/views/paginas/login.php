<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
        <div class="col-md-8 mx-auto">
        <div class="card card-body bg-light">
                <h2>Loguear</h2>
                
                <form action="<?php echo RUTA_URL; ?>paginas/agregar" method="POST">

                    <!-- Campo Nombre -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Documento: <sup>*</sup></label>
                        <input
                            type="text"
                            name="nombre"
                            id="nombre"
                            class="form-control form-control-lg"
                        
                            required>
                        <div class="invalid-feedback">
                            
                        </div>
                    </div>

                    <!-- Campo Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Contraseña: <sup>*</sup></label>
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control form-control-lg "
                            required>
                        <div class="invalid-feedback">
                            
                        </div>
                    </div>

                    <!-- Botón de envío -->
                    <input type="submit" class="btn btn-success" value="Inicar">
                </form>
            </div>

        </div>
    </div>
    
</body>
</html>



<?php require RUTA_APP . '/views/inc/footer.php'; ?>