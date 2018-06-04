<!DOCTYPE html>
<html>
<head>
	<title>Data Hotel</title>
</head>
<body>
	<a href="contact.html">Kembali Ke Menu </a>
	<h1>Tambah Customer</h1>
	<form action="simpan_customer.php" method="post">
		<table>
			<tr>
				<td>Id Customer</td>
				<td> : </td>
				<td><input type="text" name="idcustomer"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td> : </td>
				<td><input type="text" name="namacustomer"></td>
			</tr>
			<tr>
				<td>No.Handphone</td>
				<td> : </td>
				<td><input name="hpcustomer" rows="8" cols="40"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td><input name="jkcustomer" rows="8" cols="40"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td> : </td>
				<td><input name="emailcustomer" rows="8" cols="40"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><textarea name="alamatcustomer" rows="8" cols="40"></textarea></td>
			</tr>
			</tr>
				<td colspan="2"></td>
				<td><input type="Submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>