
<?php

$num1 = rand (1,50);
$num2 = rand (1,50);
$num3 = rand (1,50);

echo "El número 1 es: $num1 <br>";
echo "El número 2 es: $num2 <br>";
echo "El número 3 es: $num3 <br> <br>";

if ($num1<>$num2 && $num1<>$num3 && $num2<>$num3) {

     if(($num1 > $num2 && $num1 < $num3) || ($num1 < $num2 && $num1 > $num3)) 	{
          $medio=$num1;
     } else {
          if (($num2 > $num1 && $num2 < $num3) || ($num2 < $num1 &&  $num2 > $num3)) {
               $medio=$num2;
          } else 	{
               if (($num3 > $num1 && $num3 < $num2) || ($num3 < $num1 && $num3 > $num2)){
                $medio=$num3;					
               }

          }
     }
     $medio;
     echo "$num1, $num2, $num3 el medio es : $medio";
}else {
     echo "$num1, $num2, $num3 no tiene";
}

?>