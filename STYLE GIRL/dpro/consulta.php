<?php
include("con_db.php");
if (isset($_POST['usuario']) && isset($_POST['contraseña'])){
    $username = $_POST['usuario'];
    $password = $_POST['contraseña'];
    $sql = "SELECT * FROM tbl_cliente WHERE usuario='$username' AND contraseña='$password'";
    $result = mysqli_query($conex, $sql);
    if (mysqli_num_rows($result) >0) {
        echo "<script> alert('bienvenido');location='PRINDEPROD.html';</script>";
    } else{
        echo "usuario o contraseña incorrectos";
    }
}
mysqli_close($conex);
?>