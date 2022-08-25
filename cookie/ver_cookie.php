<?php

	if (isset($_COOKIE["usuario"])) {
		$user = $_COOKIE["usuario"];
		echo ("<h1>Bem vindo, $user</h1>");
	} else {
		echo ("Cookie ainda não foi definido");	
	}
