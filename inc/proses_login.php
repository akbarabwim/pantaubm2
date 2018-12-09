<?php
@session_start();
include "koneksi.php";
$user = $_POST['user'];
$pass = $_POST['pass'];
$pass = md5($pass); 
$sql = mysqli_query($con,"select * from tb_user where username = '$user' and password = '$pass'");
$cek = mysqli_num_rows($sql);
if($cek >= 1)
{
	$data = mysqli_fetch_array($sql);
	$id_user = $data['kode_user'];
	if($data['level'] == "admin")
	{
		@$_SESSION['admin'] = $id_user;
		?>  <?php
		 echo"<script>alert('Sukses Login');window.location.href='../index.php'</script>";
	}
}
else
{
 echo"<script>alert('Gagal Login');window.location.href='../'</script>";
	?>  <?php
}
?>