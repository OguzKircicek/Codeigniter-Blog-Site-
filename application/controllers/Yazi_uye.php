<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yazi_uye extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
    $this->load->library("session");
    $this->load->helper('benim_helper');
    $this->load->library('pagination');
    $this->load->model('Database_Model');

	}

	public function index()
	{
    $ad=$this->session->users['adi'];
    $sorgu=$this->db->query("SELECT * from yazilar where adi='$ad' and onay=1" );
    $kaynak["yazi"]=$sorgu->result();


   $query=$this->db->query("SELECT * FROM siteayarlari limit 1 ");
   $kaynak['etiket']=$query->result();

   $transaction=$this->db->query("SELECT * FROM slider" );
   $kaynak['slider']=$transaction->result();


		$this->load->view('_header',$kaynak);

		$this->load->view('blog_listele');
		$this->load->view('_footer');



	}


   function delete($id)
  {
    $this->db->query("DELETE FROM yazilar WHERE id=$id ");
    $this->session->set_flashdata("sonuc","Successfully Deleted");
    redirect(base_url()."blog_listele");

  }
  public function edit($id)

  {

   $transaction=$this->db->query("SELECT * FROM yazilar WHERE id=$id");
   $data["veri"]=$transaction->result();
   $this->load->view("blog_guncelle",$data);

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
  redirect(base_url()."Yazi_uye");

  }

  public function ekle()
  {

   $transaction=$this->db->query("SELECT * FROM kategoriler");
   $data["kat"]=$transaction->result();

   $transaction=$this->db->query("SELECT * FROM slider" );
   $data['slider']=$transaction->result();
   $query=$this->db->query("SELECT * FROM siteayarlari limit 1 ");
   $data['etiket']=$query->result();
   $this->load->view('_header',$data);

   $this->load->view("blog_ekle");


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
  redirect(base_url().'Yazi_uye');
  }

  public function preview($id)
  {
    $query=$this->db->query("SELECT * FROM siteayarlari limit 1 ");
    $kaynak['etiket']=$query->result();

    $transaction=$this->db->query("SELECT * FROM slider" );
    $kaynak['slider']=$transaction->result();




    $islem=$this->db->query("SELECT * FROM fotogaleri where yazi_id=$id");
    $data['foto']=$islem->result();

   //  $id=$this->session->admin_session["id"];
   $transaction=$this->db->query("SELECT * FROM yazilar WHERE id=".$id);
   $data["veri"]=$transaction->result();
   $this->load->view('_header',$kaynak);

   $this->load->view("blog_goster",$data);

  }
  public function blog_sil($id){
      $this->db->query("DELETE FROM yazilar WHERE Id=".$id);
      redirect(base_url().'Yazi_uye');
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
