<?php
	$idade = 19;
	$passouNoTeste = false; 

	if ($idade >= 18 && $passouNoTeste == true){
		echo ("Apta para tirar a CNH");
	} else if ($idade <18){
		echo ("Aguarde até os 18 anos e um dia para começar");
	} else {
		echo ("Vá se consultar com um psiquiatra!");
	}

	echo ("<br>");
	
	// dias de semana
	$diaSemana = 8;

	/*
	if ($diaSemana == 0){
		echo "Domingo";
	} else if ($diaSemana == 1){
		echo "Segunda-feira";
	} else if ($diaSemana == 2){
		echo "Terça-feira";
	} else if ($diaSemana == 3){
		echo "Quarta-feira";
	} else if ($diaSemana == 4){
		echo "Quinta-feira";
	} else if ($diaSemana == 5){
		echo "Sexta-feira";
	} else if ($diaSemana == 6){
		echo "Sábado";
	} else {
		// nenhuma condição acima
		echo("Dia da semana inválido");
	}
	*/
	// testando os dias da semana usando o comando switch

	switch($diaSemana){
		case 0:
			echo "Domingo";
			break;
		case 1:
			echo "Segunda-feira";
			break;
		case 2: 
			echo "Terça-feira";
			break;
		case 3:
			echo "Quarta-feira";
			break;
		case 4: 
			echo "Quinta-feira";
			break;
		case 5: 
			echo "Sexta-feira";
			break;
		case 6:
			echo "Sábado";
			break;
		default:
			echo "Dia da semana inválido";
	}
	// for é um laço de repetição contado
	for ($i=0; $i<10; $i++){
		echo("Executando o laço de repetição pela $i vez<br>");
	}

	$status = true;
	$j=0;
	while ($status == true){
		echo("Executando o laço de repetição while pela $j vez<br>");
		$j++;

		// condicao de saida
		if ($j == 20){
			// break; essa é uma alternativa
			$status = false; 
		}		
	}

	$k=0;
	$status = false;
	do {
		// aqui dentro vai o codigo a ser repetido
		echo("Executando o laço de repetição <b>do while</b> pela $k vez<br>");

		// criando a condicao de saida
		if ($k == 20){
			// break; essa é uma alternativa
			$status = true; 
		} 
		$k++;
	} while (! $status);
	// executa o laço enquanto a variavel for diferente de true;
	// outra forma de fazer a mesma coisa seria: iniciar o $status com true, depois dentro do if, muda a condicao para false e executa o laço enquanto o $status for true (remover o !)
	// nesse caso, vai o ; ao final do comando







?>