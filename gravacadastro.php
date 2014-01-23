<?php
	require "config.php";

	if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['cpf'])){

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$cpf = $_POST['cpf'];

		echo "O meu é:".$nome."e meu emai é:".$email."e meu cpf é:".$cpf;

		$sql = "INSERT INTO cadastros (nome, email, cpf)
				VALUES('$nome', '$email', '$cpf')";
		
		$result = $mysqli->query($sql);
	}

	if (isset($_POST['nome_euvi']) && isset($_POST['endereco_euvi']) && isset($_POST['homemseta'])){

		$nome_euvi = $_POST['nome_euvi'];
		$endereco_euvi = $_POST['endereco_euvi'];
		$homemseta = $_POST['homemseta'];

		echo "O meu é:".$nome_euvi." e eu vi o homem seta na:".$endereco_euvi."e o nome dele é:".$homemseta;
		
		$sql_euvi = "INSERT INTO cadastros (nome, email, cpf)
				VALUES('$nome_euvi', '$endereco_euvi', '$homemseta')";
		
		$query_euvi = $mysqli->query($sql_euvi); 

	}

	

?>
