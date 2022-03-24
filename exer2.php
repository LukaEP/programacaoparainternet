/* Faça um programa que execute um laço de repetição de 1 a 500 e exiba os números na tela. Caso o número seja divisível por 3 deve escrever Fizz, caso seja divisível por 5, deve escrever Buzz, caso seja divisível pelos dois divisores, deve escrever FizzBuzz
Exemplo de saída: 1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz…499


<?php
	for ($i=1; $i < 500; $i++) {
		if ($i % 3 == 0 && $i % 5 == 0)
			echo ("FizzBuzz");
		else if ($i % 3 == 0)
			echo ("Fizz");
		else if ($i % 5 == 0)
			echo ("Buzz");
		else
			echo $i;

		if ($i != 499)
			echo (", ");
	}
?> 
