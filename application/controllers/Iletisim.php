<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iletisim extends CI_Controller {
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
 public function iletisim()
  {   $transaction=$this->db->query("SELECT * FROM mesajlar" );
      $data['veri']=$transaction->result();


      $data['veri'][0]->baslik = "İletişim";
      $this->load->view('iletisim',$data);
  }



      public function mesajgonder()
     {
       $data=array(

       'gonderenadi'=>$this->input->post('ad'),
       'mesajmail'=>$this->input->post('email'),
       'mesajaciklama'=>$this->input->post('mesaj'),
       'mesajtarihi'=>date('d-m-y')

     );

     $this->Database_Model->mesajgonder("mesajlar",$data);

     $this->session->set_flashdata("bilgi","<h2>Mesajınız Tarafımıza İletilmiştir.Teşekkürler.</h2>");
     redirect(base_url()."iletisim");// oraya tekrara gelsin diye yaptım


   }
}
