<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	public function showSiswa()
	{
		$this->db->select('t.*, mk.nama as kelas, rs.nama as status');
		$this->db->from('mst_siswa as t');
		$this->db->join('mst_kelas as mk','t.kelas_id = mk.id','left');
		$this->db->join('ref_status as rs','t.status_id = rs.id','left');

		$query = $this->db->get();
		return $query;
	}
}
