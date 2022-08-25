<?php
	setcookie("usuario", "Marco", time() + 60 * 60 * 24 * 30); // cria um cookie com validade de 30 dias 

	echo (time() );