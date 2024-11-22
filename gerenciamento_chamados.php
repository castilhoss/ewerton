<?php
include('../includes/db_connect.php');  // Incluir a conexão com o banco de dados

// Buscar chamados do banco de dados
$sql = "SELECT * FROM Chamados";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Chamados</title>
</head>
<body>
    <h2>Gerenciamento de Chamados</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Criticidade</th>
            <th>Status</th>
            <th>Data de Abertura</th>
            <th>Cliente</th>
            <th>Colaborador</th>
            <th>Ações</th>
        </tr>

        <?php
        // Exibir todos os chamados
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row['ID_chamado'] . "</td>
                <td>" . $row['descricao'] . "</td>
                <td>" . $row['criticidade'] . "</td>
                <td>" . $row['status'] . "</td>
                <td>" . $row['data_abertura'] . "</td>
                <td>" . $row['ID_cliente'] . "</td>
                <td>" . ($row['ID_colaborador'] ? $row['ID_colaborador'] : 'Não atribuído') . "</td>
                <td><a href='editar_chamado.php?id=" . $row['ID_chamado'] . "'>Editar</a></td>
            </tr>";
        }
        ?>
    </table>

    <br><br>
    <a href="cadastro_cliente.php">Ir para o cadastro de cliente</a>
</body>
</html>
