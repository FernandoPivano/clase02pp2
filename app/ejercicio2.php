
<?php
function iva ($importe){
	$iva = ($importe * 1.21);
	return $iva;
}

$importe=100;
$importe_con_iva = iva ($importe);

echo "Importe: $importe<br/>";
echo "Importe + IVA: $importe_con_iva";
?>