<?php require_once RUTA_APP . '/views/inc/header.php'; ?>

<div class="container mt-5">
    <div class="col-md-8 mx-auto">
        <div class="d-flex justify-content-start mb-3">
            <a href="<?php echo RUTA_URL; ?>paginas" class="btn btn-secondary">
                Volver
            </a>
        </div>

        <div class="card card-body bg-light">
            <h2>Editar Usuario</h2>
            <form action="<?php echo RUTA_URL; ?>/usuario/editar/<?php echo $datos['id_usuario']; ?>" method="POST">

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre: <sup>*</sup></label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $datos['nombre']; ?>" class="form-control form-control-lg" required>
                </div>

                <div class="mb-3">
                    <label for="edad" class="form-label">Edad: <sup>*</sup></label>
                    <input type="text" name="edad" id="edad" value="<?php echo $datos['edad']; ?>" class=" form-control form-control-lg" required>
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono: <sup>*</sup></label>
                    <input type="text" name="telefono" id="telefono" value="<?php echo $datos['telefono']; ?>" class=" form-control form-control-lg" required>
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label">correo: <sup>*</sup></label>
                    <input type="email" name="correo" id="correo" value="<?php echo $datos['correo']; ?>" class=" form-control form-control-lg" required>
                </div>

                <div class="mb-3">
                    <label for="cargo" class="form-label">Cargo: <sup>*</sup></label>
                    <input type="text" name="cargo" id="cargo" value="<?php echo $datos['cargo']; ?>" class=" form-control form-control-lg" required>
                </div>

                <div class="mb-3">
                    <label for="estado" class="form-label">Estado: <sup>*</sup></label>
                    <input type="text" name="estado" id="estado" value="<?php echo $datos['estado']; ?>" class=" form-control form-control-lg" required>
                </div>

                <div class="mb-3">
                    <label for="fecha_registro" class="form-label">Fecha de registro: <sup>*</sup></label>
                    <input type="date" name="fecha_registro" id="fecha_registro" value="<?php echo $datos['fecha_registro']; ?>" class=" form-control form-control-lg" required>
                </div>

                <div class="mb-3">
                    <label for="fecha_actualizacion" class="form-label">Fecha de actualizacion: <sup>*</sup></label>
                    <input type="date" name="fecha_actualizacion" id="fecha_actualizacion" value="<?php echo $datos['fecha_actualizacion']; ?>" class=" form-control form-control-lg" required>
                </div>

                <input type="submit" class="btn btn-success" value="Editar Ambiente">
            </form>
        </div>
    </div>
</div>
<?php require_once RUTA_APP . '/views/inc/footer.php'; ?>