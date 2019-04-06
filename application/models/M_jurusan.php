<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jurusan extends CI_Model {

	public function showJurusan()
	{
		$this->db->select('t.*, rs.nama as status');
		$this->db->from('mst_jurusan as t');
		$this->db->join('ref_status as rs', 't.status_id = rs.id', 'left');
		$this->db->order_by('t.nama', 'ASC');

		$query = $this->db->get();
		return $query;
	}

	public function detailJurusan($id)
	{
		$this->db->select('t.*, rs.nama as status');
		$this->db->from('mst_jurusan as t');
		$this->db->join('ref_status as rs', 't.status_id = rs.id', 'left');
		$this->db->where('t.id', $id);

		$query = $this->db->get();
		return $query;
	}
}
