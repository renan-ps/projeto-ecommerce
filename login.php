<?php
	include "conexao.php";

?>

<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width-device-width, initial-scale=1 shrink-to-fit=no">
		<title>Webster</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
				
		
		
	</head>

	<body>
		<div class="container">
			 
			<?php
				include "cabecalho.php";
			?>
			
			<div class="row">
				<div class="col-md-3 col-xs-0"></div>
				<div class="col-md-6 col-xs-12">

					<form>
						<h3 style="margin-top: 3%; margin-bottom: 2%;">Efetue seu login</h3>
						<div class="form-group">
							<label for="exampleInputEmail1">Email do Usuário</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 	placeholder="">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Senha</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
						</div>
						<button type="submit" class="btn btn-warning">Enviar</button>

					</form>

				</div>
			</div>
			
			
			
			
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		</div>
	</body>
</html>