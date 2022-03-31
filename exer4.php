<?php
	/*Escreva um programa que apresente as mensagens de Bom dia, Boa tarde ou Boa noite, conforme o horário que o usuário estiver acessando a página*/

	// mudar o time zone para o horario ficar correto
	date_default_timezone_set("America/Sao_Paulo");

	$hora = date("H");

	if ($hora >=6 && $hora < 12){
		echo("Bom dia");
	} else if($hora >= 12 && $hora < 18) {
		echo("Boa tarde");
	} else if ($hora >= 18 && $hora < 23) {
		echo ("Boa noite");
	} else {
		echo ("Boa madrugada");
	}

	echo(date("H:i"));
?>