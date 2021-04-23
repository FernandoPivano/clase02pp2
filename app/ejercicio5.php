
<?php

switch ($Edad) {
   case 0:
        echo "menos de 12 años: todavía eres un Niño";
        break;
   case 1:
        echo "entre 12 y 18 años: todavía eres Adolescente";
        break;
   case 2:
        echo "de 18 a 100 años: eres una persona Mayor";
        break;
	default:
        echo "aún no me has dicho tu edad";  
   }

?>