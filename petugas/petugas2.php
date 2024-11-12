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
        overflow-y: hidden;}
        .gallery {
            display: flex;
  justify-content: center;
        }
    div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
  background: white;
  margin-bottom: 20px;
  margin-top: 20px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 50%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
.bawahnav {
        background-image: url(img/Menu/bg1.png);
        background-attachment: scroll;
        background-size: cover;
        background-origin: inherit;
      }
      #judul{
        font-size: 35px;
        margin: 0px 0px 0px 18px;
        font-family: "futura Md BT";
        color: black;
      } 
      #logonav{
        margin-left: 30px;
      }

      .t-inline-block{
        font-size: 50px;
      }
      #box{
        border: none;
      }
      .box{
        padding: 20px;
        margin-bottom: 10px;
      }
      #content{
        position: relative;
        align-content: center;
      }

      @media screen and (max-height: 640px) {
        #wraper {width: 640px; 
            position: relative;}
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
            .card-img-top {width: 50px;}
      }
    </style>
</head>
<body>
    <div id="container align-self-center" class="bawahnav">
        <div class="box">
            <div class="row justify-content-lg-center">
               
                <div class="col-md-3"><a href="petugas/data_imunisasi.php"><img src="img/Menu/dataimun.png" class="card-img" width="50%" /></a>
                </div>

                <div class="col-md-3"><a href="petugas/data_balita.php"><img src="img/Menu/datavaksin.png" class="card-img" width="50%x"  /></a>
                </div>

                <div class="col-md-3"><a href="petugas/data_program_kb.php"><img src="img/Menu/dataanak.png" class="card-img" width="50%" /></a>
                </div>
                
                <div class="col-md-3"><a href="petugas/data_balita.php"><img src="img/Menu/datavaksin.png" class="card-img" width="50%x"  /></a>
                </div>

                <div class="col-md-3"><a href="petugas/data_program_kb.php"><img src="img/Menu/dataanak.png" class="card-img" width="50%" /></a>
                </div>

                <div class="col-md-3"><a href="petugas/data_balita.php"><img src="img/Menu/datavaksin.png" class="card-img" width="50%x"  /></a>
                </div>


            </div>
        </div>
    </div>
</body>
</html>