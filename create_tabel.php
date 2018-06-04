<?php 
	$konek = new mysqli("localhost","root","","hotelindah");

	if($konek->connect_error){
		die("Koneksi Gagal Karena : ". $konek->connect_error);
	}
	
//tabel customer
	$sql="create table customer (idcustomer varchar(30) not null primary key, namacustomer varchar(40),hpcustomer varchar (50), jkcustomer varchar(10), emailcustomer varchar(20), alamatcustomer varchar(200))";
	if($konek->query($sql)){
	echo "Tabel customer berhasil dibuat";
	}
	else{
		echo "Tabel Tidak Berhasil di Buat karena ".$konek->error;
	}

	//tabel kamar
	$sql = "create table kamar (idkamar varchar(30) not null primary key, jeniskamar varchar(50), check_in varchar(50), check_out varchar(50),jumlahkamar int(20), hargakamar int(50))";
	if($konek->query($sql)){
		echo "Tabel Kamar Berhasil di Buat";
	}
	else{
		echo "Tabel Tidak Berhasil di Buat karena ".$konek->error;
	}
	$konek->close();
 ?>