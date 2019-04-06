<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
	var $table 		= 'mst_kelas';
	var $tran_kelas	= 'tran_kelas_siswa';
	var $judul 		= 'Master';
	var $sub_judul	= 'Kelas';

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
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_kelas->showKelas();

		$data['jurusan']	= $this->crud->getTable('mst_jurusan')->result();

		$this->load->view('includes/main', $data);
	}

	public function create()
	{
		$data['content']	= 'contents/bendahara/kelas/create';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');

		$data['jurusan']	= $this->crud->getTable('mst_jurusan')->result();

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
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_kelas->detailKelas($id);

		$data['siswa']		= $this->m_kelas->siswaKelas($id);

		$data['siswa2']		= $this->crud->getTable('mst_siswa')->result();
		$data['periode']	= $this->crud->getTable('ref_periode')->result();
		$data['kelas']		= $this->crud->getTable('mst_kelas')->result();
		$data['jurusan']	= $this->crud->getTable('mst_jurusan')->result();

		$this->load->view('includes/main', $data);
	}

	public function edit()
	{
		$id = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/kelas/edit';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_kelas->detailkelas($id)->row();

		$data['jurusan']	= $this->crud->getTable('mst_jurusan')->result();

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

	public function storeSiswa()
	{
		$data = array(
                'siswa_id' => $this->input->post('nama'),
                'kelas_id' => $this->input->post('kelas'),
                'periode_id' => $this->input->post('periode')
            );

		$insert = $this->crud->getInsert($this->tran_kelas, $data);

		$idKelas = $this->db->select('id')->from($this->table)->where('id', $data['kelas_id'])->get()->row();
		
		if ($insert) {
			redirect('bendahara/kelas/detail/'.$idKelas->id);
		}
	}

	public function deleteSiswaKelas()
	{
		$param = 'id';
		$paramVal = $this->uri->segment(4);
		$delete = $this->crud->getDelete($param, $paramVal, $this->tran_kelas);

		if ($delete) {
			redirect('bendahara/kelas/detail/'.$paramVal);
		} else {
			
		}
	}
}
