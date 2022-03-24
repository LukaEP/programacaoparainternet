<?php

	$cliente1 = array(
		"nome" => "Augusto", "nascimento" => "25/08/1989", "cidade" => "Porto Alegre", "profissao" => "Técnico em Informática", "salario"	=> 3689.82);

	$cliente2 = array(
		"nome" => "Anderson",
		"nascimento" => "22/01/1981",
		"cidade" => "Santa Maria",
		"profissao" => "Analista de TI",
		"salario"	=> 9629.82 
	);
	
	echo "Nome: " . $cliente1["nome"] . "<br>";
	echo "Data de nascimento: " . $cliente1["nascimento"] . "<br>";
	echo "Cidade atual: " . $cliente1["cidade"] . "<br>";
	echo "Profissao: " . $cliente1["profissao"] . "<br>";
	echo "Salário: " . $cliente1["salario"] . "<br>";
