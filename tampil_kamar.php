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

$sql = "SELECT * FROM kamar";
$data = $konek->query($sql);

echo "<a href='home.html'>Kembali ke Menu</a>";
echo "<h1>Daftar Kamar</h1>";
echo "<table border='1'>";
echo "<tr><td>No.</td><td>Id Kamar</td><td>Jenis Kamar</td><td>Check In</td><td>Check Out</td><td>Jumlah Kamar</td><td>Harga Kamar</td><td colspan=2>Aksi</td></tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['idkamar']."</td>";
    echo "<td>".$row['jeniskamar']."</td>";
    echo "<td>".$row['check_in']."</td>";
    echo "<td>".$row['check_out']."</td>";
    echo "<td>".$row['jumlahkamar']."</td>";
    echo "<td>".$row['hargakamar']."</td>";
    //echo "<td>".$row['totalharga']."</td>";
    echo "<td><a href='formupdate_kamar.php?idkamar=".$row['idkamar']."'>Edit</a></td>";
    echo "<td><a href='delete_kamar.php?idkamar=".$row['idkamar']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
