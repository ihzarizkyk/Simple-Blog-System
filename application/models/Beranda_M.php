<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda_M extends CI_Model{

	// tampilkan semua data
	public function all()
	{
		$result = array();
		$this->db->select("*");
		$this->db->from("blog_tb");
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function get_article($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
}