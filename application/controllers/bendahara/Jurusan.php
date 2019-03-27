<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {
	var $table = 'ref_jurusan';

	public function __construct() {
		parent::__construct();
		$this->validation->validate();
		$this->load->model('m_jurusan');
		if ($this->session->userdata('role')!=2) {
			echo "<script>alert('Anda tidak berhak mengakses halaman ini!');history.go(-1);</script>";
		}
		$this->load->helper('text');
	}

	public function index()
	{
		$data['content']	= 'contents/bendahara/jurusan/show';
		$data['judul']		= 'Master';
		$data['sub_judul']	= 'Jurusan';
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_jurusan->showJurusan();

		$this->load->view('includes/main', $data);
	}

	public function create()
	{
		$data['content']	= 'contents/bendahara/jurusan/create';
		$data['judul']		= 'Master';
		$data['sub_judul']	= 'Jurusan';
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');

		$this->load->view('includes/main', $data);
	}

	public function store()
	{
		$data = array(
                'kode_jurusan' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'status_id' => $this->input->post('status')
            );

		$insert = $this->crud->getInsert($this->table, $data);

		if ($insert) {
			redirect('bendahara/jurusan');
		}
	}

	public function detail()
	{
		$id = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/jurusan/detail';
		$data['judul']		= 'Master';
		$data['sub_judul']	= 'Jurusan';
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_jurusan->detailjurusan($id);

		$this->load->view('includes/main', $data);
	}

	public function edit()
	{
		$id = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/jurusan/edit';
		$data['judul']		= 'Master';
		$data['sub_judul']	= 'Jurusan';
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_jurusan->detailjurusan($id)->row();

		$this->load->view('includes/main', $data);
	}

	public function update()
	{
		$param = 'id';
		$paramVal = $this->input->post('id');

		$data = array(
                'kode_jurusan' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'status_id' => $this->input->post('status')
            );

        $update = $this->crud->getUpdate($param, $paramVal, $this->table, $data);

        if ($update) {
			redirect('bendahara/jurusan');
		} else {
			
		}
	}

	public function delete()
	{
		$param = 'id';
		$paramVal = $this->uri->segment(4);
		$delete = $this->crud->getDelete($param, $paramVal, $this->table);

		if ($delete) {
			redirect('bendahara/jurusan');
		} else {

		}
	}
}
