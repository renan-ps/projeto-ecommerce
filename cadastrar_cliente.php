<?php
	include "conexao.php";
	
	$senha = $_POST['senha'];
	$csenha = $_POST['csenha'];

		

?>

<!DOCTYPE html>
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
			<div class="row" style="margin-top: 2%;">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					
					<?php
						if($senha != $csenha){
							echo "Senhas não combinam, por favor, tente novamente.";
							echo "<input class='btn-warning' type='button' value='Voltar' onClick='history.go(-1)'> ";
						}
					?>
					
					
				</div>
			</div>
		</div>
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>


