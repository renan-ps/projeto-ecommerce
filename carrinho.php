<?php
	//session_start();
?>
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
			
				$idCliente = $_SESSION['idCliente'];
			
			
			if (empty($_SESSION['carrinho'])) {
				$_SESSION['carrinho'] = [];
				?>
				<div class="row" style="margin-top: 2%; text-align: center;">
					<div class="col-12">
						<h4>Seu carrinho está vazio.</h4>
					</div>
				</div>
			<?php
			} else{
			?>
			
			
			<div class="row" style="border-bottom: 1px solid #E7E4E8; margin-left: 7%; margin-right: 7%;">
			
				
				<div class="col-5">Produtos</div>
				<div class="col-1">Preço</div>
				
			</div>
			
			
				<?php 
					$soma = 0;
					foreach ($_SESSION['carrinho'] as $key => $value) : 
				?>
				<div class="row" style="margin-top: 2%;">
					<div class="col-1"></div>
					<div class="col-1"><img class="img-fluid" src="<?php echo $value['imagem']; ?>"></div>
					<div class="col-3 align-middle" style=""><p><?php echo $value['nomeProduto']; ?></p></div>
					<div class="col-2"><p>R$ <?php echo number_format($value['preco'], 2, ',', '.'); ?></p></div>
					
						
					
					
				</div>
				<?php
				$soma = $soma + $value['preco'];
				endforeach; 
				?>			
				<div class="row" style="border-top: 1px solid #E7E4E8; margin-top: 2%; margin-left: 7%; margin-right: 7%;">
					<div class="col-5">Total:</div>
					<div class="col-2" style="margin-left: -1.7%;">R$ <?php echo number_format($soma, 2, ',', '.'); }?></div>
				</div>
			
			<div class="row" style="margin-top: 3%;">
				<div class="col-md-3"></div>
				<div class="col-md-5 col-xs-12">
							<form id="efetuar_compra" method="post" action="efetuar_compra.php">
								
								
								<div class="form-group">
									<label for="tipo">Escolha o número de parcelas:</label>
									<select name="tipo" id="tipo" class="form-control"  required>
										<option value="" disabled selected>Selecione</option>
										<option value="1">À vista: R$<?php echo number_format($soma, 2, ',', '.'); ?></option>
										<option value="2">10x de R$<?php echo number_format(($soma)/10, 2, ',', '.'); ?></option>
										<option value="3">12x de R$<?php echo number_format((($soma + ($soma * 0.1))/12), 2, ',', '.'); ?></option>
									</select>
								</div>
								
								
								<div class="form-group">
									
									<input type="hidden" name="idCliente" value="<?php echo $idCliente ?>">
									<input type="hidden" name="dataCompra" value="<?php $today = getdate(); print_r($today); ?>">
									<input type="hidden" name="statusPedido" value="1">
									<input type="hidden" name="valor" value="<?php echo $soma; ?>">
									
								</div>
								
								<button type="submit" class="btn btn-warning">Comprar</button>
							</form>
						</div>
			
			</div>
			
			<?php
			
				include "rodape.php";
			?>
			
		</div>
			
		
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>