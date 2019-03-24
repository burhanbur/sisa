<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->validation->validate();
		if ($this->session->userdata('role')!=2) {
			echo "<script>alert('Anda tidak berhak mengakses halaman ini!');history.go(-1);</script>";
		}
		$this->load->helper('text');
	}

	public function index()
	{
		$data['content']	= 'contents/bendahara/kelas/show';
		$data['judul']		= 'Master';
		$data['sub_judul']	= 'Kelas';
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');

		$this->load->view('includes/main', $data);
	}
}
