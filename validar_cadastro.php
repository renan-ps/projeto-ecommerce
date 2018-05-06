<?php
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];
	$senha = $_POST['senha'];
	$csenha = $_POST['csenha'];
	$celular = $_POST['celular'];
	$endereco = $_POST['endereco'];
	$cidade = $_POST['cidade'];
	$estado =$_POST['estado'];

	//Cria a verificação de email e cpf
	$verificar = "SELECT email, cpf FROM clientes WHERE email = '$email' or cpf = '$cpf'";
	$resultado = mysqli_query($conn, $verificar);


	
	if($senha != $csenha){
		echo "<p>Senhas não combinam, por favor, tente novamente.</p>";
		echo "<button type='submit' class='btn btn-warning' onClick='history.go(-1)'>Voltar</button>";
		mysqli_close($conn); //encerra a conexão
		
	} else {
		
		if($emailcpf=mysqli_fetch_assoc($resultado)){
			
			echo"<p>Usuário já cadastrado</p>";
			mysqli_close($conn); //encerra a conexão
		
		} else{
			
			//Montar as cláusulas(instruções) MySQL/SQL para envio dos dados.
			$inserir = "INSERT INTO clientes values('', '$nome', '$email', '$senha', '$cpf', '$celular', '$endereco', '$cidade', '$estado', '')";
			
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