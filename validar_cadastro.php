<?php
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];
	$senha = sha1($_POST['senha']);
	$csenha = sha1($_POST['csenha']);
	$celular = $_POST['celular'];
	$endereco = $_POST['endereco'];
	$cidade = $_POST['cidade'];
	$estado =$_POST['estado'];

	
	if($senha != $csenha){
		echo "<p>Senhas não combinam, por favor, tente novamente.</p>";
		echo "<button type='submit' class='btn btn-warning' onClick='history.go(-1)'>Voltar</button>";
		mysqli_close($conn); //encerra a conexão
		
	} else {
		
		//Cria a verificação de email e cpf
		$verificar = "SELECT emailCliente, cpf FROM clientes WHERE emailCliente = '$email' or cpf = '$cpf'";
		$resultado = mysqli_query($conn, $verificar);
		
		if($dados=mysqli_fetch_assoc($resultado)){
			
			echo"<p>Usuário já cadastrado.</p>";
			echo"<p><a href='login.php'>Fazer login</a></p>";
			mysqli_close($conn); //encerra a conexão
		
		} else{
			
			//Montar as cláusulas(instruções) MySQL/SQL para envio dos dados.
			$inserir = "INSERT INTO clientes(nomeCliente, emailCliente, senhaCliente, cpf, telefone, endereco, cidade, estado) values('$nome', '$email', '$senha', '$cpf', '$celular', '$endereco', '$cidade', '$estado')";
			
			//Enviar os dados para a tabela
			$enviar = mysqli_query($conn, $inserir);
			
			if($enviar){
				echo "Usuário cadastrado com sucesso!";
			} else{
				echo "Usuário não cadastrado.";
				mysqli_close($conn); //encerra a conexão
			}
			
		}
		
		
		
	}



?>