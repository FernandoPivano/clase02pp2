
<?php

	$num1 = rand (1,50);
	$num2 = rand (1,50);
	$num3 = rand (1,50);

	echo  "El numero 1 es: $num1 <br>";
	echo  "El numero 2 es: $num2 <br>";
	echo  "El numero 3 es: $num3 <br>";

 
	if ($num1 > $num2) {
		$variable = $num1;
	} else {
		$variable = $num2;
	}

	if ($num3 > $variable) {
		$variable = $num3;
	}
	echo  "El mayor es: $variable";
?>