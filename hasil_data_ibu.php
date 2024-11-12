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
	    .bg {
	    	background-color: white;
    	width: 90%;
    	padding: 10px ;
    	padding-top: 10px;
    	margin: auto;
    	margin-top: 50px;
    	margin-bottom: 50px;
    	border-radius: 20px;
    	font-size: 18px;
    	}

    	h2{
    	text-align: center;
    	color: black;
    	padding: 10px;
    	border-radius: 7px;
    	}

	    #customers {
		  font-family: Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 90%;
		  margin: auto;
		  text-align: center;
		  }

		#customers td, #customers th {
		  border: 1px solid #ddd;
		  padding: 8px;
		  }

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: center;
		  background: rgb(84,244,153);
    	background: linear-gradient(90deg, rgba(84,244,153,1) 0%, rgba(0,176,176,1) 77%, rgba(0,212,255,1) 100%);
		  color: black;
		}
		
	</style>
</head>
<body>
<div class="bg">
	<a href="data_ibu.php"><img src="img/back.png" width="50px" height="50px"></a>
	<br>
	<h2>DATA IBU</h2>
<table border="1" id="customers">
	<tr>
		<th>No</th>
		<th>Tanggal Input</th>
		<th>Kode Peserta</th>
		<th>Nama</th>
		<th>Tanggal Lahir</th>
		<th>Nama Suami</th>
		<th>Tanggal Lahir Suami</th>
		<th>Status</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php

	include "connection.php";
	$no=1;
	$ambildata = mysqli_query($koneksi, "select * from data_ibu");
	while ($tampil = mysqli_fetch_array($ambildata)){
		echo "
		<tr>
		<td>$no</td>
		<td>$tampil[tgl_input]</td>
		<td>$tampil[kode_peserta]</td>
		<td>$tampil[nama]</td>
		<td>$tampil[tanggal_lahir]</td>
		<td>$tampil[nama_suami]</td>
		<td>$tampil[tanggal_lahir_suami]</td>
		<td>$tampil[status]</td>
		<td><a href='?kode=$tampil[kode_peserta]'>Hapus</a></td>
		<td><a href='ubah_data_ibu.php?kode=$tampil[kode_peserta]'> Ubah </a></td>
		</tr>";
		$no++;
	}
	?>
</table>

<?php
if(isset($_GET['kode'])){

mysqli_query($koneksi,"delete from data_ibu where kode_peserta='$_GET[kode]'");
echo "<meta http-equiv=refresh content=2;URL='hasil_data_ibu.php'>";
}
?>
</div>
</body>
</html>
<?php
include 'footer.php'
?>
