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
				
			?>
			
			
					

					<?php
			
					$busca = $_POST['busca'];	
					
					$result_busca = "SELECT * FROM produtos WHERE nomeProduto LIKE '%$busca%'";
					$resultado_busca = mysqli_query($conn, $result_busca);
					
					?>
					
					<div class="row" style="margin-top: 2%;">
				
						<div class="col-12" >
							<div class="card-deck">
					
					
								<?php
								
								
								while($row_busca = mysqli_fetch_assoc($resultado_busca)){
								
								?>
					
								<div class="col-4" style="margin-bottom: 2%;">
								<div class="card">
									<img src="<?php echo $row_busca['imagem'] ?>" class="card-img-top" />
									<div class="card-body">
										<h4 class="card-title"><a href="produto.php?produto=<?php echo $row_busca['idProduto'] ?>"><?php echo $row_busca['nomeProduto'] ?></a></h4>
										<h6 class="card-subtitle mb-2 text-muted"><?php echo "R$ " . $row_busca['preco'] ?></h6>
										<p class="card-text"><?php echo $row_busca['descricao'] ?></p>
										
										<form id="adicionar_carrinho" method="post" action="adicionar_carrinho.php">
											<input type="hidden" name="imagem" value="<?php echo $row_busca['imagem'] ?>">
											<input type="hidden" name="idProduto" value="<?php echo $row_busca['idProduto'] ?>">
											<input type="hidden" name="nomeProduto" value="<?php echo $row_busca['nomeProduto'] ?>">
											<input type="hidden" name="preco" value="<?php echo $row_busca['preco'] ?>">
											<button type="submit" class="btn btn-warning">Comprar</button>
										</form>
									</div>
								</div>
								</div>
								<?php
								}
								?>

							</div>
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