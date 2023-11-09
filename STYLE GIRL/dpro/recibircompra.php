<?php
    $_SERVER="localhost";
    $user="root";
    $pass="";
    $db="style_girl";
    $conexion=new mysqli($_SERVER,$user,$pass,$db);
    if($conexion)
    {
        echo "<script> alert('SE HA INSERTADO CORRECTAMENTE LOS DATOS SELECCIONADOS ');location='PRINDEPROD.html';</script>";
    }
    else{
        echo("fallo");
    }

    $sql ="insert into tbl_compra (ciudad, nom_producto, direccion, telefono) values('".$_POST['ciudad']."','".$_POST['nom_producto']."','".$_POST['direccion']."','".$_POST['telefono']."')";
    $resultado= mysqli_query($conexion,$sql) or die ("error");
    mysqli_close($conexion);
?>