<?php
include 'header2.php'
?>
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
        background-size: 100%;
        }
         .gallery {
      display: flex;
      justify-content: center;
      }
     
    .login{
    	background-color: white;
    	width: 90%;
    	padding: 50px ;
    	padding-top: 10px;
    	margin: auto;
    	margin-top: 50px;
    	margin-bottom: 50px;
    	border-radius: 20px;
    	font-size: 18px;
    	}

    h2{
    	background: rgb(84,244,153);
    	background: linear-gradient(90deg, rgba(84,244,153,1) 0%, rgba(0,176,176,1) 77%, rgba(0,212,255,1) 100%);
    	text-align: center;
    	color: black;
    	padding: 10px;
    	border-radius: 7px;
    	}

    input{
			width: 700px;
			padding: 12px 10px;
			font-size: 18px;
			margin-left: 30px;
			}

		.selec {
			width: 700px;
			padding: 12px 10px;
			font-size: 18px;
			margin-left: 30px;
			}
 

		input[type=submit]{
			background: rgb(84,244,153);
			background: linear-gradient(90deg, rgba(84,244,153,1) 0%, rgba(0,176,176,1) 77%, rgba(0,212,255,1) 100%);
			border-radius:10px;
			color: black;
			}

		.btn{
			width: 100px;
			padding: 12px 10px;
			box-sizing: border-box;
			font-size: 18px;
			margin-left: 30px;
			background: rgb(84,244,153);
			background: linear-gradient(90deg, rgba(84,244,153,1) 0%, rgba(0,176,176,1) 77%, rgba(0,212,255,1) 100%);
			border-radius:10px;
			color: black;
			}

		td {
			padding-top: 5px;
			padding-bottom: 5px;
			}
	</style>
</head>
<body>
<form action="" method="post" class="login">
	<a href="petugas2.php"><img src="img/back.png" width="50px" height="50px"></a>
	<a href="hasil_data_bayi.php"><img src="img/next.png" width="50px" height="50px" align="right"></a><br>
	<table>
		<tr>
			<td colspan="2"><h2>INPUT DATA BAYI</h2></td>
		</tr>
		<tr>
			<td width="200">Tanggal Input Data</td>
			<td><input type="date" name="tgl_input" placeholder="Masukan Tanggal Saat Menginput Data"></td>
		</tr>
		<tr>
			<td width="200">Nomor Induk Bayi</td>
			<td><input type="text" name="nib" placeholder="Masukan Nomor Induk Bayi Yang Ada Pada Kartu..."></td>
		</tr>
		<tr>
			<td width="200">Nama Bayi</td>
			<td><input type="text" name="nama_bayi" placeholder="Masukan Nama Lengkap Bayi..."></td>
		</tr>
		<tr>
			<td width="200">Nama Ayah</td>
			<td><input type="text" name="nama_ayah" placeholder="Masukan Nama Lengkap Ayah..."></td>
		</tr>
		<tr>
			<td width="200">Nama Ibu</td>
			<td><input type="text" name="nama_ibu" placeholder="Masukan Nama Lengkap Ibu..."></td>
		</tr>
		<tr>
			<td width="200">Jenis Kelamin</td>
			<td>
				<select name="gender" class="selec">
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td width="200">Tanggal Lahir Bayi</td>
			<td><input type="date" name="tgl_lahir_bayi"></td>
		</tr>
		<tr>
			<td width="200">Umur</td>
			<td><input type="text" name="umur" placeholder="Masukan Umur Bayi..."></td>
		</tr>
		<tr>
			<td width="200">BB</td>
			<td><input type="text" name="bb" placeholder="Masukan Berat Badan Bayi..."></td>
		</tr>
		<tr>
			<td width="200">TB</td>
			<td><input type="text" name="tb" placeholder="Masukan Tinggi Badan Bayi..."></td>
		</tr>
		<tr>
			<td width="200">LK</td>
			<td><input type="text" name="lk" placeholder="Masukan Lingkar Kepala Bayi..."></td>
		</tr>
		<tr>
			<td width="50%"></td>
			<td width="50%"><input type="submit" value="Kirim" name="kirim"></td>
		</tr>
	</table>
</form>
<?php

include "connection.php";

if(isset($_POST['kirim'])){
	mysqli_query($koneksi, "insert into data_bayi set 
		tgl_input = '$_POST[tgl_input]',
		nib = '$_POST[nib]',
		nama_bayi = '$_POST[nama_bayi]',
		nama_ayah = '$_POST[nama_ayah]',
		nama_ibu = '$_POST[nama_ibu]',
		gender = '$_POST[gender]',
		tgl_lahir_bayi = '$_POST[tgl_lahir_bayi]',
		umur = '$_POST[umur]',
		bb = '$_POST[bb]',
		tb = '$_POST[tb]',
		lk = '$_POST[lk]'");
}
?>
</body>
</html>
<?php
include 'footer.php'
?>