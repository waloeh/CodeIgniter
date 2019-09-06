<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<?php echo '<h2>'.$this->session->flashdata('pesan').'</h2>' ?>
	<table border="1" align="center" width="50%">
	<a href="<?php echo base_url()."index.php/crud" ?>">Tambah Data</a>
		<tr>
			<th>Nim Mahasiswa</th>
			<th>Nama Mahasiswa</th>
			<th>Jurusan</th>
			<th>Id</th>
			<th>Aksi</th>
		</tr>

		<?php 
		foreach($data as $d) { ?>

		<tr>
			<td><?= $d['nim']; ?></td> 
			<td><?= $d['nama']; ?></td> 
			<td><?=$d['jurusan']; ?></td>
			<td><?=$d['id']; ?></td>
			<td align="center"> 
				<a href="<?php echo base_url()."index.php/crud/ubah_data/".$d['id'] ; ?>">Ubah ||</a>	 
				<a href="<?php echo base_url()."index.php/crud/hapus_data/".$d['id']; ?>" id="hapus">Hapus</a>
			</td> 
		</tr>
			
		<?php } ?>
	</table>
	<?php echo $this->session->flashdata('pesan') ?>
</body>
</html>