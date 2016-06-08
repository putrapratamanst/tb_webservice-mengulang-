<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {


	function __construct(){
		parent::__construct();
		// Load model 
		$this->load->model('m_api');
		// Load helper url
		$this->load->helper('url');
	}

	public function index(){
		// if button simpan clicked
		if($this->input->post('simpan')){
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');
			$penulis = $this->input->post('penulis');

			$input = array(
				'judul'	=> $judul,
				'isi'	=> $isi,
				'penulis'	=> $penulis
			);

			// Query model save
			$this->m_api->simpan($input);
		}

		// Query from model m_api
		$piew['dataBerita'] = $this->m_api->ambilSemua();

		// Load view and inject variable piew[]
		$this->load->view('list',$piew);
	}

	public function detail(){
		// get id from url
		$id = $this->uri->segment(3);

		if(!empty($id)){
			$piew['dataBerita'] = $this->m_api->ambilSatu(array('id'=>$id));

			// Load view and inject variable piew[]
			$this->load->view('detail',$piew);
		}
	}

	public function ubah(){
		// get id from url
		$id = $this->uri->segment(3);

		// if button ubah clicked
		if($this->input->post('ubah')){
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');
			$penulis = $this->input->post('penulis');

			$input = array(
				'judul'	=> $judul,
				'isi'	=> $isi,
				'penulis'	=> $penulis
			);

			$idna['id'] = $id;

			// Query model update
			$ubah = $this->m_api->ubah($input,$idna);
			if($ubah){
				// if ubah true, then redirect to page web
				redirect(site_url('web'));
			}
		}

		if(!empty($id)){
			$piew['dataBerita'] = $this->m_api->ambilSatu(array('id'=>$id));

			// Load view and inject variable piew[]
			$this->load->view('form',$piew);
		}
	}

	public function hapus(){
		// get id from url
		$id = $this->uri->segment(3);
		if(!empty($id)){
			// Query delete
			$hapus = $this->m_api->hapus(array('id'=>$id));

			if($hapus){
				// if hapus true, then redirect to page web
				redirect(site_url('web'));
			}
		}
	}
	
}