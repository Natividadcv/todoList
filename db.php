<?php

    session_start();
  
    $conexion = mysqli_connect(
        'localhost:3307', //Si no te funciona borra los siguiente :3307
        'root',
        '',
        'todolist'
    );

    //Comprobacion de que la conexion se efectua de manera satisfactoria
    
    // if(isset($conexion)){
    //     echo "Estamos en linea...";
    // }



   



?>