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
			<div class="row">
				
				<div class="col-12">
					<h1>Cadastro de Produto</h1>
					<form id="cadastro_produto" method="post" action="validar_cadastro_produto.php">
						
						<div class="form-group">
							<label for="nomeProduto">Nome Produto</label>
							<input type="text" class="form-control" id="nomeProduto" name="nomeProduto" required>
						</div>
						
						<div class="form-group">
							<label for="categoriaProduto">Categoria</label>
							<select class="form-control" id="categoriaProduto" name="categoriaProduto" required>
								<option disabled selected>Selecione a categoria</option>
								<?php
									$result_nome_categoria = "SELECT * FROM categorias ORDER BY nomeCategoria";
									$resultado_nome_categoria = mysqli_query($conn, $result_nome_categoria);
									while($row_nome_categoria = mysqli_fetch_assoc($resultado_nome_categoria)){ ?>
										<option class="form-control" value="<?php echo $row_nome_categoria['idCategoria']; ?>"><?php echo $row_nome_categoria['nomeCategoria']; ?> </option> <?php
									}
								?>	
							</select>

						</div>

						<div class="form-group">
							<label for="precoProduto">Preço</label>
							<input class="form-control" type="number" step="any" name="precoProduto" id="precoProduto" required>
						</div>

						<div class="form-group">
							<label for="estoque">Estoque</label>
							<input class="form-control" type = "number" name="estoque" id="estoque" required>
						</div>

						<div class="form-group">
							<label for="imagem">Imagem</label>
							<input class="form-control" type="text" name="imagem" id="imagem" required>

						</div>

						<div class="form-group">
							<label for="descricao">Descriçao</label>
							<textarea class="form-control" name="descricao" id="descricao" rows="3" required></textarea>
						</div>
						
						<div class="form-group">
							<label for="palavrasChaves">Palavras Chaves</label>
							<input type="text" class="form-control" name="palavrasChaves" id="palavrasChaves" required>
						</div>

						<div class="form-group">
							<input class="btn btn-warning" type="submit" value="enviar">
						</div>
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