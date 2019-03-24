<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->validation->validate();
		$this->load->model('m_siswa');
		if ($this->session->userdata('role')!=2) {
			echo "<script>alert('Anda tidak berhak mengakses halaman ini!');history.go(-1);</script>";
		}
		$this->load->helper('text');
	}

	public function index()
	{
		$data['content']	= 'contents/bendahara/siswa/show';
		$data['judul']		= 'Master';
		$data['sub_judul']	= 'Siswa';
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_siswa->showSiswa();

		$this->load->view('includes/main', $data);
	}
}
