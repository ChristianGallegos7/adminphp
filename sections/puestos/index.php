<?php

include("../../bd.php");

//eliminar por el id

if (isset($_GET['txtID'])) {
    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : "";
    $sentencia = $conexion->prepare("DELETE FROM tbl_puestos WHERE idpuesto=:idpuesto");

    //params
    $sentencia->bindParam(":idpuesto", $txtID);
    $sentencia->execute();
    header("Location: index.php");
}



$sentencia = $conexion->prepare("SELECT * FROM tbl_puestos");
$sentencia->execute();
$lista_tbl_puestos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
// print_r($lista_tbl_puestos);
?>

<?php include("../../templates/header.php") ?>
<br />

<div class="card">
    <div class="card-header">
        Puestos
        <a href="crear.php" class="btn btn-primary">Agregar puesto</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre del puesto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($lista_tbl_puestos as $registro) { ?>

                        <tr class="">
                            <td scope="row"><?php echo $registro['idpuesto'] ?></td>
                            <td><?php echo $registro['nombredelpuesto'] ?></td>
                            <td>
                                <a class="btn btn-primary" href="editar.php?txtID=<?php echo $registro['idpuesto'] ?>" role="button">Editar</a>

                                <a class="btn btn-danger" href="index.php?txtID=<?php echo $registro['idpuesto'] ?>" role="button">Eliminar</a>

                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div>

</div>




<?php include("../../templates/footer.php") ?>