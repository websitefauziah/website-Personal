<?php 
$host      = "localhost";
$user      = "id20897985_user";
$pass      = "2003_Ramadhani";
$db        = "id20897985_db";

$koneksi   = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die("Gagal terkoneksi");
}