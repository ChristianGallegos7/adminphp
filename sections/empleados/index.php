<?php
include("../../bd.php");

//listar los empleados
$sentencia = $conexion->prepare("SELECT *,
(SELECT nombredelpuesto 
FROM tbl_puestos
WHERE tbl_puestos.idpuesto=tbl_empleados.idpuesto limit 1) as puesto 
FROM tbl_empleados");
$sentencia->execute();
$lista_tbl_empleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include("../../templates/header.php") ?>
<br>
<h4>Empleados</h4>
<div class="card">
    <div class="card-header">
        <a href="crear.php" class="btn btn-primary btn-sm float-right">Agregar Empleado</a>

    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table table-info">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">CV</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Fecha de Ingreso</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($lista_tbl_empleados as $registro) { ?>

                        <tr class="">
                            <td scope="row"><?php echo $registro['id'] ?></td>
                            <td>
                                <?php echo $registro['primernombre'] ?>
                                <?php echo $registro['segundonombre'] ?>
                                <?php echo $registro['primerapellido'] ?>
                                <?php echo $registro['segundoapellido'] ?>
                            </td>
                            <td><?php echo $registro['foto'] ?></td>
                            <td><?php echo $registro['cv'] ?></td>
                            <td><?php echo $registro['puesto'] ?></td>
                            <td><?php echo $registro['fechadeingreso'] ?></td>
                            <td>
                                <a name="" id="" class="btn btn-primary" href="#" role="button">Carta</a>
                                <a name="" id="" class="btn btn-success" href="#" role="button">Editar</a>
                                <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a>
                            </td>

                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div>

</div>

<?php include("../../templates/footer.php") ?>