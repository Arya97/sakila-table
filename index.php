<?php
  include 'koneksi.php';
$films = mysqli_query($koneksi, 'SELECT*FROM film');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
        body{
            background-color: #2aabd2;
            font-family: sans-serif;
            color: white;
        }
        h1{
            color: white;
        }
        table{
        text-align: center;
      }
      .find{
        text-align: right;
      }
      h1{
        text-align: center;
      }
    </style>
  </head>
  <body>

    <h1>List Film Yang ada pada malam ini</h1>
    <div class="find">
        <form action="index.php" method="post">
            <input type="text" name="search" placeholder="Mencari?">
            <input type="submit" name="btn"" value="Search">
        </form>
    </div>
    <br/>
  <?php
    include "tabel.php";
  ?>
  </body>
</html>
