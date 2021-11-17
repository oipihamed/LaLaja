<?php
    
    require 'conexion.php';

    $sql= "INSERT INTO mensajes VALUES(null, '".$_POST["Nombres"]."', '".$_POST["Apellidos"]."', '".$_POST["Pais"]."', '".$_POST["Estado"]."', '".$_POST["Ciudad"]."', '".$_POST["Correo"]."', '".$_POST["Asunto"]."', '".$_POST["Mensaje"]."')";
    $resultado = mysqli_query($con,$sql) or die ('Error en el query database');
    mysqli_close($con);

    header('Refresh: 0; http://localhost/LaLaja-main/assets/pages/contacto.html');

    echo "<script>alert('Mensaje enviado exitosamente');</script>";
?>

