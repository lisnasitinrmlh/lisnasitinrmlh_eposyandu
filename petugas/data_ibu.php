<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>DATA IBU</h1>
<form action="" method="post">
	<table>
		<tr>
			<td width="130">NIK</td>
			<td><input type="text" name="nik"></td>
		</tr>
		<tr>
			<td width="130">Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td width="130">Tanggal Lahir</td>
			<td><input type="text" name="tanggal_lahir"></td>
		</tr>
		<tr>
			<td width="130">NIK Suami</td>
			<td><input type="text" name="nik_suami"></td>
		</tr>
		<tr>
			<td width="130">Nama Suami</td>
			<td><input type="text" name="nama_suami"></td>
		</tr>
		<tr>
			<td width="130">Tanggal Lahir Suami</td>
			<td><input type="text" name="tanggal_lahir_suami"></td>
		</tr>
		<tr>
			<td width="130">Status Kesuburan</td>
			<td>
				<select name="status">
					<option value="wus">WUS</option>
					<option value="pus">PUS</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan" name="proses"></td>
		</tr>
	</table>
</form>

<?php
include "connection.php";

if(isset($_POST['proses'])){
	mysqli_query($koneksi, "insert into data_ibu set 
		nik = '$_POST[nik]',	
		nama = '$_POST[nama]',	
		tanggal_lahir = '$_POST[tanggal_lahir]',
		nik_suami =	'$_POST[nik_suami]',
		nama_suami = '$_POST[nama_suami]',
		tanggal_lahir_suami = '$_POST[tanggal_lahir_suami]'");

	echo "Data telah tersimpan";
}
?>
</body>
</html>