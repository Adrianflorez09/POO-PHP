<!doctype html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hola estudiantes</title>
</head>

<body background="img/1.jpg">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!--/*Barra de navegación ///-->

  <nav class="navbar navbar-light" style="background-color: #00E9FC;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">
        <H3><B>Registro de Estudiantes<B></H3>
      </a><br><br>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Bienvenidos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="principal.php"><b>Registro de Estudiantes</b></a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar Finca" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>
  <!------>
  <!--------------------------------->
  <div class="container">
    <div class="abs-center">
      <!-------------------------------->
      <br>
      <form action="insertar.php" method="POST">
        <div class="mb-1">
          <label for="exampleInputEmail1" class="form-label">ID del Estudiante</label>
          <input type="text" name="idest" class="form-control">
        </div>
        <div class="mb-1">
          <label for="exampleInputEmail1" class="form-label">Nombre del Estudiante</label>
          <input type="text" name="nomest" class="form-control">
        </div>
        <div class="mb-1">
          <label for="exampleInputEmail1" class="form-label">Apellido del Estudiante</label>
          <input type="text" name="apellest" class="form-control">
        </div>
        <div class="mb-1">
          <label for="exampleInputEmail1" class="form-label">Direccion del Estudiante</label>
          <input type="text" name="direst" class="form-control">
        </div>
        <div class="mb-1">
          <label for="exampleInputEmail1" class="form-label">Telefono del Estudiante</label>
          <input type="text" name="tellest" class="form-control">
        </div>
        <div class="mb-1">
          <label for="exampleInputEmail1" class="form-label">Acudiente</label>
          <input type="text" name="acuest" class="form-control">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Curso</label>
          <input type="text" name="curest" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
      <br>
      <br>





      <!---Tabla de Alumnos---->
      <table class="table table-striped table-success">
        <thead>
          <tr>
            <th>ID del Estudiante</th>
            <th>Nombre del Estudiante</th>
            <th>Apellido del Estudiante</th>
            <th>Direccion del Estudiante</th>
            <th>Telefono del Estudiante</th>
            <th>Acudiente del Estudiante</th>
            <th>Curso del Estudiante</th>
            <th>ACTUALIZAR</th>
            <th>ELIMINAR</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include_once "cliente.php";
          $clientes = Cliente::all();
          ?>
          <?php foreach ($clientes as $cliente) { ?>
            <tr>
              <td><?php echo $cliente->id_estudiante; ?></td>
              <td><?php echo $cliente->Nombre_estudiante; ?></td>
              <td><?php echo $cliente->Apellido_estud; ?></td>
              <td><?php echo $cliente->direccion_est; ?></td>
              <td><?php echo $cliente->telefono_est; ?></td>
              <td><?php echo $cliente->acudiente; ?></td>
              <td><?php echo $cliente->grupo_est; ?></td>
              <td><a href='actualizar.php?id=<?php echo $cliente->id_estudiante; ?>' class='btn btn-primary'>Actualizar</a></td>
              <td><a href='eliminar.php?id=<?php echo $cliente->id_estudiante; ?>' class='btn btn-danger'>Eliminar</a></td>
            </tr>
          <?php } ?>
          <!----------------------------->
    </div>
  </div>
</body>

</html>