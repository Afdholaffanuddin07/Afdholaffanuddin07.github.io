<?php
include "koneksi.php";

$id=$_GET['id'];
$query = "DELETE FROM users WHERE id='$id'";
$result=mysqli_query($connect, $query);

if($result){
	echo "Berhasil Hapus data";
?>
<a href="tampil.php">Lihat data di Tabel</a>
<?php	
}else{
	echo "Gagal hapus data<br>" .mysqli_error($connect);
}
mysqli_close($connect);        
?>