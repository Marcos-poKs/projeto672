<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <?php 
        session_start();
        if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            session_unset();
            echo "<script>
                alert('Esta página só pode ser acessada por usuário logado');
                window.location.href = 'index.html';
                </script>";

        }
        $logado = $_SESSION['login'];
        ?>
        <title>Aztec</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>
        		<div id="page-wrapper">

			
				<section id="header">
					<div class="container">

						
							<h1 id="logo"><a href="index.html">Aztec</a></h1>
							<p>Procurando por reparo, apenas alguma ajuda ou orientação?
                                                           Contamos com centros de serviços autorizados e próprios em todo o Brasil que irão ajudá-lo. Todos são totalmente treinados e usam peças genuínas da Aztec em todos os reparos.
                                                        </p>

						
							<nav id="nav">
								<ul>
                                                                    <li><a href="logout.php"><span>Logout</span></a></li>
									<li><a class="icon solid fa-home" href="index.html"><span>Introduction</span></a></li>
									<li>
										<a href="#" class="icon fa-chart-bar"><span>Dropdown</span></a>
										<ul>
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li><a href="#">Etiam dolore nisl</a></li>
											<li>
												<a href="#">Phasellus consequat</a>
												<ul>
													<li><a href="#">Magna phasellus</a></li>
													<li><a href="#">Etiam dolore nisl</a></li>
													<li><a href="#">Phasellus consequat</a></li>
												</ul>
											</li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
									</li>
									<li><a class="icon solid fa-cog" href="left-sidebar.html"><span>Left Sidebar</span></a></li>
									<li><a class="icon solid fa-retweet" href="right-sidebar.html"><span>Right Sidebar</span></a></li>
									<li><a class="icon solid fa-sitemap" href="no-sidebar.html"><span>No Sidebar</span></a></li>
								</ul>
							</nav>

					</div>
				</section>

			<!-- Features -->
				<section id="features">
					<div class="container">
						<header>
							<h2>Qual a categoria do seu <strong>produto?</strong></h2>
						</header>
						<div class="row aln-center">
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/tutz01.jpg" alt="" /></a>
										<header>
											<h3>Smartphone, tablet?</h3>
										</header>
										<p>Os Centros de suporte técnico da Aztec em todo o Brasil podem ajudá-lo com tudo, desde em telas rachadas até na transferência de dados. Visite o Centro de Suporte da Aztec mais próximo ou ligue ainda hoje.</p>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/tutz02.jpg" alt="" /></a>
										<header>
											<h3>TV de 32" ou menor?</h3>
										</header>
										<p>Se você tem uma TV menor, a maneira mais rápida para que possamos ajudá-lo é visitar um dos nossos centros de assistência autorizados .</p>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/tutz03.jpg" alt="" /></a>
										<header>
											<h3>Outros produtos?</h3>
										</header>
										<p>Para qualquer outro assunto, entre em contato conosco pelo número 0800 999 999 ou 9999 0000 e poderemos ajudá-lo no que precisar.</p>
									</section>

                                                        </div>
						</div>
					</div>
				</section>

			<!-- Banner -->
				<section id="banner">
					<div class="container">
						<p>Anuncie Aqui !! Contate-nos.</p>
					</div>
				</section>
			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<header>
							<h2>Mande-nos um  <strong>E-mail:</strong></h2>
						</header>
						<div class="row">
							<div class="col-6 col-12-medium">
								<section>
									<form method="post" action="#">
										<div class="row gtr-50">
											<div class="col-6 col-12-small">
												<input name="name" placeholder="Name" type="text" />
											</div>
											<div class="col-6 col-12-small">
												<input name="email" placeholder="Email" type="text" />
											</div>
											<div class="col-12">
												<textarea name="message" placeholder="Message"></textarea>
											</div>
											<div class="col-12">
												<a href="#" class="form-button-submit button icon solid fa-envelope">Enviar</a>
											</div>
										</div>
									</form>
								</section>
							</div>
							<div class="col-6 col-12-medium">
								<section>
									<p>Todos nós sabemos que a TI e a informática são prioridade e nossas empresas demandam investimentos 
                                                                            constantes nesta área para manter os processos de negócio ágeis e competitivos.
                                                                            Por isso criamos a Aztec, para trazer segurança e credibilidade com um serviço tecnico de qualidade. Contáte-nos</p>
									<div class="row">
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon solid fa-home">
													Rua choffer Lindosmar<br />
													Nashville, TN 00000<br />
													USA
												</li>
												<li class="icon solid fa-phone">
													(062) 999-0000
												</li>
												<li class="icon solid fa-envelope">
													<a href="#">Aztec@untitled.tld</a>
												</li>
											</ul>
										</div>
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon brands fa-twitter">
													<a href="#">@AzTec</a>
												</li>
												<li class="icon brands fa-instagram">
													<a href="#">instagram.com/AzTec</a>
												</li>
												<li class="icon brands fa-dribbble">
													<a href="#">dribbble.com/AzTec</a>
												</li>
												<li class="icon brands fa-facebook-f">
													<a href="#">facebook.com/AzTec</a>
												</li>
											</ul>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="links">
							<li>&copy; AzTec. Todos os Direitos Reservados.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
    </body>
</html>
