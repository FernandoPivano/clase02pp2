
<?php

$Edad=rand(1,100);

echo "La Edad es: " .$Edad. "<br>";

switch ($Edad) {
     case 1:
     case 2:
     case 3:
     case 4:
     case 5:
     case 6:
     case 7:
     case 8:
     case 9:
     case 10:
     case 11:
          echo "Es un Niño.....";
          break;
     case 12:
     case 13:
     case 14:
     case 15:
     case 16:
     case 17:
          echo "Es un Adolescente ...";
          break;
     default:
          echo "Es Mayor de Edad....";
          break;
}

?>

