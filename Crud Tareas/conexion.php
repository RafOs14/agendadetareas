<?php

    $db = new Mysqli;
    $db->connect('localhost','root','','crudtareas');

    if(!$db){
        echo "Ha ocurrido un error con la conexion a la base de datos";
    }
?>