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
$idpegawai= $_POST ['idpegawai'];
$namapegawai = $_POST ['namapegawai'];
$hppegawai = $_POST ['hppegawai'];
$jkpegawai = $_POST ['jkpegawai'];
$tglbekerja = $_POST ['tglbekerja'];
$alamatpegawai = $_POST ['alamatpegawai'];

$sql = "INSERT INTO pegawai(idpegawai, namapegawai,hppegawai,jkpegawai,tglbekerja,alamatpegawai) VALUES ('$idpegawai','$namapegawai','$hppegawai','$jkpegawai','$tglbekerja','$alamatpegawai')";
if($konek->query($sql)){
	echo "Data Pegawai Berhasil Di tambah! <br/>";
}
else{
	echo "Data Pegawai Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tambah_pegawai.php'>Tambah Data Pegawai<a/>";
?>