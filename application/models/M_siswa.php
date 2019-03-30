<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	public function showSiswa()
	{
		$this->db->select('t.*, rs.nama as status, ra.nama as agama');
		$this->db->from('mst_siswa as t');
		$this->db->join('ref_status as rs','t.status_id = rs.id','left');
		$this->db->join('ref_agama as ra','t.agama_id = ra.id','left');

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
}
