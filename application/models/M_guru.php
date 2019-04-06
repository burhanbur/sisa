<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model {

	public function showGuru()
	{
		$this->db->select('t.*, rs.nama as status');
		$this->db->from('mst_guru as t');
		$this->db->join('ref_status as rs', 't.status_id = rs.id', 'left');
		$this->db->order_by('t.nip', 'ASC');

		$query = $this->db->get();
		return $query;
	}

	public function detailGuru($nip)
	{
		$this->db->select('t.*, rs.nama as status');
		$this->db->from('mst_guru as t');
		$this->db->join('ref_status as rs', 't.status_id = rs.id', 'left');
		$this->db->where('t.nip', $nip);

		$query = $this->db->get();
		return $query;
	}
}
