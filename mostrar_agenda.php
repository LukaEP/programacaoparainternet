<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mostrando da minha agenda</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<?php
		$conn = mysqli_connect("127.0.0.1", "root", "", "agenda"); // abre a conexão com o banco de dados

		// testando se a conexão foi estabelecida com sucesso
		if ($conn){
			$sql = "SELECT * FROM contatos ORDER BY nome ASC";

			$registros = mysqli_query($conn, $sql);

			if (mysqli_num_rows($registros) > 0){
				// codigo para mostrar os registros

				echo ("<h1>Mostrando os contatos da agenda</h1>");

				// abrindo a tabela
				echo ("<table><tr><th>Nome</th><th>Email</th><th>Número</th><th>Opções</th></tr>");
				
				while ($registro = mysqli_fetch_array($registros) ){
					//echo ("Nome: " . $registro["nome"]);
					//echo ("<tr><td>" . $registro["nome"] . "</td><td>". $registro["email"] . "</td><td>" . $registro["numero"] . "</td></tr>");
					echo ("<tr><td>$registro[nome]</td><td>$registro[email]</td><td>$registro[numero]</td><td><a href='excluir_contato.php?id_contato=$registro[id]' class='del_btn'>Excluir</a> <a href='editar_contato.php?id_contato=$registro[id]' class='edit_btn'>Editar</a></td></tr>");
				}

				echo ("</table>");
			} else {
				echo ("<h1>Não há nada para ser mostrado :( </h1>
					");
			}

			mysqli_close($conn); // fechando a conexao com o BD

		} else {
			echo ("Houve um erro ao conectar com o banco de dados");
		}


	?>
</body>
</html>