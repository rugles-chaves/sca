<?php
// Configurações do banco de dados
include 'classe/conex.php';

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $placa = $_POST['placa'];
    $cod = $_POST['cod'];
    
    // Verifica se uma imagem foi enviada
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        // Processa o upload da imagem
        $imagem = $_FILES['imagem'];
        $imagemNome = $imagem['name'];
        $imagemTmp = $imagem['tmp_name'];
        $imagemDestino = 'uploads/' . $imagemNome; // Diretório onde a imagem será armazenada

        // Verifica se o diretório de upload existe, se não, cria
        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }

        // Move a imagem para o diretório desejado
        if (move_uploaded_file($imagemTmp, $imagemDestino)) {
            // Prepara a inserção no banco de dados
            $stmt = $conn->prepare("INSERT INTO carros (nome, placa, cod, imagem) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $nome, $placa, $cod, $imagemDestino);

            // Executa a consulta
            if ($stmt->execute()) {
                echo "Carro cadastrado com sucesso!";
            } else {
                echo "Erro ao cadastrar o carro: " . $stmt->error;
            }

            // Fecha a consulta
            $stmt->close();
        } else {
            echo "Erro ao mover a imagem para o diretório de upload.";
        }
    } else {
        echo "Erro ao enviar a imagem.";
    }
}

// Fecha a conexão
$conn->close();
?>
