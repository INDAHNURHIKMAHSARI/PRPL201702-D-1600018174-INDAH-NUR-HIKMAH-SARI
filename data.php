<html>
<head><title>DATA RESERVASI</title>
  <link rel="stylesheet" type="text/css" href="profil.css">
</head>
<body>
<div id="container">
    <div id="header">
      <div class="header"></div>
      <div class="menu">
      <ul>
       <li><a href="home.html">HOME</a></li>
        <li><a href="galeri.html">GALERI</font></a></li>
        <li><a href="contact.html">RESERVASI</font></a></li>
        <li><a href="kamar.html">KAMAR</font></a></li>
        <li><a href="pegawai.html">PEGAWAI</font></a></li>
        <li><a href="data.php">DATA RESERVASI</font></a></li>
        <div class="isi">
      </ul>
    </div>
    </div>

<tbody>
<br><br>
<center>
<font size="5" color="lavender">Pencarian Data Pesanan (Check In- Check Out)</font>
<br><br>
<form action="" method="POST">
<input type="date" name="check_in">
<input type="date" name="check_out">
<input type="submit" id="submit" name="submit2" value="Cari">
<input type="submit" id="submit" name="submit1" value="Reset">
</form>
<table>

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

if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $sql="SELECT * FROM  kamar where idkamar like '%$qcari%' or check_in like '%$qcari' or check_out like '%$qcari' ";
}

if(isset($_POST['submit2'])){
  $qcari=$_POST['check_in'];
  $qcari2=$_POST['check_out'];
  $sql="SELECT * FROM  kamar where check_in between '$qcari' and '$qcari2'";
}

if(isset($_POST['submit1'])){
  
  $sql="SELECT * FROM  kamar ";
}
$data = $konek->query($sql);
echo "<table bordercolor='lightcoral' border='3s' style='background-color: white;'>";
echo "<tr>

            <td>No.</td>
            <td>Id Kamar</td>
            <td>Jenis Kamar</td>
            <td>Check In</td>
            <td>Check Out</td>
            <td>Jumlah Kamar</td>
            <td>Harga Kamar</td>
      </tr>:";

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
    echo "</tr>";
  }
}
else{
  echo "Data Kosong!";
}
echo "</table>";
echo("</div>");
echo("</div>");

$konek->close();
?>
</table></center>
</tbody>
<div id="footer">
     <font face="Courier" color="Aqua" size="5">&copy;Hotel Indah Permata</font> &nbsp;
</div>
</body>
</html>