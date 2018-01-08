



<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoriler extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		$this->load->helper('url');
    $this->load->helper('benim_helper');
    $this->load->model('Database_Model');
    $this->load->database();
    $this->load->library('session');
    $this->load->library('pagination');

	}
  public function index()

    {
      $arama['veri'][0]->baslik = "Kategori";
      $transaction=$this->db->query("SELECT * FROM kategoriler" );
      $arama['a']=$transaction->result();
     $transaction=$this->db->query("SELECT * FROM siteayarlari" );
     $arama['etiket']=$transaction->result();
     $transaction=$this->db->query("SELECT * FROM slider" );
     $arama['slider']=$transaction->result();
     $transaction=$this->db->query("SELECT * FROM yazilar" );
     $arama['veriler']=$transaction->result();
     $veri=$this->Database_Model->yazisayisi(); //pagination
     $config= array( //pagination işlemleri yapılıyor
                 "base_url"=>base_url()."Home",
                 "per_page"=>4,
                 "total_rows"=>$veri

 // pagination işlemleri configde yapılır.
               );
         $config['full_tag_open'] = '<ul class="pagination">';
         $config['full_tag_close'] = '</ul>';
         $config['first_link'] = false;
         $config['last_link'] = false;
         $config['first_tag_open'] = '<li>';
         $config['first_tag_close'] = '</li>';
         $config['prev_link'] = '&laquo';
         $config['prev_tag_open'] = '<li class="prev"> ';  //buradaki ayarlar sayfalama linki
         $config['prev_tag_close'] = '</li>';             //görünüm ayarları
         $config['next_link'] = '&raquo';
         $config['next_tag_open'] = '<li>';
         $config['next_tag_close'] = '</li>';
         $config['last_tag_open'] = '<li>';
         $config['last_tag_close'] = '</li>';
         $config['cur_tag_open'] = '<li class="active"><a href="#">';
         $config['cur_tag_close'] = '</a></li>';
         $config['num_tag_open'] = '<li>';
         $config['num_tag_close'] = '</li>';

     $this->pagination->initialize($config);
     $arama["linkler"]=$this->pagination->create_links();
     $arama['sayfalama']=$this->Database_Model->yazicek($config["per_page"],$this->uri->segment(2,0));




    }
    public function listele($id)
    {
      $query=$this->db->query("SELECT * FROM kategoriler");
      $arama["a"]=$query->result();

      $this->db->select("kategoriler.*,yazilar.Id as y ,yazilar.*");
      $this->db->from('yazilar');
      $this->db->join('kategoriler', 'kategoriler.k_adi = yazilar.kategori', 'inner');
      $this->db->where('kategoriler.Id', $id);
      $query=$this->db->get();
  	  $arama["veriler"]=$query->result();
      $transaction=$this->db->query("SELECT * FROM slider" );
      $arama['slider']=$transaction->result();







      $this->load->view("kategoriler",$arama);
    }

}
