<?php

include("../../bd.php");

if ($_POST) {
    // print_r($_POST);
    //RECOLECTAMOS LOS DATOS DEL METODO POST
    $nombredelpuesto = (isset($_POST['nombredelpuesto']) ? $_POST['nombredelpuesto'] : "");
    //PREPARAMOS LA INSERCION DE LOS DATOS  
    $sentencia = $conexion->prepare("INSERT INTO tbl_puestos(idpuesto, nombredelpuesto) VALUES (NULL, :nombredelpuesto)");

    //asignando los valores que vienen del metodo post  del form
    $sentencia->bindParam(":nombredelpuesto", $nombredelpuesto);
    $sentencia->execute();
    header("Location: index.php");
}

?>


<?php include("../../templates/header.php") ?>
<br />

<div class="card">
    <div class="card-header">
        Puestos
        <a href="crear.php" class="btn btn-primary">Agregar puesto</a>
    </div>
    <div class="card-body">
        <form action="crear.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombredelpuesto" class="form-label">Nombre del puesto</label>
                <input type="text" class="form-control" name="nombredelpuesto" id="nombredelpuesto" aria-describedby="helpId" placeholder="">
            </div>

            <button type="submit" class="btn btn-success">Agregar</button>

            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>
    </div>
</div>




<?php include("../../templates/footer.php") ?>