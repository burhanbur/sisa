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
}
