<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
		$data['content']	= 'contents/bendahara/home';
		$data['judul']		= 'Beranda';
		$data['sub_judul']	= 'Dashboard';
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');

		$query = $this->db->select('*')->from('ref_periode')->where('status_id', 1)->get()->row();

		$data['siswa']		= $this->crud->count('mst_siswa', 'status_id', 1);
		$data['guru']		= $this->crud->count('mst_guru', 'status_id', 1);
		$data['jurusan']	= $this->crud->count('mst_jurusan', 'status_id', 1);
		$data['kelas']		= $this->crud->count('mst_kelas', 'periode_id', $query->id);

		$this->load->view('includes/main', $data);
	}
}
