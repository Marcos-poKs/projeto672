<?php
include 'validaCpf.php';
$local_servidor = "sql10.freesqldatabase.com";
$nome_usuario = "sql10348675";
$senha = "yijjFMg8St";
$nome_banco = "sql10348675";

    $conecta = new mysqli($local_servidor, $nome_usuario, $senha,$nome_banco);

    
    if ($conecta->connect_error) {
        die("Conexão falhou: " . $conecta->connect_error."<br>");
    }

     $nome = $_POST["name"];
     $senha = $_POST["senhaa"];
     $email = $_POST["emaill"];
     $cpf=$_POST['cpf'];

     for ($i=0; $i <strlen($cpf) ; $i++) { 
        $cpfArray[$i]=substr($cpf,$i,1);
}
     
     $erro = FALSE;
     
     $sql = "INSERT INTO dados (nome, email, cpf, senha)
                VALUES ('$nome', '$email', '$cpf', '$senha')";
    if(empty($_POST["name"]) || empty($_POST["senhaa"])){
            echo "<script> 
                alert('Preencha todos os campos de cadastro.');
                window.location.href = 'register.html';
                </script>";
   }
        else {
            if (strlen($cpf)==11) {
                validaCpf($cpfArray,$indice=8);
                $primeiroDigito=validaCpf($cpfArray);
                $segundoDigito=validaCpf($cpfArray,$indice=9);
                if ($primeiroDigito==true && $segundoDigito==true) {
                    if ($conecta->multi_query($sql) === TRUE) {
                        echo "<script> 
                            alert('Cadastro feito com sucesso');
                            window.location.href = 'index.html';
                </script>";
            }
        }
                else{
                    echo "<script>
                        alert ('CPF invalido.');
                        window.location.href = 'register.html';
                        </script>";
            }
}
                else {
                    echo "<script>
                            alert ('CPF incompleto');
                            window.location.href = 'register.html';
                            </script>";
    }
 }
    
$conecta->close();
?>
