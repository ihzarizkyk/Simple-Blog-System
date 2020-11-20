<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Admin_M');
		$this->load->helper('url');
	}

	// untuk menampilkan data keselurahan
	public function index()
	{
		$data['blog_tb']  = $this->Admin_M->tampil_data()->result();
		$this->load->view('admin',$data);
	}

	// untuk redirect ke halaman input
	public function tambah()
	{
		$this->load->view('input');
	}

	// untuk membuat aksi input data
	public function aksi_tambah()
	{
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');

		$data = array(
			'judul'	=> $judul,
			'isi'	=> $isi
		);

		$this->Admin_M->input_data($data,"blog_tb");
		redirect('Admin');
	}

	// untuk menghapus data berdasarkan id
	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->Admin_M->delete($where,'blog_tb');
		redirect('Admin');
	}

	// untuk menampikan data yang hendak diupdate berdasarkan id
	public function ubah($id)
	{
		$where = array('id' => $id);
		$data['blog_tb'] = $this->Admin_M->edit($where,'blog_tb')->result();
		$this->load->view('edits',$data);
	}

	// untuk update
	public function update()
	{
		$id	= $this->input->post('id');
		$judul= $this->input->post('judul');
		$isi= $this->input->post('isi');

		$data = array(
			"judul" => $judul,
			"isi"	=> $isi
		);

		$where = array("id" => $id);
		$this->Admin_M->updates($where,$data,'blog_tb');
		redirect('Admin');
	}
}