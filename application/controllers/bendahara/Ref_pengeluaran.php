<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref_pengeluaran extends CI_Controller {
	var $table 		= 'ref_anggaran_keluar';
	var $judul 		= 'Referensi';
	var $sub_judul	= 'Pengeluaran';

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
		$data['content']	= 'contents/bendahara/ref_pengeluaran/show';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');	
		$data['data']		= $this->crud->getTable($this->table)->result();

		$this->load->view('includes/main', $data);
	}

	public function create()
	{
		$data['content']	= 'contents/bendahara/ref_pengeluaran/create';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');

		$this->load->view('includes/main', $data);
	}

	public function store()
	{
		$data = array(
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama')
            );

		$insert = $this->crud->getInsert($this->table, $data);

		if ($insert) {
			redirect('bendahara/ref_pengeluaran');
		} else {
			
		}
	}

	public function detail()
	{
		$param = 'id';
		$paramVal = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/ref_pengeluaran/detail';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->crud->getData($param, $paramVal, $this->table);

		$this->load->view('includes/main', $data);
	}

	public function edit()
	{
		$param = 'id';
		$paramVal = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/ref_pengeluaran/edit';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');		
		$data['data']		= $this->crud->getData($param, $paramVal, $this->table)->row();

		$this->load->view('includes/main', $data);
	}

	public function update()
	{
		$param = 'id';
		$paramVal = $this->input->post('id');

		$data = array(
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama')
            );

        $update = $this->crud->getUpdate($param, $paramVal, $this->table, $data);

        if ($update) {
			redirect('bendahara/ref_pengeluaran');
		} else {
			
		}
	}

	public function delete()
	{
		$param = 'id';
		$paramVal = $this->uri->segment(4);
		$delete = $this->crud->getDelete($param, $paramVal, $this->table);

		if ($delete) {
			redirect('bendahara/ref_pengeluaran');
		} else {

		}
	}
}
