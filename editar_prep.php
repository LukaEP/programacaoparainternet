<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mostrando da minha agenda</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link rel="stylesheet" href="estilo.css">
	<style>

	</style>
</head>
<body>
	<nav>
		<a href="#">Mostrar agenda</a>
		<ul>
			<li>Contatos</li>
			<li>Grupos</li>
		</ul>
	</nav>
	<?php
		$conn = mysqli_connect("127.0.0.1", "root", "", "agenda"); // abre a conexão com o banco de dados

		// testando se a conexão foi estabelecida com sucesso
		if ($conn){
			//$sql = "SELECT * FROM contatos ORDER BY nome ASC";
			$sql = "SELECT contatos.id, contatos.nome, nasc, email, numero, grupos.nome AS grupo FROM contatos, grupos WHERE grupos.id = id_grupo ORDER BY contatos.nome ASC "; // consulta ligando as duas tabelas para exibir o nome do grupo

			$registros = mysqli_query($conn, $sql);

			if (mysqli_num_rows($registros) > 0){
				// codigo para mostrar os registros

				echo ("<h1>Mostrando os contatos da agenda</h1>");

				// abrindo a tabela
				echo ("<table><tr><th>Nome</th><th>Email</th><th>Número</th><th>Grupo</th><th>Opções</th></tr>");
				
				while ($registro = mysqli_fetch_array($registros) ){
					//echo ("Nome: " . $registro["nome"]);
					//echo ("<tr><td>" . $registro["nome"] . "</td><td>". $registro["email"] . "</td><td>" . $registro["numero"] . "</td></tr>");
					echo ("<tr><td>$registro[nome]</td><td>$registro[email]</td><td>$registro[numero]</td><td>$registro[grupo]</td><td><a href='excluir_contato.php?id_contato=$registro[id]' class='del_btn'>Excluir</a> <a href='editar_contato.php?id_contato=$registro[id]' class='edit_btn'>Editar</a></td></tr>");
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

	<footer>
		<a href="#topo">Voltar</a>
		<p>Desenvolvido por</p>
	</footer>
</body>
</html>