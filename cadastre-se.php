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
			
			<div class="row" style="margin-top: 2%">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					
						<form id="cadastro_cliente" method="post" action="cadastrar_cliente.php">
							<div class="form-group">
								<label for="nome">Nome</label>
								<input type="text" class="form-control" name="nome" id="nome" placeholder="Ex: João Silva"  required>
							</div>
							
							<div class="form-group">
								<label for="nome">E-mail</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Ex: joao@email.com" required>
							</div>
							
							<div class="form-group">
								<label for="senha">Senha</label>
								<input type="password" class="form-control" name="senha" id="senha" placeholder="Sua senha"  required>
							</div>
							
							<div class="form-group">
								<label for="csenha">Confirme sua senha</label>
								<input type="password" class="form-control" name="csenha" id="csenha" placeholder="Confirme sua senha" required>
							</div>
							
							<div class="form-group">
								<label for="cpf">CPF</label>
								<input type="text" class="form-control cpf" name="cpf" id="cpf" placeholder="Ex: 111.111.111-11" required >
							</div>
							
							<div class="form-group">
								<label for="celular">Celular</label>
								<input type="text" class="form-control phone" name="celular" id="celular" placeholder="Ex: (11) 11111-1111" required >
							</div>
							
							<div class="form-group">
								<label for="endereco">Endereço</label>
								<input type="text" class="form-control" name="endereco" id="endereco" placeholder="Ex: Rua A, nº 8" required >
							</div>
							
							<div class="form-group">
								<label for="cidade">Cidade</label>
								<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Ex: Rio de Janeiro" required >
							</div>
							
							<div class="form-group">
								<label for="estado">Estado</label>
								<select name="estado" id="estado" class="form-control"  required>
									<option value="" disabled selected>Selecione</option>
									<option value="AC">AC</option>
									<option value="AL">AL</option>
									<option value="AM">AM</option>
									<option value="AP">AP</option>
									<option value="BA">BA</option>
									<option value="CE">CE</option>
									<option value="DF">DF</option>
									<option value="ES">ES</option>
									<option value="GO">GO</option>
									<option value="MA">MA</option>
									<option value="MG">MG</option>
									<option value="MS">MS</option>
									<option value="MT">MT</option>
									<option value="PA">PA</option>
									<option value="PB">PB</option>
									<option value="PE">PE</option>
									<option value="PI">PI</option>
									<option value="PR">PR</option>
									<option value="RJ">RJ</option>
									<option value="RN">RN</option>
									<option value="RS">RS</option>
									<option value="RO">RO</option>
									<option value="RR">RR</option>
									<option value="SC">SC</option>
									<option value="SE">SE</option>
									<option value="SP">SP</option>
									<option value="TO">TO</option>
								</select>
							</div>
							
							<div class="form-group">
								<button type="submit" class="btn btn-warning">Cadastre-se</button>
							</div>
							
					</form>
					
				</div>
			</div>
			
		</div>
		
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/jquery.maskedinput.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>
			$(function($){
				$(".date").mask("99/99/9999");
				$(".phone").mask("(99) 99999-9999");
				$(".cpf").mask("999.999.999-99");
				$(".ssn").mask("999-99-9999");
			});
		</script>
	</body>
</html>