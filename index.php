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
        <form action="index.php" method="get">
            <div class="container">
                <div class="row center">
                    <div class="col s6 ">
                        <input type="text" name="cari" placeholder="Mencari?">
                    </div>
                    <div class="col s2">
                        <input type="submit" name="cari" value="Search" class="waves-effect waves-light btn">
                    </div>
                </div>
            </div>
        </form>
        <?php
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                echo "<b>Hasil Pencarian : </b>".$cari."</b>";
            }
        ?>
    </div>
    <br/>
    <div class="container">
        <table border="2" width = '50%;' align = 'center' height="25%" class="striped bordered">
            <thead>
            <td>ID</td>
            <td>JUDUL</td>
            <td>DESKRIPSI</td>
            <td>TAHUN</td>
            <td>BAHASA</td>
            <td>RATING</td>
            <td>LAMA SEWA</td>
            <td>BIAYA SEWA</td>
            </thead>
            <?php
                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $data = mysql_query("SELECT * FROM film WHERE title like '%".$cari."%'");
                }else{
                    $data = mysql_query("SELECT * FROM film");
                }
            ?>
            <?php foreach($films as $film) : ?>
            <tbody>
            <td><?= $film['film_id']?></td>
            <td><?= $film['title']?></td>
            <td><?= $film['description']?></td>
            <td><?= $film['release_year']?></td>
            <td><?= $film['language_id']?></td>
            <td><?= $film['rental_rate']?></td>
            <td><?= $film['rental_duration']?></td>
            <td><?= $film['replacement_cost']?></td>
            <tbody>
            <?php endforeach;?>
        </table>
    </div>
  </body>
</html>
