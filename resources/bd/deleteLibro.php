<?php
include './conection.php';
$con = conectar();

$id =$_GET['id'];



$sqlUpdateLibro = "DELETE FROM libros  WHERE  id_Libro ='$id'";

    if($consulUpdateLibro = mysqli_query($con, $sqlUpdateLibro)){
        header('location:../../listLibros.php');
    }else{
        echo "Error".$consultUpdateLibro."<br>".mysqli_error($con);
    }

mysqli_close($con);

?>