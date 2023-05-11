<?php 
function conectar(){
    $servidor = "localhost";
    $usuarioBD="root";
    $pwdBD ="";
    $nomBD ="ProgWeb";

    $db = mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);
    if (!$db) {
        die("La conexion fallo".mysqli_connect_error());
    }
    else {
        // echo "Conexion exitosa";

        mysqli_query($db, "SET NAMES 'UTF8'");

        return $db;
    }

}
?>