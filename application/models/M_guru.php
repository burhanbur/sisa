<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model {

	public function showGuru()
	{
		$this->db->select('t.*');
		$this->db->from('mst_guru as t');

		$query = $this->db->get();
		return $query;
	}
}
