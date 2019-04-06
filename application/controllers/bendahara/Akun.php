<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {
	var $table 		= 'users';
	var $judul 		= 'Master';
	var $sub_judul	= 'Akun';

	public function __construct() {
		parent::__construct();
		$this->validation->validate();
		$this->load->model('m_login');
		if ($this->session->userdata('role')!=2) {
			echo "<script>alert('Anda tidak berhak mengakses halaman ini!');history.go(-1);</script>";
		}
		$this->load->helper('text');
	}

	public function index()
	{
		$data['content']	= 'contents/bendahara/akun/show';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_login->showAkun();

		$data['roles']		= $this->crud->getTable('ref_role')->result();

		$this->load->view('includes/main', $data);
	}

	public function create()
	{
		$data['content']	= 'contents/bendahara/akun/create';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');

		$data['roles']		= $this->crud->getTable('ref_role')->result();

		$this->load->view('includes/main', $data);
	}

	public function store()
	{
		$data = array(
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'role_id' => $this->input->post('role')
            );

		$insert = $this->crud->getInsert($this->table, $data);

		if ($insert) {
			redirect('bendahara/akun');
		}
	}

	public function detail()
	{
		$id = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/akun/detail';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_login->detailAkun($id);

		$this->load->view('includes/main', $data);
	}

	public function edit()
	{
		$id = $this->uri->segment(4);

		$data['content']	= 'contents/bendahara/akun/edit';
		$data['judul']		= $this->judul;
		$data['sub_judul']	= $this->sub_judul;
		$data['user']		= $this->session->userdata('username');
		$data['role']		= $this->session->userdata('role');
		$data['data']		= $this->m_login->detailAkun($id)->row();

		$data['roles']		= $this->crud->getTable('ref_role')->result();

		$this->load->view('includes/main', $data);
	}

	public function update()
	{
		$param = 'id';
		$paramVal = $this->input->post('id');

		$data = array(
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'role_id' => $this->input->post('role')
            );

        $update = $this->crud->getUpdate($param, $paramVal, $this->table, $data);

        if ($update) {
			redirect('bendahara/akun');
		} else {
			
		}
	}

	public function delete()
	{
		$param = 'id';
		$paramVal = $this->uri->segment(4);
		$delete = $this->crud->getDelete($param, $paramVal, $this->table);

		if ($delete) {
			redirect('bendahara/akun');
		} else {

		}
	}
}
