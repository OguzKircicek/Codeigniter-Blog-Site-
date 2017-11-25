<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct ()
	{
		    parent::__construct();
		    $this->load->helper('url');
        $this->load->database();
        $this->load->library('session');
      

	}

	public function index()
	{
		$this->load->view('admin/login_form');

	}

  public function login_ol()
  {
    $email= $this->input->post("email");
    $sifre=$this->input->post("sifre");
    $this->load->model('Database_Model');

    $result= $this->Database_Model->login("users",$email,$sifre);

    if($result)
    {
    $sess_array=array(
      'id'=> $result[0]->id,
      'adi'=>$result[0]->adi,
      'email' =>$result[0]->email,
      'sifre' =>$result[0]->sifre,
      'yetki' =>$result[0]->yetki


    );
    $this->session->set_userdata("users",$sess_array);
    //$this->session->set_userdata('info',$sess_array);
    redirect(base_url().'admin/home');
    }
    else
    {
      $this->session->set_flashdata("mesaj","Hatalı Kullanıcı Adı Yada Şifre");
      redirect(base_url().'admin/login');
    }

  }

  public function logout ()
  {
    $this->session->unset_userdata("users");
    redirect(base_url().'admin/login');

  }
}
?>
