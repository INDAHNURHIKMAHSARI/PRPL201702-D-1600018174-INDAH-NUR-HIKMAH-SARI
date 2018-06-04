<!DOCTYPE html>
<html>
<head>
	<title>Data Kamar</title>
</head>
<body>
	<a href="kamar.html">Kembali Ke Menu </a>
	<h1>Tambah Kamar</h1>
 <font size="3">
    <form action="simpan_kamar.php" method="POST">
      <table>
        <tr>
          <td>Id kamar</td>
          <td>: <input type="text"  placeholder="masukkan id kamar" name="idkamar" pattern="[0-9]+" required oninvalid="this.setCustomValidity('masukkan dengan angka')"> </td>
        </tr>
        <tr>
          <td>Jenis Kamar</td>
          <td>: <input type="radio" name="jenis_kamar" value="Standart">Standart <input type="radio" value="Deluxe">Deluxe<input type="radio" name="jenis_kamar" value="Executive">Executive</td>
        </tr>
        <tr>
             <td>Check_In</td>
            <td>: <input type="text" name="check_in" id="from"></td>
         </tr>
         <tr>
          <td>Check_out</td>
          <td>: <input type="text" name="check_out" id="to"></td>
        </tr>
        <tr>
          <td>Jumlah Kamar</td>
          <td>: <input type="number" name="jumlahkamar" placeholder="masukkan jumlah kamar" pattern="[0-9]+" required oninvalid="this.setCustomValidity('masukkan dengan angka')"></td>
        </tr>
        <tr>
          <td>Harga Kamar</td>
          <td>: <input type="text" name="hargakamar" placeholder="masukkan harga kamar"  ></td>
        </tr>
        <tr>
          <td colspan="2">
             <button type="submit">Submit</button>
            <button type="reset">Reset</button>
          </td>
        </tr>
        </table>   
  </form>
  </font>
</body>
</html>