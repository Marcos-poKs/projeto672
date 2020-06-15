<?php
$local_servidor = "sql10.freesqldatabase.com";
$nome_usuario = "sql10348675";
$senha = "yijjFMg8St";
$nome_banco = "sql10348675";
    $cod = $_POST['id'];
    $nome = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['senha'];

    $conecta = new mysqli($local_servidor, $nome_usuario, $senha,$nome_banco);
    
    $sql = "update dados set nome = '$nome',
                             email = '$email',
                             senha = '$password'
                where id = $cod";
    
    $resultado = $conecta->query($sql);
    
    if($resultado == true){
        echo "<script>
                alert ('Atualizado com Sucesso')
                window.location.href = 'dist/user.php';
                </script>";
    }
    ?>
    