<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function select($table)
	{
		return $this->db->get($table);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function tampilPencarian($ruteFrom)
	{
		$qry = $this->db->query("select * from rute where rute_from='$ruteFrom'");
		return $qry;
	}
}