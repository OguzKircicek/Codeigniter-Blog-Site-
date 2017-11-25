<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
//  $this->Database_Model->update_data("users",$data,$id);
	public function index()
	   {

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
    $kaynak["linkler"]=$this->pagination->create_links();
    $kaynak['veri']=$this->Database_Model->yazicek($config["per_page"],$this->uri->segment(2,0));
    $this->load->view('_anasayfa',$kaynak);
	   }


  public function yazilar($id) //Yazılar anasayfaya çekilip açılıyor.
     {
    $transaction=$this->db->query("SELECT * FROM yazilar WHERE id=$id" );
    $data['veri']=$transaction->result();
    $this->load->view('yazilar',$data);
     }



    public function iletisim() //iletişim sayfası controllur fonksiyonu
     {
        $this->load->view("iletisim");

     }
    public function mesajgonder()
    {
      $data=array(

      'gonderenadi'=>$this->input->post('ad'),
      'mesajmail'=>$this->input->post('email'),
      'mesajaciklama'=>$this->input->post('mesaj'),
      'mesajtarihi'=>date('d-m-y')

    );
//
   $this->Database_Model->mesajgonder("mesajlar",$data);

  $this->session->set_flashdata("bilgi","<h2>Mesajınız Tarafımıza İletilmiştir.Teşekkürler.</h2>");
  redirect("home/iletisim");// oraya tekrara gelsin diye yaptım


  }


 }
