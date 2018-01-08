<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hakkimizda extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		$this->load->helper('url');
    $this->load->helper('benim_helper');
    $this->load->model('Database_Model');
    $this->load->database();
    $this->load->library('session');

	}
  public function index()

     { $id=1;

       $transaction=$this->db->query("SELECT * FROM hakkimda WHERE id=$id" );
       $data['veri']=$transaction->result();
       $data['veri'][0]->baslik = "Hakkımızda";

       $islem=$this->db->query("SELECT * FROM kategoriler");
       $data["kategori"]=$islem->result();
       $sorgu=$this->db->query("SELECT * FROM siteayarlari");
       $data["etiket"]=$sorgu->result();

       $this->load->view('hakkimizda',$data);


     }
}
