<!DOCTYPE html>
<?php
    $id = $_GET['id'];
$local_servidor = "sql10.freesqldatabase.com";
$nome_usuario = "sql10348675";
$senha = "yijjFMg8St";
$nome_banco = "sql10348675";

    $conecta = new mysqli($local_servidor, $nome_usuario, $senha,$nome_banco);
    
    $sql = "select * from dados where id = $id";
    
    $resultado = $conecta->query($sql);
    
    if($resultado ->num_rows > 0){
        $linha=$resultado -> fetch_array(MYSQLI_ASSOC);
    }
?>
<html lang="pt-br">
<head>
	<title>Aztec</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
        
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="alteracao.php">
					<span class="login100-form-title p-b-26">
						Formulario de Alteração
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" value="<?php echo $linha['id']; ?>" name="id" readonly>
						<span class="focus-input100" data-placeholder="Id"></span>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" value="<?php echo $linha['nome']; ?>" name="login">
						<span class="focus-input100" data-placeholder="Usuario"></span>
					</div>
                                        <div class="wrap-input100 validate-input">
						<input class="input100" type="email" value="<?php echo $linha['email']; ?>" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="type" value="<?php echo $linha['senha']; ?>" name="senha">
						<span class="focus-input100" data-placeholder="Senha"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Alterar
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>