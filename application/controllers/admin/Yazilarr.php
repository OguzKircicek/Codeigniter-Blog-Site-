<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yazilarr extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
    $this->load->library("session");
    $this->load->helper('benim_helper');
    $this->load->library('pagination');
    $this->load->model('Database_Model');
    if(!$this->session->userdata('users'))  //Login olup olmadığı sorgusu
      redirect(base_url().'admin/login');

	}

	public function index()
	{
    $this->db->select("*");
    $this->db->from("yazilar");
    $this->db->where("onay",1);
    $this->db->order_by("tarih", "desc");
    $query=$this->db->get();
		$data["veri"]=$query->result();

    $veri=$this->Database_Model->yazisayisi(); //pagination
    $config= array( //pagination işlemleri yapılıyor
                "base_url"=>base_url()."admin/Yazilarr",
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
    $data["linkler"]=$this->pagination->create_links();
    $data['veriler']=$this->Database_Model->yazicek($config["per_page"],$this->uri->segment(2,0));




		$this->load->view('admin/a_header');
		$this->load->view('admin/a_sidebar');
		$this->load->view('admin/a_yazilar_listesi',$data);
		$this->load->view('admin/a_footer');



	}


   function delete($id)
  {
    $this->db->query("DELETE FROM yazilar WHERE id=$id ");
    $this->session->set_flashdata("sonuc","Successfully Deleted");
    redirect(base_url()."admin/a_yazilar_listesi");

  }
  public function edit($id)

  {

   $transaction=$this->db->query("SELECT * FROM yazilar WHERE id=$id");
   $data["veri"]=$transaction->result();
   $transaction=$this->db->query("SELECT * FROM kategoriler");
   $data["veriler"]=$transaction->result();
   $this->load->view("admin/a_yazilar_guncelle",$data);

  }

  public function UpdateAdd($id)
  {
   $data=array
   (
     'adi'=>$this->input->post('adi'),
     'baslik'=>$this->input->post('baslik'),
     'yazi'=>$this->input->post('yazi'),
     'mail'=>$this->input->post('email'),
     'kategori'=>$this->input->post('kategori'),
     'keywords'=>$this->input->post('keywords'),
     'tarih'=>date("y-m-d")
   );
  $this->session->set_flashdata("sonuc","Successfully User Updated");
  $this->load->model('Database_Model');
  $this->Database_Model->update_veri("yazilar",$data,$id);
  redirect(base_url()."admin/Yazilarr");

  }

  public function ekle()
  {
   $transaction=$this->db->query("SELECT * FROM kategoriler");
   $data["veri"]=$transaction->result();
   $this->load->view("admin/a_yazilar_ekle",$data);
  }
  public function onay()
  {
    $query=$this->db->query("SELECT * FROM yazilar where onay=0");
    $data["onay"]=$query->result();

     $this->load->view('admin/onay',$data);

  }

  public function Addsave()
  {
   $data=array
   (
   'adi'=>$this->input->post('adi'),
   'baslik'=>$this->input->post('baslik'),
    'mail'=>$this->input->post('mail'),
   'yazi'=>$this->input->post('yazi'),
   'kategori'=>$this->input->post('kategori'),
   'keywords'=>$this->input->post('keywords'),

   'tarih'=>date("y-m-d")
   );
  $this->session->set_flashdata("sonuc","Successfully Saved");
  $this->Database_Model->insert_data("yazilar",$data);
  //$this->db->insert("users",$data);
  redirect(base_url().'admin/Yazilarr');
  }

  public function preview($id)
  {
    $islem=$this->db->query("SELECT * FROM fotogaleri where yazi_id=$id");
    $data['foto']=$islem->result();

   //  $id=$this->session->admin_session["id"];
   $transaction=$this->db->query("SELECT * FROM yazilar WHERE id=".$id);
   $data["veri"]=$transaction->result();
   $this->load->view("admin/a_yazi_goster",$data);

  }
  public function blog_sil($id){
      $this->db->query("DELETE FROM yazilar WHERE Id=".$id);
      redirect(base_url().'admin/Yazilarr');
  }


  	public function onayy_ret($id)
  	{
  	$onay=2;
  	$data=array('onay'=>$onay);
  	$this->load->model('Database_Model');
  	$this->Database_Model->onayla("yazilar",$data,$id);
    	redirect(base_url().'admin/Yazi');
  	}
    public function onayyon($id)
  	{
      $transaction=$this->db->query("SELECT * FROM siteayarlari" );
      $ilet['veri']=$transaction->result();
    $islem=$this->db->query("SELECT * FROM yazilar where Id=$id");
    $mailgonder['mail']=$islem->result();
  	$onay=1;
  	$data=array('onay'=>$onay);
  	$this->load->model('Database_Model');
  	$this->Database_Model->onayla("yazilar",$data,$id);



    if(1) {
       $config=array(
      "protocol"=>"smtp",
     "smtp_host"=>$ilet['veri'][0]->smtphost,
      "smtp_port"=>$ilet['veri'][0]->smtpport,
      "smtp_user"=>$ilet['veri'][0]->mail,
      "smtp_pass"=>$ilet['veri'][0]->sifre, // şifreniz olacak
      "starttls"=>true,
      "charset"=>"utf-8",
      "mailtype"=>"html",
      "wordwrap"=>true,
      "newline"=>"\r\n"
               );
               $this->load->library("email",$config);
               $this->email->from($ilet['veri'][0]->mail,$ilet['veri'][0]->mail);
               $this->email->to($mailgonder['mail'][0]->mail);
               $this->email->subject("Blog Yayınlama");
               $this->email->message("Blogunuz Onaylanmıştır.Sayfanızdan Görüntülüyebilirsiniz");
               $send= $this->email->send();

             }
             else {
               $this->session->set_flashdata("hata","Hatalı Bilgi girdiniz...");
             }

	redirect(base_url().'admin/Yazi');
  	}





}
?>
