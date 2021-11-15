<?php include_once 'vista/searchheader.php'; ?>
    
    <div class="container">
        <div class="row m-t-5">            
            <div class="col-md-20 col-md-offset-1">
                <table class="table table-dark table-hover table-sm">
                    <button type="button" data-bs-target="#addNuevo" data-bs-toggle="modal" class="btn btn-success"><span class="fa fa-plus"></span> Agregar tarea</button>
                    <button class="btn btn-primary ms-2" onclick="print()">Imprimir</button>
                    <hr>  
                    <!-- The Modal -->
                    <div id="addNuevo" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Nueva Tarea</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                            <!-- Modal body -->
                                <div class="modal-body">
                                    <form method="POST" action="add.php" id="MyFormAdd">
                                        <div class="form-group mb-3">
                                            <label>Nombre de tarea</label>
                                            <input type="text" required name="task" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Fecha de tarea</label>
                                            <input type="date" required name="date" class="form-control">
                                        </div>
                                        <input type="submit" name="send" value="Aceptar" class="btn btn-primary pull-right"> 
                                    </form>                                 
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-12 text-center">
                        <p>Buscar</p>
                        <form action="search.php" method="POST" class="form-group">
                            <input type="text" placeholder="Buscar" name="search" class="form-control">
                        </form>
                    </div> 
                    <hr>    
                    <?php if(mysqli_num_rows($rows) < 1): ?>   
                        <h2 class="text-danger text-center">No se han encontrado tareas con los filtros de busqueda</h2>
                        <a href="index.php" class="btn btn-warning">Volver</a>  
                        
                    <?php else: ?>
                    <thead>
                        <tr>
                            <th scope="col">Nro.</th>
                            <th scope="col">Tarea</th>
                            <th scope="col">Fecha</th>
                            <th scope="col" colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php while($row = $rows->fetch_assoc()): ?>
                            <th scope="row"><?php echo $row['id']?></th>
                            <td class="col-md-10"><?php echo $row['nombre']?></td>
                            <td class="col-md-8"><?php echo $row['Fecha_Inicio']?></td>
                            <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success btn-sm">Editar</a></td>
                            <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm">Eliminar</a></td>
                        </tr>  
                            <?php endwhile;?>                     
                    </tbody>
                </table>
                <?php endif; ?>                  
                               
            </div>
        </div>    
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>