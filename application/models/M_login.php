<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function getLogin($data)
	{
		$this->db->select('t.*, rr.nama as role');
		$this->db->from('users as t');
		$this->db->join('ref_role as rr','t.role_id = rr.id','left');
		$this->db->where($data);

		$query = $this->db->get();
		return $query;
	}

	public function showAkun()
	{
		$this->db->select('t.*, rr.nama as role');
		$this->db->from('users as t');
		$this->db->join('ref_role as rr','t.role_id = rr.id','left');

		$query = $this->db->get();
		return $query;
	}

	public function detailAkun($id)
	{
		$this->db->select('t.*, rr.nama as role');
		$this->db->from('users as t');
		$this->db->join('ref_role as rr','t.role_id = rr.id','left');
		$this->db->where('t.id', $id);

		$query = $this->db->get();
		return $query;
	}
}
