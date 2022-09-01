<?php
	
	session_start();

	//echo ("Nome: " . $_SESSION["nome"]);
	
	//unset($_SESSION["idade"]);	// excluindo uma variavel de sessão
	// testando se as variaveis de sessão nome e idade existem para mostrar na tela
	if (isset($_SESSION["nome"]))
		echo ("Nome:  $_SESSION[nome]<br>");
	
	if (isset($_SESSION["idade"])) {
		$idade = $_SESSION["idade"];
		echo ("Idade: $idade<br>");	
	}
