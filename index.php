<?php
  include 'koneksi.php';
$films = mysqli_query($koneksi, 'SELECT*FROM film');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sakila Films</title>
      <link rel="stylesheet" href="materialize/css/materialize.min.css">
      <style>
        /*body{*/
            /*background-color: #2aabd2;*/
            /*font-family: sans-serif;*/
            /*color: white;*/
        /*}*/
        table{
        text-align: center;
      }
        h1{
            font-family: "Roboto Medium";
        }
      .find{
        text-align: right;
      }
      h1{
        text-align: center;
      }
          body{
              background-color: #ececec;
          }
          thead{
              text-align: center;

          }
    </style>
  </head>
  <body>
    <h1>List Film Yang ada pada malam ini</h1>
    <div class="find">
        <form action="index.php" method="post">
            <div class="container">
                <div class="row center">
                    <div class="col s6 col">
                        <input type="text" name="search" placeholder="Mencari?">
                    </div>
                    <div class="col s2">
                        <input type="submit" name="btn"" value="Search" class="waves-effect waves-light btn">
                    </div>
                </div>


            </div>

        </form>
    </div>
    <br/>
  <?php
    include "tabel.php";
  ?>
  </body>
</html>
