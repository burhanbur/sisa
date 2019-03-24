<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function getLogin($data)
	{
		$this->db->select('t.*, rr.role as roles');
		$this->db->from('users as t');
		$this->db->join('ref_role as rr','t.role = rr.id','left');
		$this->db->where($data);

		$query = $this->db->get();
		return $query;
	}
}