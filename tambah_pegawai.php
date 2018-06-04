<!DOCTYPE html>
<html>
<head>
	<title>Data Pegawai</title>
</head>
<body>
	<a href="pegawai.html">Kembali Ke Menu </a>
	<h1>Tambah Pegawai</h1>
	<form action="simpan_pegawai.php" method="post">
		<table>
			<tr>
				<td>Id Pegawai</td>
				<td> : </td>
				<td><input type="text" name="idpegawai"></td>
			</tr>
			<tr>
				<td>Nama Pegawai</td>
				<td> : </td>
				<td><input type="text" name="namapegawai"></td>
			</tr>
			<tr>
				<td>No.Handphone</td>
				<td> : </td>
				<td><input name="hppegawai" rows="8" cols="40"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td><input name="jkpegawai" rows="8" cols="40"></td>
			</tr>
			<tr>
				<td>Tanggal Bekerja</td>
				<td> : </td>
				<td><input name="tglbekerja" rows="8" cols="40"></td>
			</tr>
			<tr>
				<td>Alamat Pegawai</td>
				<td> : </td>
				<td><textarea name="alamatpegawai" rows="8" cols="40"></textarea></td>
			</tr>
			</tr>
				<td colspan="2"></td>
				<td><input type="Submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>