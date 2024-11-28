<?php
$vrglob = 5;
Function var_global(){
global $vrglob;
$vrglob = 7;
}

var_global();
echo $vrglob;

//code sudah benar
?>