<?php
require("conect.php");
// Obtém os valores dos campos do formulário
$usuario = $_POST["tUsuario"];
$senha = $_POST["tSenha"];

// Prepara a query de inserção
$sql = "INSERT INTO cadastro (cod, usuario, senha) VALUES ('','$usuario', '$senha')";

// Executa a query
if ($con && $sql) {
    echo "Registro criado com sucesso";
} else {
    echo "Erro ao criar o registro: " . mysqli_error($con);
}

// Fecha a conexão
?>