<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Ge_model');
		$this->load->library('session');
	}


	public function cadastro()
	{

		$status=null;
		if($this->input->post()){
			$status=$this->Ge_model->grava_cursos(0,$_POST);
		}

		$dados=array('status'=>$status);


		$this->load->view('header');
		$this->load->view('cad_cursos',$dados);
		$this->load->view('footer');
	}


	public function edita()
	{	
		$ci =& get_instance();

		$status=null;
		$id=strtolower($ci->uri->segment('3'));

		if($this->input->post()){
			$status=$this->Ge_model->grava_cursos($id,$_POST);
		}

		$dados=array('status'=>$status,'curso'=>$this->Ge_model->get_cursos($id));


		$this->load->view('header');
		$this->load->view('edita_cursos',$dados);
		$this->load->view('footer');
	}


	public function index()
	{

		$status=null;
		

		$dados=array('cursos'=>$this->Ge_model->get_cursos());


		$this->load->view('header');
		$this->load->view('cursos',$dados);
		$this->load->view('footer');
	}
}
