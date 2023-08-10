<?php
include("../../bd.php");

if ($_POST) {
  print_r($_POST);
  print_r($_FILES);

  $primernombre = (isset($_POST['primernombre']) ? $_POST['primernombre'] : "");
  $segundonombre = (isset($_POST['segundonombre']) ? $_POST['segundonombre'] : "");
  $primerapellido = (isset($_POST['primerapellido']) ? $_POST['primerapellido'] : "");
  $segundoapellido = (isset($_POST['segundoapellido']) ? $_POST['segundoapellido'] : "");
  $idpuesto = (isset($_POST['idpuesto']) ? $_POST['idpuesto'] : "");
  $fechadeingreso = (isset($_POST['fechadeingreso']) ? $_POST['fechadeingreso'] : "");

  //ARCHIVOS FILES
  $foto = (isset($_FILES['foto']['name']) ? $_FILES['foto']['name'] : "");
  $cv = (isset($_FILES['cv']['name']) ? $_FILES['cv']['name'] : "");

  $sentencia = $conexion->prepare("INSERT INTO `tbl_empleados` (`id`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `foto`, `cv`, `idpuesto`, `fechadeingreso`) VALUES (NULL, :primernombre, :segundonombre, 'mack', 'wood', 'foto.jpg', 'cv.pdf', '7', '2023-08-09');");
}

//puestos
$sentencia = $conexion->prepare("SELECT * FROM tbl_puestos");
$sentencia->execute();
$lista_tbl_puestos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include("../../templates/header.php") ?>
<br>
<div class="card">
  <div class="card-header">
    Ingresar Datos del empleado
  </div>

  <div class="card-footer text-muted">
    <form action="crear.php" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="primernombre" class="form-label">Primer nombre</label>
        <input type="text" class="form-control" name="primernombre" id="" aria-describedby="helpId" placeholder="Primer nombre">
      </div>
      <div class="mb-3">
        <label for="segundonombre" class="form-label">Segundo nombre</label>
        <input type="text" class="form-control" name="segundonombre" id="" aria-describedby="helpId" placeholder="Segundo nombre">
      </div>
      <div class="mb-3">
        <label for="primerapellido" class="form-label">Primer Apellido</label>
        <input type="text" class="form-control" name="primerapellido" id="" aria-describedby="helpId" placeholder="Primer apellido">
      </div>
      <div class="mb-3">
        <label for="segundoapellido" class="form-label">Segundo apellido</label>
        <input type="text" class="form-control" name="segundoapellido" id="" aria-describedby="helpId" placeholder="Segundo apellido">
      </div>
      <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" class="form-control" name="foto" id="" aria-describedby="helpId" placeholder="Segundo apellido">
      </div>
      <div class="mb-3">
        <label for="cv" class="form-label">CV</label>
        <input type="file" class="form-control" name="cv" id="" aria-describedby="helpId" placeholder="Segundo apellido">
      </div>
      <div class="mb-3">
        <label for="idpuesto" class="form-label">Puesto</label>
        <select class="form-select form-select-lg" name="idpuesto" id="idpuesto">
          <?php foreach ($lista_tbl_puestos as $registro) { ?>
            <option value="<?php echo $registro['idpuesto'] ?>"><?php echo $registro['nombredelpuesto'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="fechaingreso" class="form-control">Fecha de ingreso</label>
        <input type="date" name="fechadeingreso">
      </div>
      <button type="submit" class="btn btn-primary">Agregar registro</button>

      <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
    </form>
  </div>
</div>


<?php include("../../templates/footer.php") ?>