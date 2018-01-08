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

      $islem=$this->db->query("SELECT * FROM kategoriler" );
      $data['kategori']=$islem->result();
      $data['veri'][0]->baslik = "İletişim";
      $sorgu=$this->db->query("SELECT * FROM iletisim");
      $data["veri"]=$sorgu->result();
      $this->load->view('iletisim',$data);


}


      public function mesajgonder()
     {
       $transaction=$this->db->query("SELECT * FROM siteayarlari" );
       $ilet['veri']=$transaction->result();

       $data=array(

       'gonderenadi'=>$this->input->post('ad'),
       'mesajmail'=>$this->input->post('email'),
       'mesajaciklama'=>$this->input->post('mesaj'),
       'mesajtarihi'=>date('d-m-y')
     );
       $email=$this->input->post('email');
       $this->Database_Model->mesajgonder("mesajlar",$data);
        $this->session->set_flashdata("bilgi","<h2>Mesajınız Tarafımıza İletilmiştir.Teşekkürler.</h2>");

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
            			$this->email->to($email);
            			$this->email->subject($ilet['veri'][0]->subject);
            			$this->email->message($ilet['veri'][0]->message);
            			$send= $this->email->send();
            			if($send) {
            				echo "Email Hesabınıza Gerekli Detaylar İletilmiştir.";
                          redirect(base_url().'Iletisim/iletisim');
                        }
            			else {
            				echo "Başarısız";
            				echo $this->email->print_debugger();
                    redirect(base_url().'Iletisim/iletisim');
            			}
            		}
            		else {
            			$this->session->set_flashdata("hata","Hatalı Bilgi girdiniz...");
                }



   }








   }
