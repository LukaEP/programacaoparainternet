<?php
	
	echo (time() . "<br>");
	$palavra = "banana";

	$hash_md5 = md5($palavra);	// criptografia com md5

	$hash_sha1 = sha1($palavra); // criptografia com sha1

	echo ("MD5: $hash_md5 <br>");
	echo ("SHA1: $hash_sha1 <br>");

	// exemplo com salt
	$salt = "Lgjd1@";
	$nova_palavra = $salt.$palavra;

	echo ("Palavra concatenada com + salt: $nova_palavra");

	// criptografando uma palavra usando salt e sha1
	$senhacodificada = sha1($nova_palavra);
	echo ("hash com salt: $senhacodificada <br>");

	// mostrando todos algoritmos de criptografia disponiveis no PHP
	print_r(hash_algos() );

	// exemplo de como usar o sha512
	$hash_sha512 = hash("sha512", $nova_palavra);	// criptografando a palavra sem o salt

	echo ("SHA512: $hash_sha512 <br>");


?>