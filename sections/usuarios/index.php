<?php include("../../templates/header.php")?>
<br/>
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
            <tr class="">
                <td scope="row">1</td>
                <td>Christian</td>
                <td>Christian123</td>
                <td>Christian@gmail.com</td>
                <td>
                    <input name="btnEditar" id="" class="btn btn-info" type="button" value="Editar">

                    <input name="btnEliminar" id="" class="btn btn-danger" type="button" value="Eliminar">
                </td>
            </tr>
           
        </tbody>
    </table>
</div>

    </div>
    
</div>




<?php include("../../templates/footer.php")?>
