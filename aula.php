<!DOCTYPE html>
<?php
    session_start();
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">

		<title>Aztec</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
        <meta name="author" content="templatemo">
        <!-- 
        Lavish HTML CSS Template
        https://templatemo.com/tm-458-lavish
        -->
        
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

                <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<!-- animate -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
		<!-- fullpage -->
		<link rel="stylesheet" href="css/jquery.fullPage.css">
		<!-- custom -->
		<link rel="stylesheet" href="css/templatemo-style.css">
	</head>
	<body>
		<!-- start home -->
		<div id="home" class="section">
			<div class="container">
				<div class="row">
                                                    <div class="container">
                    <div class="row">
                    <?php
                     if(!isset($_SESSION['logado'])):
                     ?>
                    <div class="navbar-nav">
                    <a class="btn btn-default smoothScroll wow fadeInUp" href="index.html">Login<span class="sr-only">(current)</span></a>
                    </div>
                    <?php
                    endif;
                    ?>
                    <?php
                    if(isset($_SESSION['logado'])):
                    ?>
                    <div class="navbar-nav">
                    <a class="btn btn-default smoothScroll wow fadeInUp" href="logout.php">Logout<span class="sr-only">(current)</span></a>
                    <a class="btn btn-default smoothScroll wow fadeInUp" href="user.html">Acesse seu Perfil<span class="sr-only">(current)</span></a>
                    </div>
                    <?php
                    endif;
                    ?>
                    </div>
                    </div>
					<div class="col-md-2"></div>
					<div class="col-md-8 wow fadeIn" data-wow-delay="0.9s">
						<h3>Acabe com o lag </h3>
						<h1>Aztec</h1>
						<h2 class="rotate">PRATICIDADE , LEVEZA  , SEGURANÇA , DESEMPENHO</h2>
						<p>Com o nosso sistema você garante rotas otimizadas e estabilidade na conexão do servidor, melhorando o desempenho de sua rede !</p>
						<a href="verifica.php" class="btn btn-default smoothScroll wow fadeInUp" data-wow-delay="1s">Conheça !!</a>
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
		</div>
		<!-- end home -->

		<!-- start work -->
		<div id="work" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow bounce">
						<h2>Conheça nossas features</h2>
					</div>
                </div>  
                
                <div class="row">
					<div class="col-md-4 col-xs-11 wow fadeInUp" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-object media-left">
								<i class="fa fa-laptop"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">CONEXÃO MULTIPATH</h3>
								<p>Os pacotes da conexão são enviados simultaneamente por diferentes rotas, assim aumentando a garantia que o pacote será entregue.</p>
							</div>
						</div>
					</div>
                    
					<div class="col-md-4 col-xs-11 wow fadeInUp" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-object media-left">
								<i class="fa fa-link"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">SERVIDORES EM TODO O MUNDO</h3>
								<p>Centenas de servidores espalhados por todo mundo, otimizando a conexão de qualquer lugar para qualquer lugar.</p>
							</div>
						</div>
					</div>
                    
					<div class="col-md-4 col-xs-11 wow fadeInUp" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-object media-left">
								<i class="fa fa-paper-plane"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">OTIMIZAÇÃO EM TEMPO REAL</h3>
								<p>A busca pela melhor rota é feita em tempo real, garantindo que você sempre estará na melhor rota possível.</p>
							</div>
						</div>
					</div>
                    
				</div>
			</div>
		</div>
		<!-- end work -->

		<!-- start about -->
		<div id="about" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-11 wow fadeInLeft" data-wow-delay="0.9s">
						<h2>LIBERDADE</h2>
						<h4>Sua conexão sendo totalmente utilizada sem nenhum tipo de gargalos(lags).</h4>
						<p>Veja ao lado(ou abaixo caso esteja em um smartphone) os índices de efetividade medidos em porcentagem para cada atividade feita por você na internet com nosso serviço.</p>
						<p>(medições feitas em ambientes controlados, podem sofrer alterações dependendo de sua real conexão a internet.)</p>
					</div>
					<div class="col-md-6 col-xs-11 wow fadeInRight" data-wow-delay="0.9s">
						<span class="text-top">Programação Online <small>95%</small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
							</div>
						<span>Streming de Videos(como ouvinte) <small>98%</small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
							</div>
						<span>Streaming de Videos(como interlocutor) <small>80%</small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
							</div>
						<span>Jogos em Geral <small>75%</small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
							</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end about -->
		<!-- start contact -->
		<div id="contact" class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-lg-offset-1 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
						<address>
							<p class="contact-title">DUVIDAS ? CONTATE-NOS</p>
                                                        <i>Caso tenha algo a tratar com ouvidoria sobre o serviço ou simplismente queira mais informações, nos envie um email, nossa equipe estará protificada a lhe atender. Tambem disponibilizamos nosso telefone do SAC para uma melhor forma de manter o contato.</i>
							<p><i class="fa fa-phone"></i> 0800-999-9999</p>
							<p><i class="fa fa-envelope-o"></i> aztec@company.com</p>
							<p><i class="fa fa-map-marker"></i> 120 Old Walking Street, GL 16060</p>
						</address>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-10 wow fadeInUp" data-wow-delay="0.6s">
						<form role="form" method="post" action="#">
							<input name="name" type="text" class="form-control" id="name" placeholder="Seu nome">
							<input name="email" type="email" class="form-control" id="email" placeholder="Seu Email">
							<textarea name="message" rows="5" class="form-control" id="message" placeholder="Mensagem"></textarea>
							<input name="send" type="submit" class="form-control" id="send" value="ENVIAR">
						</form>
					</div>
					<div class="col-md-1 col-sm-1"></div>
				</div>
			</div>
		</div>
		<!-- end contact -->

		<!-- start footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeIn" data-wow-delay="0.9s">
						<p>Copyright &copy; 2020 Aztec Professional Inc Ltda. 
                        
                        . Designed by <a rel="nofollow noopener" href="https://templatemo.com">templatemo</a></p>
						<hr>
						<ul class="social-icon">
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-instagram"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->

	</div>

		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- fullpage -->
		<script src="js/jquery.fullPage.js"></script>
		<!-- smoothScroll -->
		<script src="js/smoothscroll.js"></script>
		<!-- wow -->
		<script src="js/wow.min.js"></script>
		<!-- text rotater -->
		<script src="js/jquery.simple-text-rotator.js"></script>
		<!-- custom -->
		<script src="js/custom.js"></script>

	</body>
</html>