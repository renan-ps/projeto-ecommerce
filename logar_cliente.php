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

					<?php

					$email = $_POST['email'];
					$senha = sha1($_POST['senha']);

					$verificar = "SELECT * FROM clientes WHERE emailCliente = '$email' and senhaCliente = '$senha'";
					$resultado = mysqli_query($conn, $verificar);
		
					if($dados=mysqli_fetch_assoc($resultado)){
						$_SESSION['nome'] = $dados['nomeCliente'];
						$_SESSION['tipo'] = $dados['tipo'];	
						$_SESSION['idCliente'] = $dados['cliente'];
						echo "<script>location.href='index.php';</script>";
						//header("location: index.php");
	
					} else{
	
						echo "<p>Login e/ou senha inválido(s).</p>";
						echo "<button type='submit' class='btn btn-warning' onClick='history.go(-1)'>Voltar</button>";

					}
					?>

					

				</div>
			</div>
			
			
			
			
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		</div>
	</body>
</html>