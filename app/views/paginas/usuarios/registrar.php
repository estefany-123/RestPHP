<?php require_once RUTA_APP . '/views/inc/header.php'; ?>

<div class="container mt-5">
    <div class="col-md-8 mx-auto">
        <div class="d-flex justify-content-start mb-3">
            <a href="<?php echo RUTA_URL; ?>usuario" class="btn btn-secondary">
                Volver
            </a>
        </div>

        <div class="card card-body bg-light">
            <h2>Agregar Usuario</h2>
            <form action="<?php echo RUTA_URL; ?>usuario/agregar" method="POST">

            <!-- campo documento -->

            <div class="mb-3">
                    <label for="documento" class="form-label">Documento: <sup>*</sup></label>
                    <input
                        type="text"
                        name="documento"
                        id="documento"
                        class="form-control form-control-lg <?php echo !empty($datos['documento_error']) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $datos['documento'] ?? ''; ?>"
                        required>
                    <div class="invalid-feedback">
                        <?php echo $datos['documento_error'] ?? ''; ?>
                    </div>
                </div>

                <!-- Campo Nombre -->
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre: <sup>*</sup></label>
                    <input
                        type="text"
                        name="nombre"
                        id="nombre"
                        class="form-control form-control-lg <?php echo !empty($datos['nombre_error']) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $datos['nombre'] ?? ''; ?>"
                        required>
                    <div class="invalid-feedback">
                        <?php echo $datos['nombre_error'] ?? ''; ?>
                    </div>
                </div>


                <!-- campo Edad -->

                <div class="mb-3">
                    <label for="edad" class="form-label">Edad: <sup>*</sup></label>
                    <input
                        type="edad"
                        name="edad"
                        id="edad"
                        class="form-control form-control-lg <?php echo !empty($datos['edad_error']) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $datos['edad'] ?? ''; ?>"
                        required>
                    <div class="invalid-feedback">
                        <?php echo $datos['edad_error'] ?? ''; ?>
                    </div>
                </div>


                <!-- Campo Teléfono -->
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono: <sup>*</sup></label>
                    <input
                        type="text"
                        name="telefono"
                        id="telefono"
                        class="form-control form-control-lg <?php echo !empty($datos['telefono_error']) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $datos['telefono'] ?? ''; ?>"
                        required>
                    <div class="invalid-feedback">
                        <?php echo $datos['telefono_error'] ?? ''; ?>
                    </div>
                </div>



                <!-- Campo correo -->
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo: <sup>*</sup></label>
                    <input
                        type="email"
                        name="correo"
                        id="correo"
                        class="form-control form-control-lg <?php echo !empty($datos['correo_error']) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $datos['correo'] ?? ''; ?>"
                        required>
                    <div class="invalid-feedback">
                        <?php echo $datos['correo_error'] ?? ''; ?>
                    </div>
                </div>

                <!-- Campo cargo -->
                <div class="mb-3">
                    <label for="cargo" class="form-label">Cargo: <sup>*</sup></label>
                    <input
                        type="text"
                        name="cargo"
                        id="cargo"
                        class="form-control form-control-lg <?php echo !empty($datos['cargo_error']) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $datos['cargo'] ?? ''; ?>"
                        required>
                    <div class="invalid-feedback">
                        <?php echo $datos['cargo_error'] ?? ''; ?>
                    </div>
                </div>

                

                <!-- Campo password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña: <sup>*</sup></label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control form-control-lg <?php echo !empty($datos['password_error']) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $datos['password'] ?? ''; ?>"
                        required>
                    <div class="invalid-feedback">
                        <?php echo $datos['password_error'] ?? ''; ?>
                    </div>
                </div>

                <!-- Campo estado -->
                <div class="mb-3">
                    <label for="estado" class="form-label">Estado: <sup>*</sup></label>
                    <input
                        type="text"
                        name="estado"
                        id="estado"
                        class="form-control form-control-lg <?php echo !empty($datos['estado_error']) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $datos['estado'] ?? ''; ?>"
                        required>
                    <div class="invalid-feedback">
                        <?php echo $datos['estado_error'] ?? ''; ?>
                    </div>
                </div>


                <!-- Campo fecha_registro -->
                <div class="mb-3">
                    <label for="fecha_registro" class="form-label">Fecha de registro: <sup>*</sup></label>
                    <input
                        type="date"
                        name="fecha_registro"
                        id="fecha_registro"
                        class="form-control form-control-lg <?php echo !empty($datos['fecha_registro_error']) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $datos['fecha_registro'] ?? ''; ?>"
                        required>
                    <div class="invalid-feedback">
                        <?php echo $datos['fecha_registro_error'] ?? ''; ?>
                    </div>
                </div>


                <!-- Campo fecha_actualizacion -->
                <div class="mb-3">
                    <label for="fecha_actualizacion" class="form-label">Fecha de actualizacion: <sup>*</sup></label>
                    <input
                        type="date"
                        name="fecha_actualizacion"
                        id="fecha_actualizacion"
                        class="form-control form-control-lg <?php echo !empty($datos['fecha_actualizacion_error']) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $datos['fecha_actualizacion'] ?? ''; ?>"
                        required>
                    <div class="invalid-feedback">
                        <?php echo $datos['fecha_actualizacion_error'] ?? ''; ?>
                    </div>
                </div>


                <!-- Botón de envío -->
                <input type="submit" class="btn btn-success" value="Agregar Usuario">

            </form>
        </div>
    </div>
</div>

<?php require_once RUTA_APP . '/views/inc/footer.php'; ?>