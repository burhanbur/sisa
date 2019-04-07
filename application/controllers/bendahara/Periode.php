<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class periode extends CI_Controller {
	var $table 		= 'ref_periode';
	var $judul 		= 'Referensi';
	var $sub_judul	= 'Periode';

	public function __construct() {
		parent::__construct();
		$this->validation->validate();
		$this->load->model('m_periode');
		if ($this->session->userdata('role')!=2) {
			echo "<script>alert('Anda tidak berhak mengakses halaman ini!');history.go(-1);</script>";
		}
		$this->load->helper('text');
	}

	public function index()
	{
		$data['content']	= 'contents/bendahara/periode/show';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_periode->showPeriode();

		$data['status']		= $this->crud->getTable('ref_status')->result();

		$this->load->view('includes/main', $data);
	}

	public function create()
	{
		$data['content']	= 'contents/bendahara/periode/create';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');

		$data['status']		= $this->crud->getTable('ref_status')->result();

		$this->load->view('includes/main', $data);
	}

	public function store()
	{
		$data = array(
                'tahun_ajaran' => $this->input->post('tahun_ajaran'),
                'tahun' => $this->input->post('tahun'),
                'status_id' => $this->input->post('status')
            );

		$insert = $this->crud->getInsert($this->table, $data);

		if ($insert) {
			redirect('bendahara/periode');
		}
	}

	public function detail()
	{
		$id = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/periode/detail';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_periode->detailPeriode($id);

		$this->load->view('includes/main', $data);
	}

	public function edit()
	{
		$id = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/periode/edit';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_periode->detailPeriode($id)->row();

		$data['status']		= $this->crud->getTable('ref_status')->result();

		$this->load->view('includes/main', $data);
	}

	public function update()
	{
		$param = 'id';
		$paramVal = $this->input->post('id');

		$data = array(
                'tahun_ajaran' => $this->input->post('tahun_ajaran'),
                'tahun' => $this->input->post('tahun'),
                'status_id' => $this->input->post('status')
            );

        $update = $this->crud->getUpdate($param, $paramVal, $this->table, $data);

        if ($update) {
			redirect('bendahara/periode');
		} else {
			
		}
	}

	public function delete()
	{
		$param = 'id';
		$paramVal = $this->uri->segment(4);
		$delete = $this->crud->getDelete($param, $paramVal, $this->table);

		if ($delete) {
			redirect('bendahara/periode');
		} else {

		}
	}

	public function periodeAktif()
	{
		$param = 'id';
		$paramVal = $this->input->post('id');

		$data = array(
                'status_id' => 1
            );

        $this->db->trans_start();
        $this->db->update($this->table, array('status_id' => 0));

		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
		} else {
			$this->db->trans_commit();
	        $update = $this->crud->getUpdate($param, $paramVal, $this->table, $data);

	        if ($update) {
				redirect($_SERVER['HTTP_REFERER']);
			}
		}        
	}
}