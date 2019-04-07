<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Model {

	public function getData($param, $paramVal, $table){
		$this->db->where($param, $paramVal);
		$result = $this->db->get($table);
		return $result;
	}

	public function getInsert($table, $data){
		$insert = $this->db->insert($table, $data);
		return $insert;
	}

	public function getUpdate($param, $paramVal, $table, $data)
	{
		$update = $this->db->where($param, $paramVal)->update($table,$data);
		return $update;
	}
	public function getDelete($param, $paramVal, $table){
		$delete = $this->db->where($param, $paramVal)->delete($table);
		return $delete;
	}

	public function getTable($table){
		$data = $this->db->select('*')->from($table)->order_by('id', 'ASC')->get();
		return $data;
	}

	public function count($table, $param = NULL, $paramVal = NULL)
	{
		if (!$param && !$paramVal) {
			$sql = "SELECT COUNT(id) AS jumlah FROM '$table'";
		} else {
			$sql = "SELECT COUNT(id) AS jumlah FROM $table WHERE $param = '$paramVal'";
		}

		$query = $this->db->query($sql)->row()->jumlah;
		return $query;
	}

	public function getJumlahBiayaKategori($periode_id, $ref_anggaran)
	{
		$sql = "SELECT SUM(biaya) AS biaya FROM mst_anggaran_masuk WHERE periode_id = '$periode_id' AND ref_anggaran = '$ref_anggaran'";

		$query = $this->db->query($sql);
		return $query;
	}

	public function getJumlahTotalBiaya($periode_id)
	{
		$sql = "SELECT SUM(biaya) AS biaya FROM mst_anggaran_masuk WHERE periode_id = '$periode_id'";

		$query = $this->db->query($sql);
		return $query;		
	}

	public function getJumlahSiswa($kelas_id, $periode_id)
	{
		$sql = "SELECT COUNT(id) AS jumlah FROM tran_kelas_siswa WHERE kelas_id = '$kelas_id' AND periode_id = '$periode_id'";

		$query = $this->db->query($sql);
		return $query;
	}
}
