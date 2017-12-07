



<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class arama extends CI_Controller {
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

    }

  public function arabul()
  {
       $aramak=$this->input->post('search');



               $transaction=$this->db->query("SELECT * FROM yazilar where yazi like '%$aramak%' OR baslik like  '%$aramak%'" );
               $arama['veri']=$transaction->result();
               $arama['veri'][0]->baslik = "Arama Sonuçları";
               $this->load->view('sonuc',$arama);




  }
}
