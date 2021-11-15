<?php
    include_once 'conexion.php';

    if(isset($_POST['send'])){

        $name= htmlspecialchars($_POST['task']);
        $date= htmlspecialchars($_POST['date']);

        $sql = "INSERT INTO tareas (nombre,Fecha_inicio) VALUES ('$name','$date')";

        $val = $db->query($sql);

        if($val){
            header('location: index.php');
        }else{
            echo "<h1>Ha ocurrido un error al insertar la tarea, reintente</h1>";
        }
    }