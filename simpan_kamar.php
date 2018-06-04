<?php 
//membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$idb_name = "hotelindah";

$konek = new mysqli($host, $username, $password, $idb_name);

//cek koneksi
if($konek->connect_error){
	die("Koneksi Gagal Karena : ". $konek->connect_error);
}
/*$masuk = date_create($_POST['check_in']);
$keluar = date_create($_POST['check_out']);
$jumlahhari = date_diff($in,$out)->format('%a');*/

$idkamar = $_POST ['idkamar'];
$jeniskamar = $_POST ['jeniskamar'];
$check_in = $_POST ['check_in'];
$check_out = $_POST ['check_out'];
$jumlahkamar = $_POST ['jumlahkamar'];
$hargakamar = $_POST ['hargakamar'];
//$totalharga = $_POST ['hargakamar'] * $_POST ['jumlahkamar'] * $jumlahhari ;

$sql = "INSERT INTO kamar(idkamar, jeniskamar,check_in,check_out,jumlahkamar,hargakamar) VALUES ('$idkamar','$jeniskamar','$check_in','$check_out','$jumlahkamar','$hargakamar')";
if($konek->query($sql)){
	echo "Data Kamar Berhasil Di tambah! <br/>";
}
else{
	echo "Data Kamar Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tambah_kamar.php'>Tambah Data Kamar<a/>";
?>
