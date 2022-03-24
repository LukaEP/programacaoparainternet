/* Faça um programa que escreva os 10 primeiros números primos encontrados */

<?php
	$primos = 0;
	$n = 2;

	do {
		$ehPrimo = true;

		for ($i=2; $i < $n; $i++) {
			if ($n % $i == 0){
				$ehPrimo = false;
				break;
			}
		}

		if ($ehPrimo == true){
			echo ("$n<br>");
			$primos++;	
		}

		$n++;
		
	} while ($primos < 1000);
?>