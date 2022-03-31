<?php
	// isset testa se uma variavel existe
	if (isset($_POST['enviar']) == true) {
		// codigo a ser executado se a variavel estiver definida

		// usando a funcao empty para saber se um campo foi preenchido
		if (empty($_POST["nome"]) == true) {
			echo ("Por favor preencha o campo <b>nome</b>");
		} else if (empty($_POST["nascimento"])){
			// exibindo a mesagem de erro com javascript
			//echo("<script>alert('Preencha a data de nascimento');</script>");
			echo("Preencha a data de <b>nascimento</b>");
		} else if (empty($_POST["numero"])) {
			echo("Preencha o <b>número telefônico</b>");
		} else if(empty($_POST["email"])){
			echo("Preencha o <b>email</b>");
		} else {
			// aqui as condicoes foram satisfeitas, ou seja, todos os campos foram preenchidos
			$nome = $_POST["nome"];
			$nascimento = $_POST["nascimento"];
			$numero = $_POST["numero"];
			$email = $_POST["email"];
			$senha = $_POST["senha"];

			echo("Dados recebidos");
			echo("Nome: $nome<br>Data de nascimento: $nascimento <br>Número telefônico: $numero <br>Email: $email");
		}
	} else {
		// redirecionamento para outra página
		header("location: aula4.php");
	}

	// exemplo de uso da função is_string
	/*if (is_string($nome)) {
		echo ("a variavel nome é uma string");
	} else {
		echo ("a variavel nome não é uma string");
	}*/

	// exemplo de uso da função is_int
	$pi = 3.1415;

	/*
	if (is_int($pi)) {
		echo ("a variavel pi é um inteiro");
	} else {
		echo ("a variavel pi não é um inteiro");
	}
	*/

?>