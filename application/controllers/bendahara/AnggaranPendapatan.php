<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnggaranPendapatan extends CI_Controller {
	var $table 			= 'ref_anggaran_masuk';
	var $mst_pendapatan = 'mst_anggaran_masuk';
	var $judul 			= 'Master';
	var $sub_judul		= 'Pendapatan';

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
		$data['content']	= 'contents/bendahara/anggaranpendapatan/show2';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');	
		$data['data']		= $this->crud->getTable($this->table)->result();

		$this->load->view('includes/main', $data);
	}

	public function create()
	{
		$data['content']	= 'contents/bendahara/anggaranpendapatan/create2';
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
			redirect('bendahara/anggaranpendapatan');
		} else {
			
		}
	}

	public function detail()
	{
		$param = 'id';
		$paramVal = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/anggaranpendapatan/detail2';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->crud->getData($param, $paramVal, $this->table);

		$periode = $this->db->select('id')->from('ref_periode')->where('status_id', 1)->get()->row();

		$data['pendapatan']	= $this->m_pendapatan->showPendapatan($data['data']->row()->id, $periode->id);
		$data['periode']	= $this->crud->getTable('ref_periode')->result();
		$data['anggaran']	= $this->crud->getTable($this->table)->result();

		$this->load->view('includes/main', $data);
	}

	public function edit()
	{
		$param = 'id';
		$paramVal = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/anggaranpendapatan/edit2';
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

	public function storeAnggaran()
	{
		$data = array(
                'nama' => $this->input->post('nama'),
                'biaya' => $this->input->post('biaya'),
                'ref_anggaran' => $this->input->post('anggaran'),
                'periode_id' => $this->input->post('periode'),
                'tingkat' => $this->input->post('tingkat')
            );

		$insert = $this->crud->getInsert($this->mst_pendapatan, $data);

		if ($insert) {
			redirect('bendahara/anggaranpendapatan/detail/'.$data['ref_anggaran']);
		}
	}

	public function editAnggaran()
	{
		$id = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/anggaranpendapatan/editAnggaran';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		
		$data['data']		= $this->m_pendapatan->detailPendapatan($id)->row();

		$data['anggaran']	= $this->crud->getTable('ref_anggaran_masuk')->result();
		$data['periode']	= $this->crud->getTable('ref_periode')->result();

		$this->load->view('includes/main', $data);
	}

	public function updateAnggaran()
	{
		$param = 'id';
		$paramVal = $this->input->post('id');

		$data = array(
                'nama' => $this->input->post('nama'),
                'biaya' => $this->input->post('biaya'),
                'ref_anggaran' => $this->input->post('anggaran'),
                'periode_id' => $this->input->post('periode'),
                'tingkat' => $this->input->post('tingkat')
            );

        $update = $this->crud->getUpdate($param, $paramVal, $this->mst_pendapatan, $data);

        if ($update) {
			redirect('bendahara/anggaranpendapatan/detail/'.$data['ref_anggaran']);
		} else {
			
		}
	}

	public function deleteAnggaran()
	{
		$param = 'id';
		$paramVal = $this->uri->segment(4);
		$delete = $this->crud->getDelete($param, $paramVal, $this->mst_pendapatan);

		$idKategori = $this->uri->segment(5);

		if ($delete) {
			redirect('bendahara/anggaranpendapatan/detail/'.$idKategori);
		} else {
			
		}
	}
}
