<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	public function showSiswa()
	{
		$this->db->select('t.*, rs.nama as status, ra.nama as agama');
		$this->db->from('mst_siswa as t');
		$this->db->join('ref_status as rs','t.status_id = rs.id','left');
		$this->db->join('ref_agama as ra','t.agama_id = ra.id','left');
		$this->db->order_by('t.nomor_induk', 'ASC');

		$query = $this->db->get();
		return $query;
	}

	public function detailSiswa($nis)
	{
		$this->db->select('t.*, rs.nama as status, ra.nama as agama');
		$this->db->from('mst_siswa as t');
		$this->db->join('ref_status as rs','t.status_id = rs.id','left');
		$this->db->join('ref_agama as ra','t.agama_id = ra.id','left');
		$this->db->where('nomor_induk', $nis);

		$query = $this->db->get();
		return $query;
	}

	public function akademikSiswa($id)
	{
		$this->db->select('t.id as id_kelas_siswa, t.kelas_id, ms.*, mk.nama as kelas, mj.nama as jurusan, rp.tahun_ajaran');
		$this->db->from('tran_kelas_siswa as t');
		$this->db->join('mst_siswa as ms', 'ms.id = t.siswa_id', 'left');
		$this->db->join('mst_kelas as mk', 'mk.id = t.kelas_id', 'left');
		$this->db->join('mst_jurusan as mj', 'mj.id = mk.jurusan_id', 'left');
		$this->db->join('ref_periode as rp', 'rp.id = t.periode_id', 'left');
		$this->db->where('t.siswa_id', $id);
		$this->db->order_by('mk.nama', 'ASC');

		$query = $this->db->get();
		return $query;
	}
}
