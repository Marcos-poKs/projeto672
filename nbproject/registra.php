<?php
    $local_servidor = "localhost";
    $nome_usuario = "root";
    $senha = "";
    $nome_banco = "BancoTeste";

    $conecta = new mysqli($local_servidor, $nome_usuario, $senha,$nome_banco);

    
    if ($conecta->connect_error) {
        die("Conexão falhou: " . $conecta->connect_error."<br>");
    }
        echo "Conexão realizada com sucesso <br>";

     $nome = $_POST["name"];
     $senha = $_POST["senhaa"];
     $email = $_POST["emaill"];

     
     $erro = FALSE;
     
     $sql = "INSERT INTO dados (nome, email,senha)
                VALUES ('$nome', '$email', '$senha')";

            if ($conecta->multi_query($sql) === TRUE) {
                echo "<script> 
                alert('Cadastro feito com sucesso');
                window.location.href = 'index.html';
            </script>";
            }
            else {
                echo "Erro: " . $sql . "<br>" . $conecta->error."<br>";
    }
$conecta->close();
?>