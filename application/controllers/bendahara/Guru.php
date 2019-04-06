<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
	var $table 		= 'mst_guru';
	var $judul 		= 'Master';
	var $sub_judul	= 'Guru';

	public function __construct() {
		parent::__construct();
		$this->validation->validate();
		$this->load->model('m_guru');
		if ($this->session->userdata('role')!=2) {
			echo "<script>alert('Anda tidak berhak mengakses halaman ini!');history.go(-1);</script>";
		}
		$this->load->helper('text');
	}

	public function index()
	{
		$data['content']	= 'contents/bendahara/guru/show';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_guru->showGuru();

		$this->load->view('includes/main', $data);
	}

	public function create()
	{
		$data['content']	= 'contents/bendahara/guru/create';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');

		$this->load->view('includes/main', $data);
	}

	public function store()
	{
		$data = array(
                'nip' => $this->input->post('nip'),
                'nama' => $this->input->post('nama'),
                'status_id' => $this->input->post('status')
            );

		$insert = $this->crud->getInsert($this->table, $data);

		if ($insert) {
			redirect('bendahara/guru');
		}
	}

	public function detail()
	{
		$nip = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/guru/detail';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_guru->detailGuru($nip);

		$this->load->view('includes/main', $data);
	}

	public function edit()
	{
		$nip = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/guru/edit';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_guru->detailGuru($nip)->row();

		$this->load->view('includes/main', $data);
	}

	public function update()
	{
		$param = 'id';
		$paramVal = $this->input->post('id');

		$data = array(
                'nip' => $this->input->post('nip'),
                'nama' => $this->input->post('nama'),
                'status_id' => $this->input->post('status')
            );

        $update = $this->crud->getUpdate($param, $paramVal, $this->table, $data);

        if ($update) {
			redirect('bendahara/guru');
		} else {
			
		}
	}

	public function delete()
	{
		$param = 'id';
		$paramVal = $this->uri->segment(4);
		$delete = $this->crud->getDelete($param, $paramVal, $this->table);

		if ($delete) {
			redirect('bendahara/guru');
		} else {

		}
	}
}
