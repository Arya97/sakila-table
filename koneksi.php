<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'sakila');
if(!$koneksi){
    echo "Tidak Tersambung";
}else{
    echo "";
}
?>
