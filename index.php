<?php
	/* Isso é um comentário com mais de uma linha
	A função phpinfo mostra todas as informações do interpretador php instalado
	*/
	# Isso também também é um comentário. O # corresponde aos comentarios do terminal do linux
	//phpinfo();

	// Criacacao das variaveis
	$numero = 17; // tipo inteiro

	echo("A variavel contém o valor $numero");

	$numero = "Marco";
	echo("A variavel contém o valor: ");

	$numero = 3.143743898473289479324723;

	echo($numero);

	echo($Numero);


	$booleano = true;

	//echo($booleano);
	
	// case sensitive com o nome das variaveis
	// $numero != $Numero

	// não é case sensitive com palavras reservadas da linguagem
 
	$nome = "Marco";

	$nome .= " Antoni";
	
	echo("Nome: $nome");
	
	//echo("Nome: $nome" . " Antoni");

	// exemplo if
	$idade = 17;

	// avalia uma condicao logica 
	if ($idade >= 18){
		echo "<h1>é maior de idade</h1>";
	} else 
		// quando há apenas uma linha de código no bloco, as chaves podem ser omitidas
		echo "<h1>é menor de idade</h1>";

	// dias de semana
	$diaSemana = 7;

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





?>