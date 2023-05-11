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
<div class="modal fade" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" id="modalDeleteLibros">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title">Esta seguro que desea <span class="text-danger">Eliminar el Libro
                        <?php echo $responseExistLibros['Nombre']?></span></h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <form action="./resources/bd/deleteLibro.php?id=<?php echo $responseExistLibros['id_Libro']?>"
                    method="POST" class="d-flex flex-column col-8" id="formUpdate-Libro" name="Update-Libro">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success " data-bs-dismiss="modal">Cancelar</button>
                        <button type="button submit" class="btn btn-danger ">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
}
?>