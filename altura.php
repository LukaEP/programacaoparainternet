<?php
	/* Chico tem 0,8 m e cresce 6 centímetros por ano, enquanto Juca tem 0,60m e cresce 9 centímetros por ano. Construa um algoritmo que calcule e imprima quantos anos serão necessários para que Juca seja maior que Chico. */

	$h_chico = 80;
	$h_juca = 60;
	$anos = 0;

	while ($h_juca < $h_chico) {
		$h_chico = $h_chico + 6;
		$h_juca = $h_juca + 9;
		$anos++;
		echo("Ano: $anos Altura -> Chico: $h_chico Juca: $h_juca"); 
	}
?>