<html>
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, initial-scale=1 shrink-to-fit=no">
		<title>Webster</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilo.css">
		
	</head>

	<body>
		<div class="container">
			
			<?php
				include "cabecalho.php";
				include "conexao-pdo.php";
				
				$idCliente = $_SESSION['idCliente'];
				$stmt = $pdo->prepare("SELECT * FROM pedidos WHERE idCliente = '$idCliente' ");
				$stmt->execute();
				//if($alvos = $stmt->fetchAll()){
			
				if($_SESSION['tipo'] == 2){
			?>
			
			<div class="row">
				<div class="col-9">
					<p>Olá, <?php echo $_SESSION['nome']; ?>! Seja bem vindo à sua página de usuário.</p>
					<p>Tipo da conta: Vendedor.</p>
				</div>
				<div class="col-3">
					<a class="btn btn-warning btn-block" href="cadastrar_vendedor.php" role="button">Cadastrar vendedor</a>
					<a class="btn btn-warning btn-block" href="consultar_vendas.php" role="button">Consultar vendas</a>
					<a class="btn btn-warning btn-block" href="cadastrar_produto.php" role="button">Cadastrar Produto</a>
				</div>
				
			</div>	
			
			<?php
				}else{
			?>
				<div class="row">
					<div class="col-12">
						<p>Olá, <?php echo $_SESSION['nome']; ?>! Seja bem vindo à sua página de usuário.</p>
					</div>
					<div class="row">
						<?php
							//if($alvos = $stmt->fetchAll()){
						?>
					</div>
				</div>
			
			
			<?php
				}
			?>
			
			
			
			
			<?php
			
				include "rodape.php";
			?>
			
		</div>
			
		
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>