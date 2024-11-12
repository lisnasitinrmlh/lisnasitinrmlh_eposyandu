<?php
include 'header.php'
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
        background-size: 100%;}
        .container {
  position: relative;
  text-align: center;
  color: blue;
}

table {
    margin-left: 40px;
    margin-right: 40px;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.center {
    text-align: center;
    justify-content: center ;
}
.margin {
    margin-left: 35px;
    margin-right: 30px;
}
.kotak {
      border-style: solid;      
      width: 80px;
      height: 40px;
      float: left;
      padding-top:35px;
      padding-bottom:20px;
      padding-left:40px; 
    }
    .kotak2 {   
     margin-left: 55px;
    margin-right: 10px;}
    
    .kotak1 {
        background: #0071BC;
        color: white;
        width: 150px;
        height: 150px;
        border-spacing: 50px;
        margin-left: 30px;
        margin-right: 30px;
        padding: 20px;
        text-align: center;
        justify-items: center;
        justify-content: center;
    }
    .text {
        text-align: center;
        font-size: 14px;
    }
        
    </style>
</head>
<body>
<table>
    <tr>
        <td width="50%">
        <h2>APA ITU POSYANDU ?</h2>
        Posyandu, atau Pos Pelayanan Terpadu, adalah sebuah program kesehatan masyarakat yang fokus pada pelayanan kesehatan ibu dan anak. Posyandu didirikan sebagai sarana untuk meningkatkan kesehatan masyarakat, terutama di tingkat desa atau kelurahan, dengan memberikan akses mudah dan gratis ke layanan kesehatan dasar. Kegiatan yang biasa dilakukan di Posyandu meliputi pemeriksaan kesehatan ibu hamil, imunisasi, pemantauan tumbuh kembang balita, pemberian vitamin dan makanan tambahan, serta penyuluhan.</td>
        <td width="50%"><center><img src="img/posyandu3.png"width="70%"></center></td>
    </tr>
    <tr bgcolor="white" ><td colspan="2"><center>---</center></td></tr>
    <tr bgcolor="white" >
        <td colspan="2"><center><h2>LAYANAN POSYANDU</h2></center></td>
    </tr>
    <tr bgcolor="white">
        <td colspan="2">
            <table class="margin">
                <tr class="center">
                    <td width="20%"><div class="kotak kotak1"></div><br>Penimbangan dan pemantauan tumbuh kembang balita</td>
                    <td width="20%"><div class="kotak kotak1"></div><br>Pemberian imunisasi dasar untuk bayi dan balita</td>
                    <td width="20%"><div class="kotak kotak1"></div><br>Pelayanan kesehatan bagi ibu hamil</td>
                    <td width="20%"><div class="kotak kotak1"></div><br>Penyuluhan kesehatan masyarakat</td>
                    <td width="20%"><div class="kotak kotak1"></div><br>Pelayanan keluarga berencana (KB)</td>
                </tr>
                <tr>
                    <td colspan="5"><center><button>Selengkapnya___</button></center></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr class="margin" bgcolor="white">
        <td>
            <img src="img/tentangposyandu1.jpg" width="500px" align="center">
        </td>
        <td>
            <img src="img/tentangposyandu2.jpg" width="500px">
        </td>
    </tr>
</table>
</body>
</html>
<?php
include 'footer.php'
?>