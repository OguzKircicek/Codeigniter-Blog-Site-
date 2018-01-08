<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fotogaleri extends CI_Controller {
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

     {
      
       $transaction=$this->db->query("SELECT * FROM fotogaleri" );
       $data['veri']=$transaction->result();
       $data['veri'][0]->baslik = "Foto Galeri";
       $this->load->view('fotogaleri',$data);

     }
}
