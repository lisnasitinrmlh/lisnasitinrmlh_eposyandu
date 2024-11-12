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
		  position: relative;
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

		.foto {
	
			}
</style>

</head>
<body>
<form action="" method="post" class="login">
	<a href="petugas2.php"><img src="img/back.png" width="50px" height="50px"></a>
	<a href="hasil_data_ibu.php"><img src="img/next.png" width="50px" height="50px" align="right"></a><br>
	<table>
		<tr>
			<td colspan="2"><h2>INPUT DATA IBU</h2></td>
		</tr>
		<tr>
			<td width="200">Tanggal Input Data</td>
			<td><input type="date" name="tgl_input" placeholder="Masukan Tanggal Saat Menginput Data"></td>
		</tr>
		<tr>
			<td width="200">Kode Peserta</td>
			<td><input type="text" name="kode_peserta" placeholder="Masukan Nomor Induk Balita Yang Ada Pada Kartu..."></td>
		</tr>
		<tr>
			<td width="200">Nama</td>
			<td><input type="text" name="nama" placeholder="Masukan Nama Lengkap Ibu(Istri)..."></td>
		</tr>
		<tr>
			<td width="200">Tanggal Lahir</td>
			<td><input type="date" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir Ibu(Istri)..."></td>
		</tr>
		<tr>
			<td width="200">Nama Suami</td>
			<td><input type="text" name="nama_suami" placeholder="Masukan Nama Lengkap Ayah(Suami)..."></td>
		</tr>
		<tr>
			<td width="200">Tanggal Lahir Suami</td>
			<td><input type="date" name="tanggal_lahir_suami"></td>
		</tr>
		<tr>
			<td width="200">Status Kesuburan</td>
			<td>
				<select name="status" class="selec">
					<option value="WUS">WUS</option>
					<option value="PUS">PUS</option>
				</select>
			</td>
		</tr>
		<tr>
			<td width="50%"></td>
			<td width="50%"><input type="submit" value="Kirim" name="proses"></td>
		</tr>
	</table>
</form>

<?php
include "connection.php";

if(isset($_POST['proses'])){
	mysqli_query($koneksi, "insert into data_ibu set 
		tgl_input = '$_POST[tgl_input]',
		kode_peserta = '$_POST[kode_peserta]',
		nama = '$_POST[nama]',	
		tanggal_lahir = '$_POST[tanggal_lahir]',
		nama_suami = '$_POST[nama_suami]',
		tanggal_lahir_suami = '$_POST[tanggal_lahir_suami]',
		status = '$_POST[status]'");
}
?>
</body>
</html>
<?php
include 'footer.php'
?>