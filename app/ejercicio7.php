
<?php

$num1 = rand (1,50);
$num2 = rand (1,50);
$num3 = rand (1,50);

echo "El número 1 es: $num1 <br>";
echo "El número 2 es: $num2 <br>";
echo "El número 3 es: $num3 <br>";

if ($num1!=$num2 && $num1!=$num3 && $num2!=$num3) {

     if($num1>$num2 && $num2<$num3) {
          $medio=$num2;
     } else {
          if ($num1>$num3 && $num3<$num2) {
               $medio=$num3;
          } else {
           $medio=$num1;
          }
     }
     $medio;

}
else 
{
     echo "$num1, $num2, $num3 no tiene";
}

?>