<?php
    $_SERVER="localhost";
    $user="root";
    $pass="";
    $db="style_girl";
    $conexion=new mysqli($_SERVER,$user,$pass,$db);
    if($conexion)
    {
        echo "<script> alert('SE HA INSERTADO CORRECTAMENTE LOS DATOS SELECCIONADOS ');location='diseño style girl.html';</script>";
    }
    else{
        echo("fallo");
    }

    $sql ="insert into tbl_cliente (usuario, contraseña) values('".$_POST['usuario']."','".$_POST['contraseña']."')";
    $resultado= mysqli_query($conexion,$sql) or die ("error");
    mysqli_close($conexion);
?>