<?php 
 //Prosedure Tambah, tanpa return value
 function procTambah($a, $b){
	$c = $a + $b;
	
	echo 'Prosedure tambah'.$c.'<br/>';
}

//Fungsi Tambah, dengan return value
function funcTambah($a, $b){
	$c = $a + $b;
	
	return $c;
}

//untuk memanggil prosedure procTambah
procTambah(10, 5);

//untuk memanggil fungsi funcTambah
$tambah = funcTambah(10,5);
echo 'Fungsi tambah'.$tambah.'<br/>';

//operasi selanjutnya untuk nilai balik fungsi
$tambah++;
echo 'Nilai Var $tambah sekarang'.$tambah;

//code sudah benar  
?>