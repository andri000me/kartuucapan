<?php
require_once 'lib/dbconfig.php';
?>
<html>
<title>Pendaftaran</title>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="lib/jquery-1.11.2.min.js"></script>
</head>
<body>
<?php
$datas =$database->select("program", "*");
?>
<h1>Program bimbelcpns.com</h1>
<div class="row">
<div class="col-md-12">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Program</th>
                <th>Lokasi</th>
                <th>Gelombang</th>
                <th>Periode</th>
                <th>Harga</th>
                <th>Sisa Kursi</th>
              </tr>
            </thead>
            <tbody>
            <?php
            foreach($datas as $data)
			{
            ?>
              <form action="pesan.php" method="POST">
              <tr>
                <td><input type="hidden" name="id" value="<?= $data["id"] ?>"><?= $data["id"] ?></input></td>
                <td><input type="hidden" name="program" value="<?= $data["program"] ?>"><?= $data["program"] ?></input></td>
                <td><input type="hidden" name="lokasi" value="<?= $data["lokasi"] ?>"><?= $data["lokasi"] ?></input></td>
                <td><input type="hidden" name="gelombang" value="<?= $data["gelombang"] ?>"><?= $data["gelombang"] ?></input></td>
                <td><input type="hidden" name="periode" value="<?= $data["periode"] ?>"><?= $data["periode"] ?></input></td>
                <td><input type="hidden" name="harga" value="<?= "Rp ".$data["harga"] ?>"><?= "Rp ".$data["harga"] ?></input></td>
                <td><button type="submit" class="btn btn-primary">Pesan <span class="badge"><?= $data["sisa_kursi"] ?></span></button></td>
              </tr>
              </form>
             <?php
             } 
             ?> 
            </tbody>
          </table>
        </div>
</div>

</body>
</html>

