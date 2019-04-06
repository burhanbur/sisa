<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_periode extends CI_Model {

	public function showPeriode()
	{
		$this->db->select('t.*, rs.nama as status');
		$this->db->from('ref_periode as t');
		$this->db->join('ref_status as rs', 't.status_id = rs.id', 'left');
		$this->db->order_by('t.tahun', 'ASC');
		$this->db->order_by('t.tahun_ajaran', 'ASC');

		$query = $this->db->get();
		return $query;
	}

	public function detailPeriode($id)
	{
		$this->db->select('t.*, rs.nama as status');
		$this->db->from('ref_periode as t');
		$this->db->join('ref_status as rs', 't.status_id = rs.id', 'left');
		$this->db->where('t.id', $id);

		$query = $this->db->get();
		return $query;
	}
}
