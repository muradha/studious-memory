<?php 

  $angka1 = isset ($_GET["angka1"]) ? $_GET["angka1"]:"0";
  $angka2 = isset ($_GET["angka2"]) ? $_GET["angka2"]:"0";

  $hasil = $angka1 * pow($angka2,2) / 2;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Soal 1 - Kalkulator Energi</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/w3.css">

    <style>
          .rumus {
            left: 39%;
            position: relative;
            display: inline-block;
          }
          .jml{
            position: absolute;
            display: inline-block;
            left: 62%;
          }
          .gambar2 {
            display: inline-block;
            padding-left: 35%;
          }
          .gambar1 {
            position: absolute;
            display: inline-block;
            padding-left: 82%;
            padding-top: 2%;
          }
          .gambar {
            padding-left: 45%;
            background-color: #333;
          }
          .nav-tabs {
            float: none;
            text-align: center;
            background-color: #333;
          }

          .nav-tabs li {
            display: inline-block;
            float: none;
          }

          .nav-tabs li a {
            color: #68AE32;
          }
          .nav-tabs
          .aktif a {
            color: white;
          }
    </style>

  </head>
  <body>

    <div class="gambar">
      <img class="img-responsive" src="img/logo.ico" width="15%">
    </div>

    <div id="atas">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#">FISIKA DASAR :</a></li>
        <li><a href="EP.php">Energi Potensial</a></li>
        <li><a href="EM.php">Energi Mekanik</a></li>
      </ul>
    </div>

    <marquee>Aloysia Thrisa Bela Lorukoba/XIIA2/03</marquee>
    
    <div class="w3-row">
      <div class="w3-container w3-third">
      </div>
      <div class="w3-container w3-third">
        <div class="alert alert-info fade in">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>EK = </strong>  energi kinetik
          <strong>m = </strong>  massa
          <strong>v = </strong>  kecepatan
        </div>
      <div class="w3-container w3-third">

      </div>
    </div>

    <div style="margin-top:90px">
			<div class="container">
				<div class="panel panel-default" style="margin:0 auto;width:600px">
					<div class="panel-heading">
						<h2 class="panel-title">Rumus Energi Kinetik</h2>
            <div class="gambar2">
              <img class="img-responsive" src="img/rumusEK.png" width="40%">
            </div>
					</div>
					<div class="panel-body">
						<form name="formkalkulator" method="GET" class="form-horizontal" role="form">
							<div class="form-group">
								<label for="angka1" class="col-lg-2 control-label">Massa</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="angka1" placeholder="kg">
								</div>
							</div>
							<div class="form-group">
								<label for="angka2" class="col-lg-2 control-label">Kecepatan</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="angka2" placeholder="m/2">
								</div>
							</div>
							<div class="form-group">
								<label for="hasil" class="col-lg-2 control-label">Hasil</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="hasil" placeholder="Joule (J)" value="<?= $hasil ?>">
								</div>
							</div>
              <br>
              <div class="jml">
                <button type="submit" class="btn btn-success">Hitung</button>
              </div>
              <input name="resetfield" type="reset"class="btn btn-danger"></button>
						</form>
					</div>
				</div>
			</div>
		</div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
