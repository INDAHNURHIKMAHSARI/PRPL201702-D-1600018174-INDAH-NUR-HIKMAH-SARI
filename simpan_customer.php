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
$idcustomer= $_POST ['idcustomer'];
$namacustomer = $_POST ['namacustomer'];
$hpcustomer = $_POST ['hpcustomer'];
$jkcustomer = $_POST ['jkcustomer'];
$emailcustomer = $_POST ['emailcustomer'];
$alamatcustomer = $_POST ['alamatcustomer'];

$sql = "INSERT INTO customer(idcustomer, namacustomer,hpcustomer,jkcustomer,emailcustomer,alamatcustomer) VALUES ('$idcustomer','$namacustomer','$hpcustomer','$jkcustomer','$emailcustomer','$alamatcustomer')";
if($konek->query($sql)){
	echo "Data Customer Berhasil Di tambah! <br/>";
}
else{
	echo "Data Customer Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href = 'tambah_customer.php'>Tambah Data Customer<a/>";
?>