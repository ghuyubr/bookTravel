<?php 


class Action extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function daftar(){
		$this->load->view('v_input');
	}

	function update(){
		$id = $this->input->post("id");
		$username = $this->input->post('username');
		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');

		$data = array(
			'userid' => $id,
			'username' => $username,
			'fullname' => $fullname,
			'email' => $email
		);

		$where = array(
			'userid' => $id
		);

		$this->m_data->update_data($where,$data,'user');
		redirect('admin');
	}

	function update_rute(){
		$id = $this->input->post("id");
		$transportationid = $this->input->post('transportationid');
		$depart_at = $this->input->post('depart_at');
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$price = $this->input->post('price');

		$data = array(
			'id' => $id,
			'transportationid' => $transportationid,
			'depart_at' => $depart_at,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'price' => $price
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where,$data,'rute');
		redirect('admin/v_addmaskapai');
	}


	function tambah_aksi(){
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
		$this->m_data->input_data($data,'user');
		redirect('login');
	}

	function tambah_useradmin(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
 		$fullname = $this->input->post('fullname');
 		$level = $this->input->post('level');

		$data = array(
			'username' => $username,
			'email' => $email,
			'password' => md5($password),
			'fullname' => $fullname,
			'level' => $level
			);
		$this->m_data->input_data($data,'user');
		redirect('admin/v_user');
	}

	function tambah_rute(){
		$transportationid = $this->input->post('transportationid');
		$depart_at = $this->input->post('depart_at');
		$rute_from = $this->input->post('rute_from');
 		$rute_to = $this->input->post('rute_to');
 		$price = $this->input->post('price');

		$data = array(
			'transportationid' => $transportationid,
			'depart_at' => $depart_at,
			'rute_from' => ($rute_from),
			'rute_to' => $rute_to,
			'price' => $price
			);
		$this->m_data->input_data($data,'rute');
		redirect('admin/v_rutemaskapai');
	}
 
}