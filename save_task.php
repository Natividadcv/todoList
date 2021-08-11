<?php

    include("db.php");
    //Validacion si existe a travez del metodo post un valor llamado save_Task Significa que estan mandado algo

    if(isset($_POST['save_Task'])){
        $title = $_POST['title'];
        $descripcion = $_POST['description'];

        $query = "INSERT INTO task(title, description) VALUES ('$title', '$descripcion')";
        $result = mysqli_query($conexion, $query);

        //Si no exist un resultado !result
        if(!$result){
            die("Ingrese fallido");
        }

        $_SESSION['message'] = 'Tarea Guardada Exitosa';
        $_SESSION['message_type'] = 'success';

        header("Location:index.php");





    }




?>