<?php
include "koneksi.php";

$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$nohp=$_POST['nohp'];
$gender=$_POST['gender'];
$agama=$_POST['agama'];


$sql = "INSERT INTO users(id, nama, alamat, no_telp, jk, agama)
        VALUE('$id','$nama','$alamat','$nohp','$gender','$agama')";

if(mysqli_query($connect, $sql)){
	echo "Berhasil mendaftar";
}else{
	echo "Gagal mendaftar masukkan sesuai perintah<br>" .mysqli_error($connect);
}
mysqli_close($connect);        
?>