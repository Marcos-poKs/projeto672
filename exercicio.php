<?php
if( $_SERVER['REQUEST_METHOD'] == 'GET'){
    session_start();
    
    $login=$_GET['login'];
    $senha=$_GET['senha'];
    
    
    $local="sql10.freesqldatabase.com";
    $usuario_BD="sql10348675";
    $senha_BD="yijjFMg8St";
    $base="sql10348675";
    
    
    $tenta_conectar =  new mysqli($local,$usuario_BD,$senha_BD,$base);
    if($tenta_conectar->connect_error === TRUE)
    {    die("Deu erro na conexão ". $tenta_conectar->connect_error);}
    
    
    $tenta_achar = "SELECT * FROM dados WHERE nome='$login' AND senha='$senha'" ;
    $resultado = $tenta_conectar->query($tenta_achar);
    if ($resultado->num_rows > 0) {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        $_SESSION['logado'] = true;
        header('location:aula.php');
        
    }
    else{
        session_unset();
        session_destroy();
        echo "<script> 
                alert('Login ou senha incorreto');
                window.location.href = 'index.html';
            </script>";
      }
}
?>