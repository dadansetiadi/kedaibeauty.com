<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	function __construct()
        {
            parent::__construct();
            $this->load->model('produk_model');
            //$this->load->model('user_model');
        }

	public function index()
	{
		$data['sql1'] = $this->produk_model->get_produk();
    	//$this->load->view('user_view',$data);
    	$this->load->view('backend/header');
		$this->load->view('backend/menu');
		$this->load->view('backend/body',$data);
		$this->load->view('backend/footer');
		
	}

	public function show()
    {
    	$data['sql1'] = $this->produk_model->get_produk();
    	//$this->load->view('user_view',$data);
    	$this->load->view('backend/header');
		$this->load->view('backend/menu');
		$this->load->view('backend/body',$data);
		$this->load->view('backend/footer');
    }

    public function add()
    {

		$data['op'] = 'tambah';
    	$this->load->view('backend/header');
		$this->load->view('backend/menu');
		$this->load->view('produk/insert_produk',$data);
		$this->load->view('backend/footer');
    }

    public function simpan()
    {
    	$op = $this->input->post('op');
    	$id = $this->input->post('id');
		$nama_produk = $this->input->post('nama_produk');
		$merk = $this->input->post('merk');
		$kode_produk = $this->input->post('kode_produk');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$discount = $this->input->post('discount');
		$harga_discount = $this->input->post('harga_discount');
		$gambar1 = $this->input->post('gambar1');
		$gambar2 = $this->input->post('gambar2');
		$gambar3 = $this->input->post('gambar3');
    	$status = $this->input->post('status');
    	$data = array(
    		'nama_produk' => $nama_produk,
    		'merk' => $merk,
    		'kode_produk' => $kode_produk,
    		'deskripsi' => $deskripsi,
    		'harga' => $harga,
    		'discount' => $discount,
    		'harga_discount' => $harga_discount,
    		'gambar1' => $gambar1,
    		'gambar2' => $gambar2,
    		'gambar3' => $gambar3,
    		'status' => $status
    		);
    	if ($op=="tambah") {
    		$this->produk_model->simpan($data);
    	}
    	else{
    		$this->produk_model->update($id,$data);
    	}
    	
    	redirect('produk/show');
    }

	
}
