<?php

$id = $_GET['id'];
$local_servidor = "sql10.freesqldatabase.com";
$nome_usuario = "sql10348675";
$senha = "yijjFMg8St";
$nome_banco = "sql10348675";

    $conecta = new mysqli($local_servidor, $nome_usuario, $senha,$nome_banco);

    $sql = "delete from dados where id = $id";

    $delete = $conecta->query($sql);
    
    if($delete == true){
        echo "<script>
                        alert ('Usuario Exluido com Sucesso.');
                        window.location.href = 'user.php';
                        </script>";
    }
    else{
        echo "erro ao excluir";
    }

?>


