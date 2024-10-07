<?php 
header("refresh: 1;");
$title = "INOVATECH";
$scron = "Visualizador";
if ($scron == "Visualizador") {
    include 'layout/headv.php'; 
}else{
    include 'layout/head.php'; 
}

include 'classe/conex.php';

$sql = "SELECT acessos.cod, nome, placa, data_hora, imagem FROM acessos inner join carros on acessos.cod = carros.cod ORDER BY acessos.data_hora DESC LIMIT 1";
$result = $conn->query($sql);
?>

<div class="container">
	<div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                     <center><h3 class="panel-title"><?php echo isset($scron) ? $scron : 'Título Padrão'; ?></h3></center>
                        <div class="panel-body">

                        <?php
                        if ($result->num_rows > 0) {

                                while($row = $result->fetch_assoc()) {
                                    ?>
                                        <div class="form-group">
                                        <td><img src=<?=$row["imagem"]?> alt='Imagem do carro' width='300'></td> 
                                        <!-- <input class="form-control" placeholder="Produto" value ="<?=$row["nome"]?>" name="nome" type="text" autofocus> -->
                                        </div>
                                        
                                        <div class="form-group">
                                        <label>Nome: <?=$row["nome"]?></label>  
                                        <!-- <input class="form-control" placeholder="Produto" value ="<?=$row["nome"]?>" name="nome" type="text" autofocus> -->
                                        </div>

                                        <div class="form-group">
                                        <label>Placa: <?=$row["placa"]?></label>  
                                        <!-- <input class="form-control" placeholder="Produto" value ="<?=$row["nome"]?>" name="nome" type="text" autofocus> -->
                                        </div>

                                        <div class="form-group">
                                        <label>Id: <?=$row["cod"]?></label>  
                                        <!-- <input class="form-control" placeholder="Produto" value ="<?=$row["nome"]?>" name="nome" type="text" autofocus> -->
                                        </div>
                                    <?php 
                                }

                                echo "</table>";
                            } else {
                                echo "Nenhum carro cadastrado.";
                            }
                            ?></div>
                <!-- /.panel-body -->
            </div>
        </div>
            <!-- /.col-lg-12 -->
    </div>
     <!-- /.row -->
    <!-- /#page-wrapper -->
</div>


<?php include 'layout/footer.php'; ?>
