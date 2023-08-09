<?php include("../../templates/header.php")?>
<br>
<div class="card">
    <div class="card-header">
       Datos del empleado
    </div>
    <div class="card-body">
        <h4 class="card-title">Title</h4>
        <p class="card-text">Text</p>
    </div>
    <div class="card-footer text-muted">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="primer_nombre" class="form-label">Primer nombre</label>
              <input type="text"
                class="form-control" name="primer_nombre" id="" aria-describedby="helpId" placeholder="Primer nombre">
            </div>
            <div class="mb-3">
              <label for="segundo_nombre" class="form-label">Segundo nombre</label>
              <input type="text"
                class="form-control" name="segundo_nombre" id="" aria-describedby="helpId" placeholder="Segundo nombre">
            </div>
            <div class="mb-3">
              <label for="primer_apellido" class="form-label">Primer Apellido</label>
              <input type="text"
                class="form-control" name="primer_apellido" id="" aria-describedby="helpId" placeholder="Primer apellido">
            </div>
            <div class="mb-3">
              <label for="segundo_apellido" class="form-label">Segundo apellido</label>
              <input type="text"
                class="form-control" name="segundo_apellido" id="" aria-describedby="helpId" placeholder="Segundo apellido">
            </div>
            <div class="mb-3">
              <label for="foto" class="form-label">Foto</label>
              <input type="file"
                class="form-control" name="foto" id="" aria-describedby="helpId" placeholder="Segundo apellido">
            </div>
            <div class="mb-3">
              <label for="cv" class="form-label">CV</label>
              <input type="file"
                class="form-control" name="cv" id="" aria-describedby="helpId" placeholder="Segundo apellido">
            </div>
            <div class="mb-3">
                <label for="puesto" class="form-label">Puesto</label>
                <select class="form-select form-select-lg" name="puesto" id="puesto">
                    <option selected>Select one</option>
                    <option value="">New Delhi</option>
                    <option value="">Istanbul</option>
                    <option value="">Jakarta</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="cv" class="form-control">Fecha de ingreso</label>
              <input type="date">
            </div>
            <button type="button" class="btn btn-primary">Agregar registro</button>

            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>
    </div>
</div>


<?php include("../../templates/footer.php")?>