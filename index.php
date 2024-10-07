<?php 
$title = "Projeto";
$scron = "CADASRO DE USUARIO";
if ($scron == "Visualizador") {
    include 'layout/headv.php'; 
}else{
    include 'layout/head.php'; 
}
?>

<div class="container">
	<div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                     <center><h3 class="panel-title"><?php echo isset($scron) ? $scron : 'Título Padrão'; ?></h3></center>
                        <div class="panel-body">
                             <form action="cadastrar_carro.php" method="post" enctype="multipart/form-data" >

                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nome" name="nome" type="text" autofocus>
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" placeholder="Placa" name="placa" type="password" value="">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" placeholder="Identificador" name="cod" type="text" value="">
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" type="file" id="imagem" name="imagem" accept="image/*">
                                        </div>

                                        <form action="cadastrar_carro.php" method="post" enctype="multipart/form-data">
                                              
     
                                        </div>
                                        <input type="submit" value="Cadastrar" class="btn btn-lg btn-success btn-block" />
                                        <!-- Change this to a button or input when using this as a form -->
                                        
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
