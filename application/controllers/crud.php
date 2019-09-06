<?php 
class Crud extends CI_Controller {
	public function index() {
		$this->load->view('view_tambah');
	}

	public function insert_data() {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$jurusan = $_POST['jurusan'];
		$data = ['nim'=>$nim, 'nama'=>$nama, 'jurusan'=>$jurusan];
		$result = $this->modelsaya->insertData('mahasiswa', $data);
		if ($result >= 1) {
			$this->session->set_flashdata('pesan', 'Data berhasil ditambahkan');
			redirect('mahasiswa/index');
		}
		else{
			echo "<h2>Data Gagal Disimpan</h2>";
		}
	}

	public function ubah_data($id) {
		$result = $this->modelsaya->getData("where id='$id'");
		$this->load->view('view_ubah', ['data'=>$result]);
	}

	public function hapus_data($id) {
		$where = ['id'=>$id];
		$result = $this->modelsaya->deleteData('mahasiswa',$where);
		if ($result >= 1) {
			$this->session->set_flashdata('pesan','Data berhasil dihapus');
			redirect('mahasiswa/index');
		}
		else{
			echo "gagal";
		}
	}

	public function set_data() {
		$id = $_POST['id'];
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$jurusan = $_POST['jurusan'];
		$data = ['nim'=>$nim, 'nama'=>$nama, 'jurusan'=>$jurusan];
		$result = $this->modelsaya->updateData('mahasiswa', $data, ['id'=>$id]);

		if ($result >= 1) {
			$this->session->set_flashdata('pesan', 'Data berhasil diubah');
			redirect('mahasiswa/index');
		}
		else{
			echo "gagal";
		}
	}
}

 ?>