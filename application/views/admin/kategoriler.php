<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoriler extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		$this->load->helper('url');
    $this->load->database();
    $this->load->library('session');
    $this->load->model('Database_Model');
    if(!$this->session->userdata('users'))  //Login olup olmadığı sorgusu
      redirect(base_url().'admin/login');

	}


public function index()
{
  $transaction=$this->db->query("SELECT * FROM kategoriler" );
  $data['veri']=$transaction->result();
  $this->load->view('admin/kategoriler',$data);
}
public function kategori_ekle()
{
  $this->load->view('admin/kategori_ekle');
}
public function Kaddsave()
{

 $data=array
 (

 'k_adi'=>$this->input->post('kategori')
);
$this->load->database();
$this->load->model("Database_Model");
$ekle=$this->Database_Model->insert_data("kategoriler",$data);
$this->session->set_flashdata("sonuc","Başarılı Kayıt");

redirect(base_url().'admin/Kategoriler');
}
function kategorisil($id)
{
 $this->load->model("Database_Model");
 $delete=$this->Database_Model->kategorisil($id);

 $this->session->set_flashdata("sonuc","<h3>Kategori Silindi!</h3>");
 redirect(base_url()."admin/Kategoriler");

}

}
