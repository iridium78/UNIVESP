<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Ge_model');
		$this->load->library('session');
	}


	public function cadastro()
	{

		$status=null;
		if($this->input->post()){
			$status=$this->Ge_model->grava_usuarios(0,$_POST);
		}

		$dados=array('status'=>$status,'perfis'=>$this->Ge_model->get_perfis(0));


		$this->load->view('header');
		$this->load->view('cad_usuarios',$dados);
		$this->load->view('footer');
	}


	public function edita()
	{	
		$ci =& get_instance();

		$status=null;
		$id=strtolower($ci->uri->segment('3'));

		if($this->input->post()){
			$status=$this->Ge_model->grava_usuarios($id,$_POST);
		}

		$dados=array('status'=>$status,'perfis'=>$this->Ge_model->get_perfis(0),'usuario'=>$this->Ge_model->get_usuarios($id));


		$this->load->view('header');
		$this->load->view('edita_usuarios',$dados);
		$this->load->view('footer');
	}


	public function index()
	{

		$status=null;
		

		$dados=array('usuarios'=>$this->Ge_model->get_usuarios());


		$this->load->view('header');
		$this->load->view('usuarios',$dados);
		$this->load->view('footer');
	}
}
