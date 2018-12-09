<?php
include "koneksi.php";

$id = @mysqli_real_escape_string($_POST['id']);
$nm = @mysqli_real_escape_string($_POST['nm']);
$user = @mysqli_real_escape_string($_POST['user']);
$pass = @mysqli_real_escape_string($_POST['pass']);
$jk = @mysqli_real_escape_string($_POST['jk']);
$alamat = @mysqli_real_escape_string($_POST['alamat']);
$tlp = @mysqli_real_escape_string($_POST['tlp']);
$ket = @mysqli_real_escape_string($_POST['ket']);
$level = @mysqli_real_escape_string($_POST['level']);
mysqli_query("update tb_user set username = '$user', password = md5('$pass'), pass = '$pass', nama_lengkap = '$nm', jenis_kelamin = '$jk', alamat = '$alamat', no_telepon = '$tlp', keterangan = '$ket', level = '$level' where kode_user = '$id'") or die (mysql_error());

?>

<script>
	alert("User berhasil diedit");
	window.location.href='?page=user&action=view';
</script>