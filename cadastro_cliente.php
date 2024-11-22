<?php
include('../includes/db_connect.php');  // Incluir a conexão com o banco de dados

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    // Insere o cliente no banco de dados
    $sql = "INSERT INTO Clientes (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        echo "Cliente cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h2>Cadastro de Cliente</h2>
    <form method="POST" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone"><br><br>
        <button type="submit">Cadastrar</button>
    </form>

    <br><br>
    <a href="gerenciamento_chamados.php">Ir para o gerenciamento de chamados</a>
</body>
</html>
