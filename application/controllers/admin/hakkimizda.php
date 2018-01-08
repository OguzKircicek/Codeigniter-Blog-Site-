<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hakkimizda extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		$this->load->helper('url');
    $this->load->library('session');
    $this->load->database();

    $this->load->model('Database_Model');



	}

	public function index()
	{
    $this->load->view('admin/a_header');
		$this->load->view('admin/a_sidebar');



    $query=$this->db->query("SELECT * FROM hakkimda limit 1 ");
    $data["veri"]=$query->result();
    $this->load->view('admin/hakkimizda',$data);
    $this->load->view('admin/a_footer');
	}
  public function guncelle()
  {
    $id=1;
    $data=array
    (

    'icerik'=>$this->input->post('aciklama')

    );
   $this->session->set_flashdata("sonuc","Successfully User Updated");
   $this->Database_Model->update_data("hakkimda",$data,$id);
   redirect(base_url().'admin/Hakkimizda');
  }
}
