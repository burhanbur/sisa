<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model {

	public function showKelas()
	{
		$this->db->select('t.*, mj.nama as jurusan');
		$this->db->from('mst_kelas as t');
		$this->db->join('mst_jurusan as mj', 't.jurusan_id = mj.id', 'left');
		$this->db->order_by('t.jurusan_id', 'ASC');
		$this->db->order_by('t.nama', 'ASC');

		$query = $this->db->get();
		return $query;
	}

	public function detailKelas($id)
	{
		$this->db->select('t.*, mj.nama as jurusan');
		$this->db->from('mst_kelas as t');
		$this->db->join('mst_jurusan as mj', 't.jurusan_id = mj.id', 'left');
		$this->db->where('t.id', $id);

		$query = $this->db->get();
		return $query;
	}

	public function siswaKelas($id)
	{
		$this->db->select('t.id as id_kelas_siswa, mk.*, ms.nomor_induk, ms.nama as siswa, rp.tahun_ajaran');
		$this->db->from('tran_kelas_siswa as t');
		$this->db->join('mst_kelas as mk', 'mk.id = t.kelas_id', 'left');
		$this->db->join('tran_kelas_siswa as tks', 't.id = tks.kelas_id', 'left');
		$this->db->join('mst_siswa as ms', 'ms.id = t.siswa_id', 'left');
		$this->db->join('ref_periode as rp', 'rp.id = t.periode_id', 'left');
		$this->db->where('mk.id', $id);
		$this->db->where('rp.status_id', 1);

		$query = $this->db->get();
		return $query;
	}
}
