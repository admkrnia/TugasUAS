<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Model 
{
	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('pemain_model');
		$data['pemain_list'] = $this->pemain_model->getDatapemain();
		$this->load->view('pemain', $data);
	}
	

}

/* End of file Pegawai.php */
/* Location: ./application/models/Pegawai.php */