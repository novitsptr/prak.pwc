<?php
if(isset($_POST['fnama'])){
{
$nama = $_POST['nama'];
$lalamat = $_POST['lalamat'];
echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
echo "Nama : ".$fnama."<br/>Alamat : ".$lalamat;
-}
//
if(isset($-GET['fnama']))
{
$fnama = $_GET['fnama'];
$lalamat = $_GET['lalamat'];
echo "<spam class='success'>Dengan <b>METODE GET</b></span><br/>";
echo"Nama : ".$fnama."<br/>Alamat : ".$lalamat;
}
?>
