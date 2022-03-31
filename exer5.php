<?php
	/*Escreva um programa que escreva a data atual do computador por extenso. Exemplo: Terça-feira, 14 de dezembro de 2021*/

	date_default_timezone_set("America/Sao_Paulo");
	
	$dia = date("d");
	$mes = date("n");
	$ano = date("Y");
 
 	// representação do dia da semana, de 1 a 7
 	$dia_s = date("N");

 	$dia_semana = "";

 	switch($dia_s){
 		case 1:
			$dia_semana = "Segunda-feira";
			break;
		case 2:  			
			$dia_semana = "Terça-feira";
			break;
		case 3:
			$dia_semana = "Quarta-feira";
			break;
		case 4:
			$dia_semana = "Quinta-feira";
			break;
		case 5:
			$dia_semana = "Sexta-feira";
			break;
		case 6:
			$dia_semana = "Sabado";
			break;
		case 7:
			$dia_semana = "Domingo";
 	}

 	$meses = array("", "janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro");


	echo("$dia_semana, $dia de $meses[$mes] de $ano");

?>