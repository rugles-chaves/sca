<?php

include 'classe/conex.php';

$cod = $_POST['cod'];

$sql = "SELECT cod FROM carros where cod = $cod";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // echo  $cod;

                // Prepara a inserção no banco de dados
                $stmt = $conn->prepare("INSERT INTO acessos (cod) VALUES (?)");
                $stmt->bind_param("s", $cod);
    
                // Executa a consulta
                if ($stmt->execute()) {
                    echo "Acesso cadastrado com sucesso!";
                        header('Location: acesso.php');

                } else {
                    echo "Erro ao cadastrar o Acesso: " . $stmt->error;
                        header('Location: acesso.php');
                }
    
                // Fecha a consulta
                $stmt->close();
}else{
    echo "Não cadastrado";
}



?>