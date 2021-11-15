<!doctype html>
<?php
    include 'conexion.php';
    
    $pagina = (isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1);
    $porpagina = (isset($_GET['porpagina']) && (int)($_GET['porpagina']) <= 20 ? (int)$_GET['porpagina'] : 10);
    $start = ($pagina > 1) ? ($pagina * $porpagina) - $porpagina : 0;

    $sql= "SELECT * FROM tareas LIMIT ".$start." , ".$porpagina." ";
    $total = $db->query("SELECT * FROM tareas")->num_rows;
    $paginas = ceil($total / $porpagina);

    $rows = $db->query($sql);
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/98ae0c7e8b.js"></script>
    <script src="https://use.fontawesome.com/e815fe86cc.js"></script>
    <script src="https://use.fontawesome.com/6a0e30cb02.js"></script>


    <title>Agenda de tareas</title>
  </head>
  <body>

<nav class="navbar navbar-dark bg-dark mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Agenda de Tareas</a>
            </div>
        </div>
    </nav>