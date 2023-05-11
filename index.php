<?php include 'Includes/header.php';
?>
<div class="bg-dark">

    <!-- Crousel -->
    <div>
        <div id="carouselExample" class="carousel slide ">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="resources/img/biblioteca-slider2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="resources/img/biblioteca-slider3.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="resources/img/biblioteca-slider3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Cards -->
    <h1>
        Contamos con los siguientes Libros
    </h1>
    <div class="container-fluid row d-flex justify-content-center">
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
</div>
<?php include 'Includes/footer.php';?>