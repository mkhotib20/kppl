<?php 
/**
* 
*/
class models extends CI_Model
{
	
	public function read($tabel){
		return $this->db->get_where($tabel);
	}
	public function readWH($tabel, $where, $id){
		return $this->db->get_where($tabel, array($where => $id));
	}
	public function input($tabel, $data){
		return $this->db->insert($tabel, $data);
	}
	
}
 ?>