<?php

	if (isset($_COOKIE["acessos"])){
		$qtd_acessos = $_COOKIE['acessos'];
		$qtd_acessos++;
		echo ("Bem vindo de volta, esse é o seu $qtd_acessos acesso!");
		setcookie("acessos", $qtd_acessos);
	} else {
		echo ("Bem vindo ao seu primeiro acesso");
		setcookie("acessos", 1);
	}