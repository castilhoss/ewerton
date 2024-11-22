<?php
// Conexão com o banco de dados MySQL
$host = 'localhost';      // O host onde o banco de dados está
$usuario = 'root';        // Usuário padrão do MySQL
$senha = 'root';              // Senha do MySQL (deixe em branco se não houver)
$banco_de_dados = 'EWERTON';  // O banco de dados que você criou

// Criação da conexão
$conn = new mysqli($host, $usuario, $senha, $banco_de_dados);

// Verificando se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
