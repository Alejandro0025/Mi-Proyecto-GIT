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
<div class="modal" tabindex="-1" id="modalUpdateLibros<?php echo $responseExistLibros['id_Libro']?>"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar Libro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./resources/bd/UpdateLibro.php?id=<?php echo $responseExistLibros['id_Libro']?>"
                    method="POST" class="d-flex flex-column col-8" id="formUpdate-Libro" name="Update-Libro">
                    <div class="mb-4 ">
                        <label for="nombre" class="form-label ">Nombre</label>
                        <div>
                            <input type="text" class="form-control " name="nombre" id="nombre"
                                placeholder="Ingrese el nombre del libro"
                                value="<?php echo $responseExistLibros['Nombre']?>" />
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="editorial" class="form-label">Editorial</label>
                        <div>
                            <input type="text" class="form-control" name="editorial"
                                placeholder="Ingrese editorial del libro" id="password"
                                value="<?php echo $responseExistLibros['Editorial']?>" />
                        </div>
                    </div>
                    <div class="mb-4 ">
                        <label for="autor" class="form-label ">Autor</label>
                        <div>
                            <input type="autor" class="form-control " name="autor" id="autor"
                                placeholder="Ingrese autor del libro"
                                value="<?php echo $responseExistLibros['Autor']?>" />
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <div id="validatePass">
                            <textarea class="form-control" placeholder="Leave a comment here" name="descripcion"
                                id="floatingTextarea"><?php echo $responseExistLibros['Descripcion']?></textarea>
                        </div>
                    </div>



                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button submit" class="btn btn-success">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }?>