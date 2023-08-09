<?php
include("../../bd.php");

if (isset($_GET['txtID'])) {
    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : "";

    $sentencia = $conexion->prepare("SELECT * FROM tbl_puestos WHERE idpuesto=:idpuesto");
    //params
    $sentencia->bindParam(":idpuesto", $txtID);
    $sentencia->execute();
    $registro = $sentencia->fetch(PDO::FETCH_LAZY);
    $nombredelpuesto = $registro['nombredelpuesto'];
}

if ($_POST) {
    // print_r($_POST);
    //RECOLECTAMOS LOS DATOS DEL METODO POST
    $txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
    $nombredelpuesto = (isset($_POST['nombredelpuesto']) ? $_POST['nombredelpuesto'] : "");
    //PREPARAMOS LA INSERCION DE LOS DATOS  
    $sentencia = $conexion->prepare("UPDATE tbl_puestos SET nombredelpuesto=:nombredelpuesto WHERE idpuesto=:idpuesto");

    //asignando los valores que vienen del metodo post  del form
    $sentencia->bindParam(":nombredelpuesto", $nombredelpuesto);
    $sentencia->bindParam(":idpuesto", $txtID);
    $sentencia->execute();
    header("Location: index.php");
}
?>


<?php include("../../templates/header.php") ?>
<br />

<div class="card">
    <div class="card-header">
        Editar Puesto
        <!-- <a href="crear.php" class="btn btn-primary">Agregar puesto</a> -->
    </div>
    <div class="card-body">
        <form action="editar.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="txtID" class="form-label">ID:</label>
                <input type="text" class="form-control" name="txtID" id="txtID" aria-describedby="helpId" placeholder="Id" readonly value="<?php echo $txtID; ?>">
            </div>

            <div class="mb-3">
                <label for="nombredelpuesto" class="form-label">Nombre del puesto</label>
                <input type="text" class="form-control" name="nombredelpuesto" id="nombredelpuesto" aria-describedby="helpId" placeholder="Puesto" value="<?php echo $nombredelpuesto; ?>">
            </div>

            <button type="submit" class="btn btn-success">Actualizar</button>

            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>
    </div>
</div>


<?php include("../../templates/footer.php") ?>