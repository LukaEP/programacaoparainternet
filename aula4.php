<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de usuário</title>
</head>
<body>
	<form method="POST" action="processa.php">
		<fieldset>
			<legend>Adicionando um novo usuário</legend>
			Nome: <input type="text" name="nome" pattern="[a-z]*"> <br>
			Data de nascimento: <input type="date" name="nascimento"> <br>
			Numero telefônico: <input type="text" name="numero"> <br>
			Email: <input type="email" name="email" > <br>
			Senha: <input type="password" name="senha"> <br>
			<input type="submit" name="enviar" value="Enviar">
		</fieldset>
	</form>
	<style type="text/css">
		input:invalid {
			animation: shake 300ms;
		}
		@keyframes shake {
			25% { transform: translateX(4px) ; }
			50% { transform: translateX(-4px); }
			25% { transform: translateX(4px); }
		}
	</style>
</body>
</html>