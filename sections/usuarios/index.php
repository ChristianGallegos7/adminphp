<?php
include("../../bd.php");

//eliminar usuario por el id

if (isset($_GET['txtID'])) {
    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : "";
    $sentencia = $conexion->prepare("DELETE FROM tbl_usuarios WHERE id=:id");

    //parametros
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    header("Location: index.php");
}




include("../../bd.php");
$sentencia = $conexion->prepare("SELECT * FROM `tbl_usuarios`");
$sentencia->execute();
$lista_tbl_usuarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include("../../templates/header.php") ?>
<br />
<!-- rina guerra -->
<div class="card">
    <div class="card-header">
        Usuarios
        <a href="crear.php" class="btn btn-primary">Agregar usuarios</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre del usuario</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($lista_tbl_usuarios as $registro) { ?>
                        <tr class="">
                            <td scope="row"><?php echo $registro['id'] ?></td>
                            <td><?php echo $registro['usuario'] ?></td>
                            <td>*****</td>
                            <td><?php echo $registro['correo'] ?></td>
                            <td>
                                <a class="btn btn-primary" href="editar.php?txtID=<?php echo $registro['id'] ?>" role="button">Editar</a>

                                <a class="btn btn-danger" href="index.php?txtID=<?php echo $registro['id'] ?>" role="button">Eliminar</a>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

</div>




<?php include("../../templates/footer.php") ?>