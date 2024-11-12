<?php
include 'header2.php' ;
include 'connection.php';
$sql=mysqli_query($koneksi, "select * from data_kb where kode_peserta='$_GET[kode]'");
$data=mysqli_fetch_array($sql);
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
	<a href="hasil_data_kb.php"><img src="img/back.png" width="50px" height="50px"></a>
	<br>
	<table>
		<tr>
			<td colspan="2"><h2>UBAH DATA PROGRAM KB</h2></td>
		</tr>
		<tr>
			<td width="200">Tanggal Input Data</td>
			<td><input type="date" name="tgl_input" placeholder="Masukan Tanggal Saat Menginput Data" value="<?php echo $data['tgl_input']; ?>"></td>
		</tr>
		<tr>
			<td width="200">Kode Kepesertaan</td>
			<td><input type="text" name="kode_peserta" placeholder="Masukan Kode Kepesertaan..." value="<?php echo $data['kode_peserta']; ?>"></td>
		</tr>
		<tr>
			<td width="200">Nama Istri</td>
			<td><input type="text" name="nama_istri" placeholder="Masukan Nama Lengkap Istri..." value="<?php echo $data['nama_istri']; ?>"></td>
		</tr>
		<tr>
			<td width="200">Nama Suami</td>
			<td><input type="text" name="nama_suami" placeholder="Masukan Nama Lengkap Suami..." value="<?php echo $data['nama_suami']; ?>"></td>
		</tr>
		<tr>
			<td width="200">Program KB Yang Diikuti</td>
			<td>
				<select name="program_kb" class="selec" value="<?php echo $data['program_kb']; ?>">
					<option value="Pel">Pel</option>
					<option value="Suntik">Suntik</option>
				</select>
			</td>
		</tr>
		<tr>
			<td width="200">Jenis Suntik</td>
			<td>
				<select name="jenis_suntik" class="selec" value="<?php echo $data['jenis_suntik']; ?>">
					<option value="-">Khusus Diisi Untuk Pengguna Program KB Suntik</option>
					<option value="2 Bulan">2 Bulan</option>
					<option value="3 Bulan">3 Bulan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td width="50%"></td>
			<td width="50%"><input type="submit" value="Ubah Data" name="kirim3"></td>
		</tr>
	</table>
</form>
<?php

include "connection.php";

if(isset($_POST['kirim3'])){
	mysqli_query($koneksi, "update data_kb set 
		tgl_input = '$_POST[tgl_input]',
		nama_istri = '$_POST[nama_istri]',
		nama_suami = '$_POST[nama_suami]',
		program_kb = '$_POST[program_kb]',
		jenis_suntik = '$_POST[jenis_suntik]'
		where kode_peserta = '$_GET[kode]'");
	echo "<meta http-equiv=refresh content=2;URL='hasil_data_kb.php'>";
}
?>
</body>
</html>
<?php
include 'footer.php'
?>