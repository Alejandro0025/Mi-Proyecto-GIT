<div class="modal" tabindex="-1" id="modalCreateLibros">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Insertar Libro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./resources/bd/createLibro.php" method="POST" class="d-flex flex-column col-8"
                    id="form-Libro" name="Registro-Libro">
                    <div class="mb-4 ">
                        <label for="nombre" class="form-label ">Nombre</label>
                        <div>
                            <input type="text" class="form-control " name="nombre" id="nombre"
                                placeholder="Ingrese el nombre del libro" />
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="editorial" class="form-label">Editorial</label>
                        <div>
                            <input type="text" class="form-control" name="editorial"
                                placeholder="Ingrese editorial del libro" id="password" />
                        </div>
                    </div>
                    <div class="mb-4 ">
                        <label for="autor" class="form-label ">Autor</label>
                        <div>
                            <input type="autor" class="form-control " name="autor" id="autor"
                                placeholder="Ingrese autor del libro" />
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <div id="validatePass">
                            <textarea class="form-control" placeholder="Leave a comment here" name="descripcion"
                                id="floatingTextarea"></textarea>
                        </div>
                    </div>



                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>