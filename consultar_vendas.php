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
			
				if($_SESSION['tipo'] == 2){
			?>
			<div class="row">
				<div class="col-12">
					<table class="table table-hover table-sm">
						<thead>
							<tr>
								<th scope="col">Cod.</th>
								<th scope="col">Cliente</th>
								<th scope="col">Produto</th>
								<th scope="col">Data da Compra</th>
								<th scope="col">Valor Total</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$result_pedidos = "SELECT * FROM pedidos ORDER BY idPedido DESC";
							$resultado_pedidos = mysqli_query($conn, $result_pedidos);
							while($row_pedidos = mysqli_fetch_assoc($resultado_pedidos))
								{
							?>
							<tr>
								<th scope="row"><?php echo $row_pedidos['idPedido']?></th>
								<td>
									<?php
										$idCl = $row_pedidos['idCliente'];
										$nomeCliente = "SELECT * FROM clientes WHERE idCliente = '$idCl'";
										$nomeClienteN = mysqli_query($conn, $nomeCliente);
										while($rowNome = mysqli_fetch_assoc($nomeClienteN))
										{
											echo $row_pedidos['idCliente'] . ". " . $rowNome['nomeCliente'];
										}
									?>
								
								</td>
								
								
								
								<td>
									<?php
										$idProd = explode(",",$row_pedidos['idProduto']);
										for($i=0; $i<count($idProd); $i++){
								
								
										$result_nome_prods = "SELECT * FROM produtos WHERE idProduto = '$idProd[$i]' ";
										$resultado_nome_prods = mysqli_query($conn, $result_nome_prods);
										while($row_nome_prods = mysqli_fetch_assoc($resultado_nome_prods))
										{
											echo "<p>" . $row_nome_prods['nomeProduto'] . "</p>";
										}
										}	
									?>
								
								</td>
								
								<td><?php echo $row_pedidos['dataCompra']?></td>
								<td><?php echo "R$ " . number_format($row_pedidos['valorTotal'], 2, ',', '.')?></td>
								<td>
									<form id="alterar_status_venda" method="post" action="alterar_status_venda.php">
										<div class="input-group">
											<select class="custom-select" id="status" name="status">
												<option selected disabled><?php echo $row_pedidos['statusPedido'] ?></option>
												<option value="Em processamento.">Em processamento.</option>
												<option value="Pagamento aprovado.">Pagamento aprovado.</option>
												<option value="Nota emitida.">Nota emitida.</option>
												<option value="Pedido enviado.">Pedido enviado.</option>

											</select>
											<input type="hidden" name="idPedido" value="<?php echo $row_pedidos['idPedido'] ?>">
											<div class="input-group-append">
												<button class="btn btn-outline-warning" type="submit">Salvar</button>
											</div>
										</div>
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
				}
				if ($_SESSION['tipo'] == 1 || !isset($_SESSION['tipo'])){
			?>
			
			<div class="row">
				<div class="col-12">
					<h1>Erro 404 - Página não encontrada.</h1>
				</div>
			</div>
			
			
			<?php
				}
				include "rodape.php";
			?>
			
		</div>
			
		
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>