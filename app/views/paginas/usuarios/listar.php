<?php require RUTA_APP . '/views/inc/header.php'; ?>

<div class="container mt-5">
    <div class="col-md-8 mx-auto">
        <button>
            <a href="<?php echo RUTA_URL; ?>usuario/agregar/" class="btn btn-warning btn-sm">Agregar usuario</a>
        </button>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Documento</th>
                    <th>Nombre(s)</th>
                    <th>edad</th>
                    <th>telefono</th>
                    <th>correo</th>
                    <th>cargo</th>
                    <th>contraseña</th>
                    <th>estado</th>
                    <th>fecha_registro</th>
                    <th>fecha_actualizacion</th>
                    <th colspan="2" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>

            <!-- <pre><?php print_r($datos['usuarios']); ?></pre>  muestra datos de la bd-->

                <?php foreach ($datos['usuarios'] as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario->id_usuario; ?></td>
                        <td><?php echo $usuario->documento; ?></td>
                        <td><?php echo $usuario->nombre; ?></td>
                        <td><?php echo $usuario->edad; ?></td>
                        <td><?php echo $usuario->telefono; ?></td>
                        <td><?php echo $usuario->correo; ?></td>
                        <td><?php echo $usuario->cargo; ?></td>
                        <td><?php echo $usuario->password;?></td>
                        <td><?php echo $usuario->estado; ?></td>
                        <td><?php echo $usuario->fecha_registro; ?></td>
                        <td><?php echo $usuario->fecha_actualizacion; ?></td>
                        <td class="text-center">
                            <a href="<?php echo RUTA_URL; ?>usuario/editar/<?php echo $usuario->id_usuario ?>" class="btn btn-warning btn-sm">Editar</a>
                        </td>
                        <td class="text-center">
                            <a href="<?php echo RUTA_URL; ?>usuario/borrar/<?php echo $usuario->id_usuario ?>" class="btn btn-danger btn-sm">Borrar</a>
                        </td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require RUTA_APP . '/views/inc/footer.php'; ?>