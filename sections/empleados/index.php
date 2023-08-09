<?php include("../../templates/header.php")?>
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
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">CV</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Fecha de Ingreso</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">Christian</td>
                        <td>Imagen.jpg</td>
                        <td>Cv.pdf</td>
                        <td>Programador jr</td>
                        <td>12/12/12</td>
                        <td>
                            <a name="" id="" class="btn btn-primary" href="#" role="button">Carta</a>
                            <a name="" id="" class="btn btn-success" href="#" role="button">Editar</a>
                            <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a>
                        </td>

                    </tr>
                   
                </tbody>
            </table>
        </div>
        
    </div>
    
</div>

<?php include("../../templates/footer.php")?>
