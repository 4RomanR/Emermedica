<?php
    $conexion = mysqli_connect('localhost','root', '', 'victor') or die(mysqli_error($mysqli));
    
    insertar($conexion);


    function insertar($conexion){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $numero = $_POST['numero'];

        $consulta = "INSERT INTO usuarios(nombre, email, numero) VALUES ('$nombre', '$email', '$numero')";
        mysqli_query($conexion, $consulta);
        mysqli_close($conexion);

        
    }

?>