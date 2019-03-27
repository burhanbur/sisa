<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model {

	public function showKelas()
	{
		$this->db->select('t.*, rj.nama as jurusan');
		$this->db->from('mst_kelas as t');
		$this->db->join('ref_jurusan as rj', 't.jurusan_id = rj.id', 'left');

		$query = $this->db->get();
		return $query;
	}

	public function detailKelas($id)
	{
		$this->db->select('t.*, rj.nama as jurusan');
		$this->db->from('mst_kelas as t');
		$this->db->join('ref_jurusan as rj', 't.jurusan_id = rj.id', 'left');
		$this->db->where('t.id', $id);

		$query = $this->db->get();
		return $query;
	}
}
