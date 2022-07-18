<?php 

$nama = $_POST['nama'];
$email = $_POST['NIM'];
$alamat = $_POST['PRODI'];
$komentar = $_POST['komentar'];

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "a+");
fputs($fp, "$nama|$alamat|$email|$status|$komentar\n");
fclose($fp);

header('location:setelah.php');
 ?>

'];
$status = $_POST['status

