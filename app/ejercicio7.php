
<?php

$num1 = rand (1,50);

if($num > 0 && $num <= 5){
     echo “El número se encuentra entre el 1 y el 5”;
}
elseif($num > 5 && $num <= 10){
     echo “El número se encuentra entre el 6 y el 10”;
}
else{
     echo “El número se encuentra en el rango de 1 al 10”;
}

?>