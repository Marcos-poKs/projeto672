<?php
   session_start();
        if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            session_unset();
            echo "<script>
                window.location.href = 'preparacaoCadastro.html';
                </script>";
            
        }
        else{
            echo"<script>
                window.location.href = 'user.php';
                </script>";
        }
        $logado = $_SESSION['login'];
        ?>
