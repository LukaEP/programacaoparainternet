<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mostrando da minha agenda</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
		require_once("menu.php");
	?>
	<div id="conteudo">
	<?php
		require_once("conecta.php");

		
		//$sql = "SELECT * FROM contatos ORDER BY nome ASC";
		$sql = "SELECT contatos.id, contatos.nome, nasc, email, numero, grupos.nome AS grupo FROM contatos, grupos WHERE grupos.id = id_grupo ORDER BY contatos.nome ASC "; // consulta ligando as duas tabelas para exibir o nome do grupo

		$registros = mysqli_query($conn, $sql);

		if (mysqli_num_rows($registros) > 0){
			// codigo para mostrar os registros

			echo ("<h1>Mostrando os contatos da agenda</h1>");
			
			echo ("<a href='inserir_contato.php' class='btn btn_primary'>Inserir contato</a><br><br>");

			echo ("<div class='dados'>");

			// abrindo a tabela
			echo ("<table><tr><th>Nome</th><th>Email</th><th>Número</th><th>Grupo</th><th>Opções</th></tr>");
			
			while ($registro = mysqli_fetch_array($registros) ){
				//echo ("Nome: " . $registro["nome"]);
				//echo ("<tr><td>" . $registro["nome"] . "</td><td>". $registro["email"] . "</td><td>" . $registro["numero"] . "</td></tr>");
				echo ("<tr><td>$registro[nome]</td><td>$registro[email]</td><td>$registro[numero]</td><td>$registro[grupo]</td><td><a href='excluir_contato.php?id_contato=$registro[id]' class='btn del_btn'>Excluir</a> <a href='editar_contato.php?id_contato=$registro[id]' class='btn edit_btn'>Editar</a></td></tr>");
			}

			echo ("</table>");
			echo ("</div>");
		

			mysqli_close($conn); // fechando a conexao com o BD

		} else {
			echo ("Houve um erro ao conectar com o banco de dados");
		}


	?>
	</div>
	<script src="js/mobile-navbar.js"></script>
</body>
</html>