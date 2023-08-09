<?php
$url_base = "http://localhost/dashboard/admin/";
// $url_base="http://localhost/admin/";
?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand navbar-light bg-light">
      <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="#" aria-current="page">Sistema<span class="visually-hidden">(current)</span></a>
        <a class="nav-item nav-link btn btn-info text-white" href="<?php echo $url_base; ?>sections/empleados/">Empleados</a>
        <a class="nav-item nav-link btn btn-primary mx-3 text-white" href="<?php echo $url_base; ?>sections/puestos/">Puestos</a>
        <a class="nav-item nav-link btn btn-warning text-white" href="<?php echo $url_base; ?>sections/usuarios/">Usuarios</a>
        <a class="nav-item nav-link btn btn-danger text-white mx-3" href="#">Cerrar Sesion</a>
      </div>
    </nav>
  </header>
  <main class="container">