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
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nome</th>
								<th scope="col">Remover</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$result_nome_produto = "SELECT * FROM produtos ORDER BY idProduto";
							$resultado_nome_produto = mysqli_query($conn, $result_nome_produto);
							while($row_nome_produto = mysqli_fetch_assoc($resultado_nome_produto)){ ?>
							<tr>
								<th scope="row"><?php echo $row_nome_produto['idProduto']?></th>
								<td><?php echo $row_nome_produto['nomeProduto']?></td>
								<td>
									<form id="remover_produto" method="post" action="remover_produto_conf.php">
										<input type="hidden" name="idProduto" value="<?php echo $row_nome_produto['idProduto']; ?>">
										<button type="submit" class="btn btn-sm btn-danger">Remover</button>
									</form>
								</td>

							</tr>


							<?php
								}
							?>	
						</tbody>
					</table>
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