<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST">
		Altura: <input type="text" name="altura">
		Peso: <input type="text" name="peso">
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<?php 
		function calcularImc($peso, $altura) {
			$imc = $peso / ($altura * $altura);
			$msg = "Seu IMC é $imc sendo considerado";
			if ($imc < 18.5){
				$msg .= "<b>magreza</b>";
			} else if ($imc >= 18.5 && $imc <= 24.9) {
				$msg .= "<b>normal</b>";
			} else if ($imc >= 25 && $imc <=29.9) {
				$msg .= "<b>sobrepeso</b>";
			} else if ($imc >= 30 && $imc <=39.9) { 
				$msg .= "<b>obesidade</b>";
			} else if ($imc > 40) {
				$msg .= "<b>obesidade grave</b>";
			}

			return $msg;	// retornando a mensagem

		} 
		
		if (isset($_POST['enviar'])) {
			$peso = $_POST['peso'];
			$altura = $_POST['altura'];

			echo (calcularImc($peso, $altura) );
		}
	?>
</body>
</html>