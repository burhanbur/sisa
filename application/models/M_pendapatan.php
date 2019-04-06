<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pendapatan extends CI_Model {

	public function showPendapatan()
	{
		$this->db->select('t.*, ram.kode, ram.nama as anggaran');
		$this->db->from('mst_anggaran_masuk as t');
		$this->db->join('ref_anggaran_masuk as ram', 't.ref_anggaran = ram.id', 'left');
		$this->db->order_by('t.ref_anggaran', 'ASC');
		$this->db->order_by('t.nama', 'ASC');

		$query = $this->db->get();
		return $query;
	}

	public function detailPendapatan($id)
	{
		$this->db->select('t.*, ram.kode, ram.nama as anggaran');
		$this->db->from('mst_anggaran_masuk as t');
		$this->db->join('ref_anggaran_masuk as ram', 't.ref_anggaran = ram.id', 'left');

		$query = $this->db->get();
		return $query;
	}
}
