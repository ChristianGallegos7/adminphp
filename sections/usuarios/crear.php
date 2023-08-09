<?php include("../../templates/header.php")?>
<br/>

<div class="card">
    <div class="card-header">
        Datos del usuario
    </div>
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="usaurio" class="form-label">Nombre del usuario</label>
              <input type="text"
                class="form-control" name="usaurio" id="usaurio" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password"
                class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
              <label for="correo" class="form-label">Correo</label>
              <input type="gmail"
                class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="">
            </div>

            <button type="button" class="btn btn-success">Agregar</button>

            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>
    </div>
</div>




<?php include("../../templates/footer.php")?>
