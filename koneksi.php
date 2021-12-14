<?php

$server="localhost";
$username="root";
$password="";
$database="18_mywebsite_12rpl1";

$konek = mysqli_connect ($server,$username,$password,$database);

if (!$konek) {
    die("KONEKSI GAGAL<br>".mysql_connect_error().mysqli_connect_errno());
}
//else {
    //cho "KONEKSI BERHASIL";
//}

?>