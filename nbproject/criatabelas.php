<?php
$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = ""; 
$nome_banco = "BancoTeste";
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha,$nome_banco);
if ($conecta->connect_error) {
die("Conexão falhou: " . $conecta->connect_error."<br>");
}
echo "Conexão realizada com sucesso <br>"; 
$sql = "CREATE TABLE dados(
        .                         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        .                         nome VARCHAR(100) NOT NULL, 
        .                         email VARCHAR(100)NOT NULL,
        .                         senha VARCHAR(60) NOT NULL)";
if ($conecta->query($sql) === TRUE) {
echo "Tabela participantes criada com sucesso<br>";
} else {
echo "Erro na criação da tabela participantes: " . $conecta->error."<br>";
}
$conecta->close();
?>
