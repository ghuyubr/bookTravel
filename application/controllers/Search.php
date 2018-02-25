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
		$ruteto = $this->input->get('rute_to');
		$departat = $this->input->get('depart_at');

		$data['rute'] = $this->m_data->tampilPencarian($rutefrom, $ruteto, $departat);
		$this->load->view('result', $data);
	}
}
