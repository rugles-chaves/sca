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
?>

<!-- DESCRIÇÂO COD -->

<?php include 'layout/footer.php'; ?>
