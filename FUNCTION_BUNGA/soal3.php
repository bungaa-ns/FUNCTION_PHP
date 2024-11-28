<?php 
function bayar($tbelanja, $diskon=0){
	$total=$tbelanja - (($tbelanja * $diskon)/100);
	
	return $total;
}

$tbelanjaan = 400000;

if($tbelanjaan >= 400000) {
echo bayar($tbelanjaan, 10);
}
else if(($tbelanjaan >= 200000) && ($tbelanjaan < 400000)) {
echo bayar($tbelanjaan, 5);
}
else {
echo bayar($tbelanjaan);
}

//menurut saya code sudah benar
?>