<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hakkimizda extends CI_Controller {
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

     { $id=1;
       $transaction=$this->db->query("SELECT * FROM hakkimda WHERE id=$id" );
       $data['veri']=$transaction->result();
       $this->load->view('hakkimizda',$data);
     }
}
