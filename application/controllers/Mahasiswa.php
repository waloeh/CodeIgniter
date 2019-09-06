<?php 
class Mahasiswa extends CI_Controller {
	public function index() {
		$data = $this->modelsaya->getData();
		$this->load->view('view_mahasiswa',['data'=>$data]);
	}

	public function insert() {
		$res = $this->modelsaya->insertData('mahasiswa', ['nim'=>'29282047', 'nama'=>'Sopuriah', 'jurusan'=>'Management']);

		if ($res >= 1) {
			echo "<h2>Data Berhasil Ditambahkan</h2>";
		}
		else {
			echo "<h2>Data Gagal Ditambahkan</h2>";
		}
	}

	public function update() {
		$res = $this->modelsaya->updateData('mahasiswa', ['nama'=>'Ade Barkah'], ['id'=>'6']);
		if($res >= 1) {
			echo "<h2>Data Berhasil Diubah</h2>";
		}
		else{
			echo "<h2>Data Gagal Diubah</h2>";
		}
	}

	public Function delete() {
		$res = $this->modelsaya->deleteData('mahasiswa', ['nim'=>'1']);
		if ($res <= 1  ) {
			echo "<h2>Data Berhasil Dihapus</h2>";
		}
		else{
			echo "Data Gagal Dihapus";
		}
	}
}


 ?>