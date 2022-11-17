<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exemplo de inputs no HTML</title>
	<style>
		/* exemplo de uso da pseudo classe invalid */
		input:invalid {
			color: red;
			transition: 0.1;
		}
	</style>
</head>
<body>

	<form method="POST">
		Checkbox - quais frutas você gosta?
		<div>
			<input type="checkbox" name="gosta_uva">
			<label for="uva">Uva</label>
		</div>
		<div>
			<input type="checkbox" name="gosta_maca" checked>
			<label for="maca">Maça</label>
		</div>
		<div>
			<input type="checkbox" name="gosta_banana">
			<label for="banana">Banana</label>
		</div>
		<br>Rádio: Escolha o sexo: <br>
		<input type="radio" name="sexo" value="m"> Masculino
		<input type="radio" name="sexo" value="f" checked> Feminino
		<input type="radio" name="sexo" value="i"> Intersexo

		<br>Qual é o melhor serviço de streamning?<br>
		<input type="radio" name="streamning" value="amazon"> Amazon
		<input type="radio" name="streamning" value="netflix"> Netflix
		<input type="radio" name="streamning" value="star"> Star

		<br>Email: <input type="email">
		<!-- permitindo apenar arquivos jpeg e png -->
		<br>File: <input type="file" accept="image/jpeg, image/png">
		<br>Color: Escolha sua cor favorita <input type="color" name="cor">

		<br>Number: Qual número de calçado você usa?
		<input type="number" min="4" max="40" value="38"> 

		<br>Range: Qual número de calçado vocÊ usa?
		<input type="range" min="4" max="40" value="38" oninput="this.nextElementSibling.value = this.value"><output>38</output>

		<br> Tel: Qual o seu número telefônico?
		<input type="tel" maxlength="15" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" placeholder="(55) 99618-1234">

		<br> Time: Que horas é o intervalo?
		<input type="time">

		<br> URL: Qual é o seu Instagram?
		<input type="url">
		<br> Textarea: Fale um pouco sobre você <br>
		<textarea rows="2" cols="50"></textarea>
		<br>

		<input type="submit" name="enviar" value="Enviar">
	</form>
	<?php
		if (isset($_POST["enviar"])){

			if (isset($_POST['gosta_uva']))
				echo ('Você clicou em: "Gosta de uva"<br>');
			if (isset($_POST['gosta_maca']))
				echo ('Você clicou em: "Gosta de maçã"<br>');
			if (isset($_POST['gosta_banana']))
				echo ('Você clicou em: "Gosta de banana"<br>');

			if (isset($_POST['sexo'])){
				$sexo = $_POST['sexo'];

				switch($sexo) {
					case "m":
						echo ('Você escolheu o sexo "masculino"<br>');
						break;
					case "f":
						echo ('Você escolheu o sexo "feminino"<br>');
						break;
					default:
						echo ('Você escolheu "intersexo"<br>');

				}
			}

			if (isset($_POST['cor'])){
				echo ("Você escolheu a cor <b>$_POST[cor]</b><br>");
			}
		}
	?>
</body>
</html>