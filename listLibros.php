<?php include 'Includes/header.php';
?>
<div class="container">
    <h1 class="text-light">Lista libros Admin</h1>

    <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCreateLibros">Insertar</a>
</div>

<?php

    include_once './resources/bd/conection.php';
    $con = conectar();
               
    $sqlExistLibros = "SELECT  * FROM libros";
    $consultExistLibros = mysqli_query($con, $sqlExistLibros);
    //$responseExistLibros= mysqli_fetch_array($consultExistLibros);
    //if($responseExistLibros){
    //return $responseExistLibros;
    while($responseExistLibros= mysqli_fetch_array($consultExistLibros)){
    ?>

<div class="container-fluid row d-flex justify-content-center">
    <div class="card m-4" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body text-light">
            <h5 class="card-title">
                <?php echo $responseExistLibros['Nombre']?>
            </h5>
            <p class="card-text">
                <?php echo $responseExistLibros['Descripcion']?>

            </p>
            <a href="#" class="btn btn-warning" data-bs-toggle="modal"
                data-bs-target="#modalUpdateLibros<?php echo $responseExistLibros['id_Libro']?>">Editar</a>
            <a href="#" class="btn btn-danger   " data-bs-toggle="modal"
                data-bs-target="#modalDeleteLibros">Eliminar</a>

        </div>
    </div>

</div>
<?php
//   }else{
//     return $errExistLibros = "No existen libros Registrados";
// }
// mysql_close($con);
}
?>



<!-- Modal Registrar Lirbo -->
<?php include 'modalLibros.php';?>
<?php include 'modalUpdateLibros.php';?>
<?php include 'modalDeleteLibros.php';?>



<?php include 'Includes/footer.php';?>