<?php
$hostname ='localhost';
$userdb ='root';
$passdb ='';
$namedb ='gallery';

$koneksi = mysqli_connect($hostname,$userdb,$passdb,$namedb);

if ($koneksi) {
	echo "Terhubung";
	# code...
}else{
	echo "Tidak terhubung";
}

?>