<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
        background:url(img/Menu/bggg2.png);
        background-repeat: repeat-y;
        background-size: 100%;}
	</style>
</head>
<body>
<?php
include 'header2.php'
?>
<form action="" method="POST" name="form1">
	<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" size="25" ></td>
	</tr>
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><input type="text" name="nim" size="25" ></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat" size="25" ></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input type="radio" name="jenis_kelamin" value="Laki-Laki" checked="">Laki-Laki
		<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
		</td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>:</td>
		<td>
			<select name="jurusan">
				<option value="IF">IF</option>
				<option value="ABI">ABI</option>
				<option value="ILKOM">ILKOM</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="spn" value="simpan">
		</td>
	</tr>
	</table>
</form>
</body>

<?php 

if (isset($_POST['spn'])) {
	$nama=$_POST['nama'];
	$nim=$_POST['nim'];
	$alamat=$_POST['alamat'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$jurusan=$_POST['jurusan'];

}?>
<b>HASIL</b>
<table border="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>NIM</td>
		<td>Alamat</td>
		<td>Jenis Kelamin</td>
		<td>Jurusan</td>
		<td colspan="2">Aksi</td>
	</tr>
	<tr>
		<td>1</td>
		<td><?php echo $nama; ?></td>
		<td><?php echo $nim; ?></td>
		<td><?php echo $alamat; ?></td>
		<td><?php echo $jenis_kelamin; ?></td>
		<td><?php echo $jurusan; ?></td>
	</tr>
<?php
?>
</table>
</html>