<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
	var $table 				= 'mst_kelas';
	var $tran_kelas_siswa	= 'tran_kelas_siswa';
	var $judul 				= 'Master';
	var $sub_judul			= 'Kelas';

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
		$data['periode']	= $this->crud->getTable('ref_periode')->result();

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
                'jurusan_id' => $this->input->post('jurusan'),
                'tingkat' => $this->input->post('tingkat'),
                'periode_id' => $this->input->post('periode')
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

		// siswa
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

		$cekSiswa = $this->db->select('id')->from($this->tran_kelas_siswa)->where(array('kelas_id' => $paramVal))->get()->row();

		if (!$cekSiswa->id) {
			$delete = $this->crud->getDelete($param, $paramVal, $this->table);

			if ($delete) {
				redirect('bendahara/kelas');
			}
		} else {
			echo "<script>alert('Tidak dapat menghapus kelas, karena ada siswa terdaftar!');history.go(-1);</script>";
		}		
	}

	public function storeSiswaKelas()
	{
		$data = array(
                'siswa_id' => $this->input->post('nama'),
                'kelas_id' => $this->input->post('kelas'),
                'periode_id' => $this->input->post('periode')
            );

		// mengecek data siswa apakah telah terdaftar dikelas lain
		$cekSiswa = $this->db->select('id')->from($this->tran_kelas_siswa)->where(array('siswa_id' => $data['siswa_id'], 'periode_id' => $data['periode_id']))->get()->row();

		if(!$cekSiswa->id){
			$insert = $this->crud->getInsert($this->tran_kelas_siswa, $data);	
			// menghitung jumlah siswa dalam kelas
			$jumlahSiswa = $this->crud->getJumlahSiswa($data['kelas_id'], $data['periode_id'])->row();
			// mengupdate jumlah siswa setiap ada perubahan
			$updateJumlah = $this->db->where('id', $data['kelas_id'])->update($this->table, array('jumlah' => $jumlahSiswa->jumlah));
			
			if ($insert) {
				redirect($_SERVER['HTTP_REFERER']);
			}
		} else {
			echo "<script>alert('Siswa ini telah terdaftar dalam kelas!');history.go(-1);</script>";
		}
	}

	public function deleteSiswaKelas()
	{
		$param = 'id';
		$paramVal = $this->uri->segment(4);
		$delete = $this->crud->getDelete($param, $paramVal, $this->tran_kelas_siswa);

		// mendapatkan periode berdasarkan id_kelas_siswa
		$idPeriode = $this->db->select('periode_id')->from($this->tran_kelas_siswa)->where('id', $paramVal)->get()->row();
		// menghitung jumlah siswa dalam kelas
		$jumlahSiswa = $this->crud->getJumlahSiswa($idKelas, $idPeriode->periode_id)->row();
		// mengupdate jumlah siswa setiap ada perubahan
		$updateJumlah = $this->db->where('id', $idKelas)->update($this->table, array('jumlah' => $jumlahSiswa->jumlah));

		if ($delete) {
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
}
