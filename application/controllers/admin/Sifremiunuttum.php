<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sifremiunuttum extends CI_Controller {
    public function __construct ()
	{
		    parent::__construct();
		    $this->load->helper('url');
        $this->load->database();
        $this->load->library('session');
        $this->load->model("Database_Model");

	}

	public function index()
	{
		$this->load->view('admin/sifremiunuttum');

	}
  public function yenile()
  {
  $transaction=$this->db->query("SELECT * FROM siteayarlari" );
  $ilet['veri']=$transaction->result();
  $email=$this->input->post('email');
  $this->load->model('Database_Model');
  $query=$this->Database_Model->sifre_getir("users",$email);
  $this->session->set_flashdata("bilgi","<h2>Şifreniz Mail Hesabınıza Gönderilmiştir.</h2>");
  if($query)
  {

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
  			$this->email->to($query[0]->email);
  			$this->email->subject("Mevcut Şifre");
  			$this->email->message($query[0]->sifre);
  			$send= $this->email->send();
  			if($send) {
  				echo "Email Başarılı";
          redirect(base_url().'admin/Login');
        }
  			else {
  				echo "Başarısız";
  				echo $this->email->print_debugger();
  			}
  		}
  		else {
  			$this->session->set_flashdata("hata","Hatalı Bilgi girdiniz...");
  			redirect(base_url().'admin/Sifremiunuttum/yenile');
  		}
  	}



 }
