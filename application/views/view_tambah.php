<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h2>Tambah Data</h2>
	<form method="post" action="<?= base_url()."index.php/crud/insert_data"; ?>">
		<table>
			<tr>
				<td for="nim">Nim Mahasiswa</td>
				<td><input type="text" name="nim" id="nim"></td>
			</tr>
			<tr>
				<td for="nama">Nama Mahasiswa</td>
				<td><input type="text" name="nama" id="nama"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>
					<select name="jurusan">
						<option value="">Pilih Jurusan</option>
						<option value="T.Mesin">T. Mesin</option>
						<option value="T.Industri">T. Industri</option>
						<option value="T.Mesin">T. Arsitektur</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>	
		</table>
		
	</form>
</body>
</html>