<?php 
	$konek = new mysqli("localhost","root","","hotelindah");

	if($konek->connect_error){
		die("Koneksi Gagal Karena : ". $konek->connect_error);
	}
	
//tabel pegawai
	$sql="create table pegawai(idpegawai varchar(30) not null primary key, namapegawai varchar(40),hppegawai varchar (50), jkpegawai varchar(10), tglbekerja varchar(50), alamatpegawai varchar(200))";
	if($konek->query($sql)){
	echo "Tabel pegawai berhasil dibuat";
	}
	else{
		echo "Tabel Tidak Berhasil di Buat karena ".$konek->error;
	}
	$konek->close();
 ?>