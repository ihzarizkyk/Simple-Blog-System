<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_M extends CI_Model{

	// fungsi menampilkan data
	public function tampil_data()
	{
		return $this->db->get('blog_tb');
	}

	// fungsi input data
	public function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}

	// fungsi hapus (delete)
	public function delete($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// fungsi mengambil data berdasarkan id
	public function edit($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	// fungsi update
	public function updates($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}