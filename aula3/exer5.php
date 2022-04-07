<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	Elabore uma calculadora que recebe dados de um formulário através do método POST e exibe o resultado na tela. Você deve colocar um elemento do tipo select para permitir que o usuário escolha a operação (soma, subtração, multiplicação e divisão). Necessário validar as entradas.
	<form method="POST">
		Número 1: <input type="text" name="n1"> <br>
		Número 2: <input type="text" name="n2"> <br>
		Operacao: 
			<select name="operacao">
				<option value="somar">Somar</option>
				<option value="subtracao" selected>Subtrair</option>
				<option value="mult">Multiplicar</option>
				<option value="div">Dividir</option>
			</select>
			<input type="submit" name="enviar" value="Enviar">
	</form>
	<?php 
		// testa se o usuario clicou no botao
		if (isset($_POST['enviar'])) {
			$numero1 = $_POST['n1'];
			$numero2 = $_POST['n2'];

			// teste se os dois campos foram preenchidos
			if (!empty($numero1) && !empty($numero2)) {
				// foram preenchidos
				// testa se os valores sao númericos
				if (is_numeric($numero1) && is_numeric($numero2)){
					// os valores são números
					$op = $_POST['operacao'];

					$resultado = 0;
					if ($op == "somar")
						$resultado = $numero1 + $numero2;
					else if($op == "subtracao")
						$resultado = $numero1 - $numero2;
					else if($op == "mult")
						$resultado = $numero1 * $numero2;
					else if($op == "div")
						$resultado = $numero1 / $numero2;

					// mostrar o resutado da operacao
					echo ("O resultado da operacao é: <b>$resultado</b>");
				} else {
					echo ("Verifique os dados digitados. Apenas números são permitidos.");
				}
			} else {
				echo("Por favor, verifique os valores digitados");
			}
		}
	?>
</body>
</html>