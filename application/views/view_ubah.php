<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	<form method="post" action="<?php echo base_url()."index.php/crud/set_data"; ?>" >
		<table>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $data[0]["id"]; ?>"></td>
			</tr>
			<tr>
				<td>Nim </td>
				<td><input type="text" name="nim" value="<?php echo $data[0]["nim"]; ?>"></td>
			</tr>
			<tr>
				<td>Nama </td>
				<td><input type="text" name="nama" value="<?php echo $data[0]['nama']; ?>"></td>
			</tr>
				<tr>
				<td>Jurusan </td>
				<td><input type="text" name="jurusan" value="<?php echo $data[0]['jurusan']; ?>"></td>
			</tr>
				<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>