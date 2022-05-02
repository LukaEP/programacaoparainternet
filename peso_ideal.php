<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<!-- Elabore um formulário que lê duas informações: altura (h) e sexo de um individuo e em seguida, calcule o peso ideal, utilizando as fórmulas:
		a)	Para homens: (72.7*h) – 58
		b)	Para mulheres: (62.1*h) - 44.7 -->
	<form method="POST">
		Altura: <input type="text" name="altura">
		Sexo: <select name="sexo">
			<option value="fem">Feminino</option>
			<option value="masc">Masculino</option>
		</select>
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<?php
		if (isset($_POST['enviar'])) {

			$altura = $_POST['altura'];
			$sexo = $_POST['sexo'];
			$peso = 0;
			
			if ($sexo == "fem"){
				$peso = (62.1 * $altura) - 44.7;
			} else {
				$peso = (72.7 * $altura) - 58;
			} 
			echo ("O peso ideal eh $peso quilos.");	
		} 
	?>
</body>
</html>
