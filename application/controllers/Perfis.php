<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfis extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Ge_model');
		$this->load->library('session');
	}


	public function cadastro()
	{

		$status=null;
		if($this->input->post()){
			$status=$this->Ge_model->grava_perfis(0,$_POST);
		}

		$dados=array('status'=>$status);


		$this->load->view('header');
		$this->load->view('cad_perfis',$dados);
		$this->load->view('footer');
	}


	public function edita()
	{	
		$ci =& get_instance();

		$status=null;
		$id=strtolower($ci->uri->segment('3'));

		if($this->input->post()){
			$status=$this->Ge_model->grava_perfis($id,$_POST);
		}

		$dados=array('status'=>$status,'perfil'=>$this->Ge_model->get_perfis($id));


		$this->load->view('header');
		$this->load->view('edita_perfis',$dados);
		$this->load->view('footer');
	}


	public function index()
	{

		$status=null;
		

		$dados=array('perfis'=>$this->Ge_model->get_perfis());


		$this->load->view('header');
		$this->load->view('perfis',$dados);
		$this->load->view('footer');
	}
}
