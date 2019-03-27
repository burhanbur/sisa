<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
	var $table = 'mst_kelas';

	public function __construct() {
		parent::__construct();
		$this->validation->validate();
		$this->load->model('m_kelas');
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
		$data['data']		= $this->m_kelas->showKelas();

		$data['jurusan']	= $this->crud->getTable('ref_jurusan');

		$this->load->view('includes/main', $data);
	}

	public function create()
	{
		$data['content']	= 'contents/bendahara/kelas/create';
		$data['judul']		= 'Master';
		$data['sub_judul']	= 'kelas';
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');

		$data['jurusan']	= $this->crud->getTable('ref_jurusan');

		$this->load->view('includes/main', $data);
	}

	public function store()
	{
		$data = array(
                'nama' => $this->input->post('nama'),
                'jurusan_id' => $this->input->post('jurusan')
            );

		$insert = $this->crud->getInsert($this->table, $data);

		if ($insert) {
			redirect('bendahara/kelas');
		}
	}

	public function detail()
	{
		$id = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/kelas/detail';
		$data['judul']		= 'Master';
		$data['sub_judul']	= 'Kelas';
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_kelas->detailKelas($id);

		$this->load->view('includes/main', $data);
	}

	public function edit()
	{
		$id = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/kelas/edit';
		$data['judul']		= 'Master';
		$data['sub_judul']	= 'Kelas';
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_kelas->detailkelas($id)->row();

		$data['jurusan']	= $this->crud->getTable('ref_jurusan');

		$this->load->view('includes/main', $data);
	}

	public function update()
	{
		$param = 'id';
		$paramVal = $this->input->post('id');

		$data = array(
                'nama' => $this->input->post('nama'),
                'jurusan_id' => $this->input->post('jurusan')
            );

        $update = $this->crud->getUpdate($param, $paramVal, $this->table, $data);

        if ($update) {
			redirect('bendahara/kelas');
		} else {
			
		}
	}

	public function delete()
	{
		$param = 'id';
		$paramVal = $this->uri->segment(4);
		$delete = $this->crud->getDelete($param, $paramVal, $this->table);

		if ($delete) {
			redirect('bendahara/kelas');
		} else {

		}
	}
}
