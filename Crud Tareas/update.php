

   <?php include_once 'vista/headerupdate.php'; ?>
    
    <div class="container">
        <div class="row m-t-5">            
            <div class="col-md-20 col-md-offset-1">
                <table class="table table-dark table-hover table-sm">
                     
                    <form method="POST">
                        <div class="form-group mb-3">
                            <label>Nombre de tarea</label>
                            <input type="text" required name="task" class="form-control" value="<?php echo $row['nombre'];?>">
                        </div>
                       <div class="form-group mb-3">
                            <label>Fecha de tarea</label>
                            <input type="date" required name="date" class="form-control" value="<?php echo $row['Fecha_Inicio'];?>">
                        </div>
                        <input type="submit" name="send" value="Actualizar" class="btn btn-primary pull-right"> 
                        <a href="index.php" class="btn btn-danger">Cancelar</a>
                    </form>
                </table>            
            </div>
        </div>    
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>