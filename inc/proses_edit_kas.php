<?php
include "koneksi.php";

$id = @mysqli_real_escape_string($_GET['id']);
$nm_brg = @mysqli_real_escape_string($_POST['nm_brg']);
$kd_brg = @mysqli_real_escape_string($_POST['kd_brg']);
$kd_rek = @mysqli_real_escape_string($_POST['kd_rek']);
$data = @mysqli_real_escape_string($_POST['data']);
$saldo = @mysqli_real_escape_string($_POST['saldo']);
$jenis = @mysqli_real_escape_string($_POST['jenis']);
if($jenis=='Pengeluaran') {
mysqli_query("update tb_kas set kdrek= '$kd_rek', ket= '$nm_brg',jenis = '$jenis',  tgl = '$kd_brg', kredit='$data'  where idkas = '$id'") or die (mysql_error());
}else{
mysqli_query("update tb_kas set kdrek= '$kd_rek', ket= '$nm_brg',jenis = '$jenis',  tgl = '$kd_brg', debit='$data'  where idkas = '$id'") or die (mysql_error());
}
?>
<script>
	alert("kas berhasil diedit");
	window.location.href='../?page=laporan_keuangan&action=view';
</script>