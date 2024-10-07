<?php 

$title = "INOVATECH";
$scron = "Visualizador";
if ($scron == "Visualizador") {
    include 'layout/headv.php'; 
    header("refresh: 1;");
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
                                   
                            
                                        <!-- Incluir forma  -->

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
