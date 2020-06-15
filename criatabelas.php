<?php
$nome_servidor = "sql10.freesqldatabase.com";
$nome_usuario = "sql10348675";
$senha = "yijjFMg8St"; 
$nome_banco = "sql10348675";
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha,$nome_banco);
if ($conecta->connect_error) {
die("Conexão falhou: " . $conecta->connect_error."<br>");
}
echo "Conexão realizada com sucesso <br>"; 
$sql = "CREATE TABLE dados(
        .                         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        .                         nome VARCHAR(100) NOT NULL, 
        .                         email VARCHAR(100)NOT NULL,
        .                         cpf VARCHAR(11) NOT NULL,
        .                         senha VARCHAR(60) NOT NULL)";
if ($conecta->query($sql) === TRUE) {
echo "Tabela dados criada com sucesso<br>";
} else {
echo "Erro na criação da tabela dados: " . $conecta->error."<br>";
}
$conecta->close();
?>
