<?php
	session_start();
	include "conexao.php";

?>
	
		<div class="row" style="margin-top: 1%;" >
			<div class="col-md-2 col-xs-12">
				<img class="img-fluid" src="imagens/logo.jpg">
			</div>
			<div class="col-md-7 col-xs-12" style="margin-top: 4%" >
				<input class="form-control" type="text" placeholder="Buscar">
			</div>
			<div class="col-md-3 col-xs-12" style="margin-top: 4.5%; text-align: center;">
				<?php
				
					if($_SESSION['nome'] != ''){
						
						echo "<p>Olá, " . $_SESSION['nome'] . "</p>";
						echo "<p><a href='logout.php'>Sair</a></p>";
					}
							else{
						
						echo "<p>Olá visitante!</p>";
						echo "<p><a href='login.php'>Login</a> ou <a href='cadastre-se.php'>Cadastre-se</a></p>";
					}
				
				
				?>
				
				
			</div>
		</div>
		
		<!--  NAVBAR  -->
		<div class="row" style="margin-top: 1%;  margin-bottom: 1%">
			
			<div class="col-12" >
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand md-0" href="index.php">Webster</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-	target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Telefonia
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Smartfones</a>
									<a class="dropdown-item" href="#">Celulares</a>
									<a class="dropdown-item" href="#">Smartwatchs</a>
									<a class="dropdown-item" href="#">Acessórios</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Telefones fixos</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Informática
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Notebooks</a>
									<a class="dropdown-item" href="#">Computadores</a>
									<a class="dropdown-item" href="#">All in One</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Multifuncionais</a>
									<a class="dropdown-item" href="#">Monitores</a>
									<a class="dropdown-item" href="#">HDs Externos</a>
									<a class="dropdown-item" href="#">Pen Drives</a>
									<a class="dropdown-item" href="#">Projetores</a>
								</div>
							</li>
							
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									TVs e Acessórios
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Smart TV</a>
									<a class="dropdown-item" href="#">TV LED</a>
									<a class="dropdown-item" href="#">Ultra HD/4K</a>
									<a class="dropdown-item" href="#">DVDs e Blu-Rays</a>
								</div>
							</li>
							
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Eletrodomésticos
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Geladeiras e refrigeradores</a>
									<a class="dropdown-item" href="#">Máquinas de lavar</a>
									<a class="dropdown-item" href="#">Fogões</a>
									<a class="dropdown-item" href="#">Coifas</a>
									<a class="dropdown-item" href="#">Lava-Louças</a>
								</div>
							</li>
							
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Eletroportáteis
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Fritadeiras</a>
									<a class="dropdown-item" href="#">Fornos Elétricos</a>
									<a class="dropdown-item" href="#">Panelas Elétricas</a>
									<a class="dropdown-item" href="#">Cafeteiras</a>
									<a class="dropdown-item" href="#">Ferros de passar</a>
									<a class="dropdown-item" href="#">Batedeiras</a>
								</div>
							</li>
							
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Móveis e decoração
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Escritório</a>
									<a class="dropdown-item" href="#">Cozinha</a>
									<a class="dropdown-item" href="#">Dormitório</a>
									<a class="dropdown-item" href="#">Colchões</a>
									<a class="dropdown-item" href="#">Sala de Jantar</a>
									<a class="dropdown-item" href="#">Sala de Estar</a>
									<a class="dropdown-item" href="#">Banheiro</a>
									<a class="dropdown-item" href="#">Área de Serviço</a>
									<a class="dropdown-item" href="#">Decoração</a>
								</div>
							</li>
							
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Entretenimento
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Filmes</a>
									<a class="dropdown-item" href="#">Games</a>
									<a class="dropdown-item" href="#">Livros</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		
		<!--  FIM NAVBAR  -->
			
	