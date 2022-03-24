<?php
/*
	$data_atual = date("j/M/Y");

	echo $data_atual;

	echo ("<br>Representação do dia da semana<br>");
	echo (date("N") );	

	echo ("<br>Representação do Dia da semana por extenso<br>");

	echo (date("D") );	
	*/

	// criando um array
//array = array("Ciro", 50, "Banana", 169.89);

	// exibindo o array na tela
//	print_r($array);	

	//exibindo um valor do array
//	echo ($array[2]);

	// existem duas formas de add valores a um array
//	$array[] = "Maçã";
	
	// exibindo o array na tela
//	echo ("<br>");
//	print_r($array);
	
//	$array[10] = "Uva";
	// exibindo o array na tela
//	echo ("<br>");
//	print_r($array);


	// quantos elementos tem dentro do array?
//	$valores = count($array);

//	echo ("O array contem $valores elementos armazenados");

	// mostrando um array atraves de um laco de repetição
//	echo ("<br>");
	
	// Iterando com array
	//for ($i=0; $i<$valores; $i++){
	//	echo ("$array[$i] <br>");
	//}

	// alternativa 1 foreach
	//foreach ($array as $valor){
	//	echo ("$valor <br>");
	//}

	// alternativa 2 foreach
//	foreach ($array as $key => $value){
//		echo("Chave: $key ----- Valor armazenado: $value <br>");
//	}

	$aluno1 = array("nome" => "Gabriel Rost", "nasc" => "16/03/2004", "end" => "Ilha nova, 749 - Rolante", "cpf" => "123.156.777-88");


	echo ("Exibindo os dados de um array associativo<br>");
	echo ("Nome: " . $aluno1["nome"] . "<br>");
	echo ("Data de nascimento: " . $aluno1["nasc"] . "<br>");
	echo ("Endereço: $aluno1[nasc] <br>"); // dessa forma, as aspas DEVEM ser omitidas na hora de mostrar o valor do array
	echo ("CPF: $aluno1[cpf] <br>");


	$aluno2 = array(
		"nome"	=> "Ramon",
		"nasc"	=> "21/01/2003",
		"end" 	=> "Rua central 419 - Rolante",
		"cpf"	=> "029.943.888.99"
	);

	echo ("<br>");
	echo ("Nome: " . $aluno2["nome"] . "<br>");
	echo ("Data de nascimento: " . $aluno2["nasc"] . "<br>");
	echo ("Endereço: $aluno2[nasc] <br>"); // dessa forma, as aspas DEVEM ser omitidas na hora de mostrar o valor do array
	echo ("CPF: $aluno2[cpf] <br>");












