<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('e404');
		}
		elseif ($this->session->userdata('level')=='user') {
			redirect('e404');
		}
		$this->load->model("m_data");
	}

	function index()
	{
		// $this->load->view('admin');

		$data['show']=$this->m_data->select('user');
		$data['side']='tampil/side';
		$data['content']='tampil/v_user';
		$this->load->view('tampil/main',$data);
	}
	function v_user()
	{
		$data['show']=$this->m_data->select('user');
		$data['side']='tampil/side';
		$data['content']='tampil/v_user';
		$this->load->view('tampil/main',$data);
	}

	function v_tambah_useradmin()
	{
		$data['show']=$this->m_data->select('user');
		$data['side']='tampil/side';
		$data['content']='tampil/v_tambah_useradmin';
		$this->load->view('tampil/main',$data);
	}

	function v_rutemaskapai()
	{
		$data['show']=$this->m_data->select('rute');
		$data['side']='tampil/side';
		$data['content']='tampil/v_rutemaskapai';
		$this->load->view('tampil/main',$data);
	}	

	function v_tambahrute()
	{
		$data['show']=$this->m_data->select('rute');
		$data['side']='tampil/side';
		$data['content']='tampil/v_tambahrute';
		$this->load->view('tampil/main',$data);
	}

	function hapus($id){
		$where = array('userid' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('admin');
	}

	function update_user($id){
		$where = array('userid' => $id);
		$data['show'] = $this->m_data->edit_data($where,'user')->result();
		$data['side']='tampil/side';
		$data['content']='tampil/v_edit';
		$this->load->view('tampil/main',$data);
	}	

	function update_rute($id){
		$where = array('id' => $id);
		$data['show'] = $this->m_data->edit_data($where,'rute')->result();
		$data['side']='tampil/side';
		$data['content']='tampil/v_editrute';
		$this->load->view('tampil/main',$data);
	}
	function addairplane(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
 		$fullname = $this->input->post('fullname');

		$data = array(
			'username' => $username,
			'email' => $email,
			'password' => md5($password),
			'fullname' => $fullname,
			'level' => "user"
			);
		$this->m_data->input_data($data,'rute');
		redirect('main');
	}
}