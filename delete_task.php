<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM task  WHERE id = '$id'";
        $result =  mysqli_query($conexion, $query);

        if(!$result){
            die("Fallido...");
        }

        $_SESSION['message'] = 'Task Remove Successfull';
        $_SESSION['message_type'] = 'danger';
        header("Location:index.php");
    }


?>