
<?php

	$ numero1 = rand ( 1 , 100 );
	$ numero2 = rand ( 1 , 100 );
	$ numero3 = rand ( 1 , 100 );

	echo  "El numero 1 es: $ numero1 <br>" ;
	echo  "El numero 2 es: $ numero2 <br>" ;
	echo  "El numero 4 es: $ numero3 <br> <br>" ;

 
	if ( $ numero1 > $ numero2 ) {
		$ alcalde = $ numero1 ;
	} más {
		$ alcalde = $ numero2 ;
	}

	if ( $ numero3 > $ alcalde ) {
		$ alcalde = $ numero3 ;
	}
	echo  "El mayor de los tres números es: $ mayor" ;
?>