
<?php

$num1 = rand (1,50);
$num2 = rand (1,50);
$num3 = rand (1,50);

echo "El número 1 es: $num1 <br>";
echo "El número 2 es: $num2 <br>";
echo "El número 3 es: $num3 <br>";

if ($n1!=$n2 && $n1!=$n3 && $n2!=$n3) {

     if($n1>$n2 && $n2<$n3) {
          $medio=$n2;
     } else {
          if ($n1>$n3 && $n3<$n2) {
               $medio=$n3;
          } else {
           $medio=$n1;
          }
     }
     $medio;

}
else 
{
     echo "$n1, $n2, $n3 no tiene";
}

?>