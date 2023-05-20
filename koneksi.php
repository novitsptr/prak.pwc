<?php
//koneksi database mysql
$server	= "localhost";
$user_error = "root";
$password = "";
$dbnama = "kuliah";

$koneksi = mysqli_connect($server,$user,$password,$dbnama);

if(mysqli_connect_error()){
	echo "koneksi gagal".mysqli_connect_error();
}