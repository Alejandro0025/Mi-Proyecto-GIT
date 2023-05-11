<?php include 'Includes/header.php';
?>
<h1 class="text-light">Lista libros User </h1>
<div class="container-coards">
    <?php

include_once './resources/bd/conection.php';
$con = conectar();
           
$sqlExistLibros = "SELECT  Nombre, Editorial, Autor, Descripcion FROM libros";
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
                <a href="#" class="btn btn-warning">Resumen</a>
                <a href="#" class="btn btn-success">Rentar</a>


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
</div>

<?php include 'Includes/footer.php';?>