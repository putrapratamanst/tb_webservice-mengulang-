<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model {

	
	
	public function ambilSemua(){
		$query = $this->db->get('tbl_portal');
		$query = $query->result_array();

		return $query;
	}

	public function ambilSatu($where=array()){
		$query = $this->db->get_where('tbl_portal',$where);
		$query = $query->result_array();

		if($query){
			return $query[0];
		}
	}

	public function simpan($inp=array()){
		$query = $this->db->insert('tbl_portal',$inp);
		return $query;
	}

	public function ubah($inp=array(),$id=array()){
		$query = $this->db->update('tbl_portal',$inp,$id);
		return $query;
	}

	public function hapus($inp=array()){
		$query = $this->db->delete('tbl_portal',$inp);
		return $query;
	}

}