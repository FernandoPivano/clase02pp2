
<?php

$Edad=$_POST['edad'];
switch ($Edad) {
   case 0 "Niño":
        echo "menos de 12 años: todavía eres un Niño";
        break;
   case 1 "Adolescente":
        echo "entre 12 y 18 años: todavía eres Adolescente";
        break;
   case 2 "Mayor":
        echo "de 18 a 100 años: eres una persona Mayor";
        break;

   }

?>