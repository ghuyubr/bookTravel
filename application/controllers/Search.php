<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
	}

	public function cari_rute()
	{
		$rutefrom = $this->input->get('rute_from');

		$data['rute'] = $this->m_data->tampilPencarian($rutefrom);
		$this->load->view('result', $data);
	}
}
