<?php 

$title = "INOVATECH";
$scron = "Acesso Mesa";
if ($scron == "Visualizador") {
    include 'layout/headv.php'; 
}else{
    include 'layout/head.php'; 
}

include 'classe/conex.php';
?>

<div class="container">
       <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title"><?php echo isset($scron) ? $scron : 'Título Padrão'; ?></h3></center>
                            <div class="panel-body">
                                    <form action="consulta.php" method="post" enctype="multipart/form-data">
                                        <label for="nome">Codigo de Acesso:</label><br>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Identificador" name="cod" type="text" value="">
                                        </div>
                                        <input type="submit" value="Consultar">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
            <!-- /.col-lg-12 -->
    </div>
     <!-- /.row -->
    <!-- /#page-wrapper -->
</div>

<?php include 'layout/footer.php'; ?>
