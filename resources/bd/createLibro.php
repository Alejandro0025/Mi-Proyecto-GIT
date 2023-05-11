<?php
include './conection.php';
$con = conectar();

$nombre = $_POST['nombre'];
$editorial = $_POST['editorial'];
$autor = $_POST['autor'];
$descripcion= $_POST['descripcion'];



$sqlExistLibro = "SELECT Nombre FROM libros WHERE Nombre='".$nombre."'";
$consultExistLibro = mysqli_query($con, $sqlExistLibro);
$responseExistLibro = mysqli_fetch_array($consultExistLibro);

if(!$responseExistLibro){
    
    // Generamos id aleatorio para libro
    $numero=rand(1,1000);
    $idLibro = date("d-m-Y").$numero;

    $consultCreateLibro ="INSERT INTO libros VALUES('$idLibro','$nombre','$editorial','$autor','$descripcion')";
    
    if(mysqli_query($con,$consultCreateLibro)){
        header('location:../../listLibros.php');
    }else{
        echo "Error".$consultCreateLibro."<br>".mysqli_error($con);
    }
}else{
    echo "El libro ya existe";
}
mysqli_close($con);

?>