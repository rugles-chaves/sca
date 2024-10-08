<?php 
// header("refresh: 1;");
$title = "INOVATECH";
$scron = "Relatório de Acessos";
if ($scron == "Visualizador") {
    include 'layout/headv.php'; 
    header("refresh: 1;");
}else{
    include 'layout/head.php'; 
}
include 'classe/conex.php';

// Consulta SQL para obter o registro mais recente
$sql = "SELECT acessos.cod, carros.nome, carros.placa, acessos.data_hora, carros.imagem
        FROM acessos
        INNER JOIN carros ON acessos.cod = carros.cod
        ORDER BY acessos.data_hora DESC";

$result = $conn->query($sql);
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo isset($scron) ? $scron : 'Título Padrão'; ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- <div class="panel-heading"> -->
                          <!-- <?php echo isset($scron) ? $scron : 'Título Padrão'; ?> -->
                        <!-- </div> -->
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nome</th>
                                        <th>Placa(s)</th>
                                        <th>Data Hora</th>
                                        <th>Foto</th>
                                    </tr>
                                </thead>
                                <?php
                                
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) { ?>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td><?=$row["cod"]?></td>
                                        <td><?=$row["nome"]?></td>
                                        <td><?=$row["placa"]?></td>
                                        <td class="center"><?=$row["data_hora"]?></td>
                                        <td class="center"><img src='<?=$row["imagem"]?>' alt='Imagem do carro' width='50'></td>
                                    </tr>                           
                                </tbody>
                                   <?php } ?>
                            </table>
                            <!-- /.table-responsive -->
                         
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->



<?php
// Verifica se há resultados

    echo "</table>";
} else {
    echo "Nenhum acesso registrado.";
}

// Fecha a conexão
$conn->close();
?>


<?php include 'layout/footer.php'; ?>
