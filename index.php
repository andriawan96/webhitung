<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="andriawan">
    <meta name="keywords" content="web, hitung">
    <meta name="description" content="web hitung minimalis">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WEB HITUNG | SEDERHANA</title>
    <link rel="icon" href="calculator.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>
  <body>


    <div class="container-sm">
      <!-- judul -->
        <div class="">
          <h1 style=" padding: 30px; ">WEB HITUNG SEDERHANA</h1>
        </div>
        <!-- form input data -->
        <div class="card" style="width: 25rem; padding: 10px;">
          <img src="calculator.png" class="card-img-top" alt="calculator">
          <div class="card-body">
          <h5 class="card-title">Input nilai anda disini...</h5>
          <form class="" action="index.php" method="post">
            <div class="form-group">
              <label for="nAbsen">Nilai Absen</label>
              <input type="text" name="nilai_absen" class="form-control col-8" id="nAbsen" placeholder="Masukan nilai absen" required>
            </div>
            <div class="form-group">
              <label for="nKerjasama">Nilai Kerjasama</label>
              <input type="text" name="nilai_kerjasama" class="form-control col-8" id="nKerjasama" placeholder="Masukan nilai kerjasama" required>
            </div>
            <div class="form-group">
              <label for="nPendidikan">Nilai Pendidikan</label>
              <input type="text" name="nilai_pendidikan" class="form-control col-8" id="nPendidikan" placeholder="Masukan nilai kerjasama" required>
            </div>
            <input type="submit" name="submit" value="Kirim data..." class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
    <br>
    <!-- penampung table -->
    <div class="container">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nilai Absen</th>
            <th scope="col">Nilai Kerjasama</th>
            <th scope="col">Nilai Pendidikan</th>
            <th scope="col">SUM</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if (isset($_POST["submit"])) {
              //$nilai_absen = $_POST["nilai_absen"];
              //$nilai_kerjasama = $_POST["nilai_kerjasama"];
              //$nilai_pendidikan = $_POST["nilai_pendidikan"];
              //$sum = $nilai_absen + $nilai_kerjasama + $nilai_pendidikan;
            }
           ?>
          <tr>
            <th scope="row">1</th>
            <td>1<?php //echo $nilai_absen;?></td>
            <td>1<?php //echo $nilai_kerjasama;?></td>
            <td>1<?php //echo $nilai_pendidikan;?></td>
            <td>1<?php //echo $sum?></td>
          </tr>
        </tbody>
      </table>
    </div>

  </body>
</html>
