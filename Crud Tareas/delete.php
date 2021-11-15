<?php
    include 'conexion.php';

    $id = (int)$_GET['id'];
    if(isset($_GET['id'])){
        $sql = "DELETE FROM tareas WHERE id = '$id'";
        $del = $db->query($sql);
        if($del){
            header('location: index.php');
        }
    }
?>