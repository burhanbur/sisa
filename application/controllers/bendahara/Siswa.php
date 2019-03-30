<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	var $table = 'mst_siswa';

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

		// dropdown data
		$data['agama']		= $this->crud->getTable('ref_agama');
		$data['status']		= $this->crud->getTable('ref_status');
		$data['jurusan']	= $this->crud->getTable('ref_jurusan');
		$data['kelas']		= $this->crud->getTable('mst_kelas');

		// chained
		// $data['jurusan_selected'] = '';
		// $data['kelas_selected'] = '';

		$this->load->view('includes/main', $data);
	}

	public function create()
	{
		$data['content']	= 'contents/bendahara/siswa/create';
		$data['judul']		= 'Master';
		$data['sub_judul']	= 'Siswa';
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');

		// dropdown data
		$data['agama']		= $this->crud->getTable('ref_agama');
		$data['status']		= $this->crud->getTable('ref_status');
		$data['jurusan']	= $this->crud->getTable('ref_jurusan');
		$data['kelas']		= $this->crud->getTable('mst_kelas');

		// chained
		// $data['jurusan_selected'] = '';
		// $data['kelas_selected'] = '';

		$this->load->view('includes/main', $data);
	}

	public function store()
	{
		$data = array(
                'nomor_induk' => $this->input->post('nis'),
                'nomor_induk_nasional' => $this->input->post('nisn'),
                'nama' => $this->input->post('nama'),
                // 'kelas_id' => $this->input->post('kelas'),
                // 'jurusan_id' => $this->input->post('jurusan'),
                'alamat' => $this->input->post('alamat'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama_id' => $this->input->post('agama'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
                'asal_sekolah' => $this->input->post('asal_sekolah'),
                'tahun_masuk' => $this->input->post('tahun_masuk'),
                'status_id' => $this->input->post('status'),
                'nama_ayah' => $this->input->post('nama_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'foto' => $this->input->post('foto')
            );

		$insert = $this->crud->getInsert($this->table, $data);

		if ($insert) {
			redirect('bendahara/siswa');
		}
	}

	public function detail()
	{
		$nis = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/siswa/detail';
		$data['judul']		= 'Master';
		$data['sub_judul']	= 'Siswa';
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_siswa->detailSiswa($nis);

		$this->load->view('includes/main', $data);
	}

	public function edit()
	{
		$nis = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/siswa/edit';
		$data['judul']		= 'Master';
		$data['sub_judul']	= 'Siswa';
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_siswa->detailSiswa($nis)->row();

		// dropdown data
		$data['agama']		= $this->crud->getTable('ref_agama');
		$data['status']		= $this->crud->getTable('ref_status');
		$data['jurusan']	= $this->crud->getTable('ref_jurusan');
		$data['kelas']		= $this->crud->getTable('mst_kelas');

		// $data['jurusan_selected'] = '';
		// $data['kelas_selected'] = '';

		$this->load->view('includes/main', $data);
	}

	public function update()
	{
		$param = 'id';
		$paramVal = $this->input->post('id');

		$data = array(
                'nomor_induk' => $this->input->post('nis'),
                'nomor_induk_nasional' => $this->input->post('nisn'),
                'nama' => $this->input->post('nama'),
                // 'kelas_id' => $this->input->post('kelas'),
                // 'jurusan_id' => $this->input->post('jurusan'),
                'alamat' => $this->input->post('alamat'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama_id' => $this->input->post('agama'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
                'asal_sekolah' => $this->input->post('asal_sekolah'),
                'tahun_masuk' => $this->input->post('tahun_masuk'),
                'status_id' => $this->input->post('status'),
                'nama_ayah' => $this->input->post('nama_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'foto' => $this->input->post('foto')
            );

        $update = $this->crud->getUpdate($param, $paramVal, $this->table, $data);

        if ($update) {
			redirect('bendahara/siswa');
		} else {

		}
	}

	public function delete()
	{
		$param = 'id';
		$paramVal = $this->uri->segment(4);
		$delete = $this->crud->getDelete($param, $paramVal, $this->table);

		if ($delete) {
			redirect('bendahara/siswa');
		} else {

		}
	}
}
