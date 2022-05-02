<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	5.	Faça um formulário que tenha três campos, para receber o dia, o mês e um ano (não usar o tipo date do HTML). Em seguida, faça a validação dos dados de entrada, não permitindo valores inválidos.
	a)	Dica 1: usar uma função irá poupar linhas de códigos, pois as validações são 	parecidas;
	b)	Dica 2: usar um array facilitará o processo de saber a quantidade de dias do mês.
	<form method="POST">
		Dia: <input type="number" name="dia">
		Mês: <input type="number" name="mes">
		Ano: <input type="number" name="ano">
		<input type="submit" name="enviar">
	</form>

	<?php
		// funcao generica que valida se um numero inteiro esta dentro de um intervalo valido
		// $num é o numero que sera validado
		// $max é o ultimo valor considerado valido
		function validarNumero($num, $max) {
			if ($num >= 1 && $num <= $max)
				return true;	// se retornar true, o numero esta fora do intervalo de numeros valores
			else
				return false; // se retornar false, o numero esta fora do intervalo de numeros valores
		}

		if (isset($_POST['enviar'])){
			
			// chama a funcao validar numero para testar se o mes está no intervalo valido. O ultimo mes valido é o 12
			if (validarNumero($_POST['mes'], 12) == true){
				$mes = $_POST['mes'];	// atribui o valor do input do formulario a variavel mes
			} else {
				$mes = 1;	// valor default para dia invalido
			}

			// mesma logica do mes
			if (validarNumero($_POST['ano'], 3000) == true){
				$ano = $_POST['ano'];
			} else {
				$ano = 2000; // valor default para ano invalido
			}
			
			// para validar o dia, primeiro é preciso saber o mes, pois a quantidade de dias varia de acordo com o mes

			$qtd_dias = [0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];// array que contém a quantidade de dias de cada mês

			// debugando o codigo
			// echo ("Mês $mes tem ". $qtd_dias[$mes] ." dias");

			// o if abaixo e o mesmo que

			if (validarNumero($_POST['dia'], $qtd_dias[$mes]) == true)


			*/

			if (validarNumero($_POST['dia'], $qtd_dias[$mes]) == true)
				$dia = $_POST['dia'];
			else 
				$dia = 1;
			
			echo ("$dia/$mes/$ano");
		}
	?>
</body>
</html>