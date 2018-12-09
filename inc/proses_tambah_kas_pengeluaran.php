<?php
include "koneksi.php";
$kd_brg = @mysqli_real_escape_string($_POST['kd_brg']);
$kd_rek = @mysqli_real_escape_string($_POST['kd_rek']);
$nm_brg = @mysqli_real_escape_string($_POST['nm_brg']);
$hj = @mysqli_real_escape_string($_POST['hj']);
$hb = @mysqli_real_escape_string($_POST['hb']);
$saldo = @mysqli_real_escape_string($_POST['saldo']);
$jenis = @mysqli_real_escape_string($_POST['jenis']);

mysqli_query("insert into tb_kas values ('', '$kd_rek', '$nm_brg','$jenis','$kd_brg','$hj','$hb')") or die (mysql_error());

?>
<script>
alert("Penambahan data kas sukses");
window.location.href='../?page=laporan_keuangan&action=view';
</script>