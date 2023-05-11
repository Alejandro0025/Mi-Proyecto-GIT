<?php
include './conection.php';
$con = conectar();

$id =$_GET['id'];
$nombre = $_POST['nombre'];
$editorial = $_POST['editorial'];
$autor = $_POST['autor'];
$descripcion= $_POST['descripcion'];



$sqlUpdateLibro = "UPDATE  libros SET id_Libro =$id,Nombre='$nombre', Editorial = '$editorial', Autor='$autor', Descripcion = '$descripcion' WHERE  id_Libro ='$id'";

    if($consulUpdateLibro = mysqli_query($con, $sqlUpdateLibro)){
        header('location:../../listLibros.php');
    }else{
        echo "Error".$consultUpdateLibro."<br>".mysqli_error($con);
    }

mysqli_close($con);

?>