<?php 
function datauser(){
	$user[] = "Retno Ires";
	$user[] = "fairy.edensor@gmail.com";
	$user[] = "SMKN 1 Banyuwangi";
	
	return $user;
}

list($nama, $email, $smk) = datauser();
echo "Nama: {$nama}, email: {$email}, smk: {$smk}";

//code sudah benar
?>