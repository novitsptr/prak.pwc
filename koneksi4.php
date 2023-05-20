<?php
// simpan ke database 
	$insert = mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES ('','$fnama','$lalamat','$noHp','$tglLahir')");
	
	if($insert){
		echo "Data berhasil disimpan";
	}else{
		echo "Data Gagal disimpan";
	}
