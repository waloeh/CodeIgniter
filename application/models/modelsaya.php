<?php 
class Modelsaya extends CI_Model {
	public function getData($where = '') {
		$data = $this->db->query('select * from mahasiswa '.$where);
		return $data->result_array();
	}

	public function insertData($namaTabel, $data) {
		$res = $this->db->insert($namaTabel, $data);
		return $res;
	}

	public function updateData($namaTabel, $data, $where) {
		$res = $this->db->update($namaTabel, $data, $where);
		return $res;
	}

	public function deleteData($namaTabel, $where) {
		$res = $this->db->delete($namaTabel, $where);
		return $res;
	}
}

 ?>