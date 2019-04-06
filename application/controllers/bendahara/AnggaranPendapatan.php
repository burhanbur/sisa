<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnggaranPendapatan extends CI_Controller {
	var $table 		= 'mst_anggaran_masuk';
	var $judul 		= 'Master';
	var $sub_judul	= 'Pendapatan';

	public function __construct() {
		parent::__construct();
		$this->validation->validate();
		$this->load->model('m_pendapatan');
		if ($this->session->userdata('role')!=2) {
			echo "<script>alert('Anda tidak berhak mengakses halaman ini!');history.go(-1);</script>";
		}
		$this->load->helper('text');
	}

	public function index()
	{
		$data['content']	= 'contents/bendahara/anggaranpendapatan/show';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_pendapatan->showPendapatan();

		$data['anggaran']	= $this->crud->getTable('ref_anggaran_masuk')->result();

		$this->load->view('includes/main', $data);
	}

	public function create()
	{
		$data['content']	= 'contents/bendahara/anggaranpendapatan/create';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');

		$data['anggaran']	= $this->crud->getTable('ref_anggaran_masuk')->result();

		$this->load->view('includes/main', $data);
	}

	public function store()
	{
		$data = array(
                'nama' => $this->input->post('nama'),
                'biaya' => $this->input->post('biaya'),
                'ref_anggaran' => $this->input->post('anggaran'),
            );

		$insert = $this->crud->getInsert($this->table, $data);

		if ($insert) {
			redirect('bendahara/anggaranpendapatan');
		}
	}

	public function detail()
	{
		$id = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/anggaranpendapatan/detail';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_pendapatan->detailPendapatan($id);

		$this->load->view('includes/main', $data);
	}

	public function edit()
	{
		$id = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/anggaranpendapatan/edit';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_pendapatan->detailPendapatan($id)->row();

		$data['anggaran']	= $this->crud->getTable('ref_anggaran_masuk')->result();

		$this->load->view('includes/main', $data);
	}

	public function update()
	{
		$param = 'id';
		$paramVal = $this->input->post('id');

		$data = array(
                'nama' => $this->input->post('nama'),
                'biaya' => $this->input->post('biaya'),
                'ref_anggaran' => $this->input->post('anggaran')
            );

        $update = $this->crud->getUpdate($param, $paramVal, $this->table, $data);

        if ($update) {
			redirect('bendahara/anggaranpendapatan');
		} else {

		}
	}

	public function delete()
	{
		$param = 'id';
		$paramVal = $this->uri->segment(4);
		$delete = $this->crud->getDelete($param, $paramVal, $this->table);

		if ($delete) {
			redirect('bendahara/anggaranpendapatan');
		} else {

		}
	}
}
