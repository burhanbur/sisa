<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function showGuru()
	{
		$this->db->select('t.*');
		$this->db->from('mst_guru as t');

		$query = $this->db->get();
		return $query;
	}
}
