<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$idb_name = "hotelindah";

$konek = new mysqli($host, $username, $password, $idb_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM customer";
$data = $konek->query($sql);

echo "<a href='home.html'>Kembali ke Menu</a>";
echo "<h1>Daftar Customer</h1>";
echo "<table border='1'>";
echo "<tr><td>No.</td><td>Id Customer</td><td>Nama</td><td>No.Telphone</td><td>Jenis Kelamin</td><td>Email</td><td>Alamat</td><td colspan=2>Aksi</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['idcustomer']."</td>";
    echo "<td>".$row['namacustomer']."</td>";
    echo "<td>".$row['hpcustomer']."</td>";
    echo "<td>".$row['jkcustomer']."</td>";
    echo "<td>".$row['emailcustomer']."</td>";
    echo "<td>".$row['alamatcustomer']."</td>";
    echo "<td><a href='formupdate_customer.php?idcustomer=".$row['idcustomer']."'>Edit</a></td>";
    echo "<td><a href='delete_customer.php?idcustomer=".$row['idcustomer']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
