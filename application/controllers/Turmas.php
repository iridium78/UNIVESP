<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turmas extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Ge_model');
		$this->load->library('session');
	}


	public function cadastro()
	{

		$status=null;
		if($this->input->post()){
			$status=$this->Ge_model->grava_turmas(0,$_POST);
		}

		$dados=array('status'=>$status,'cursos'=>$this->Ge_model->get_cursos(),'professores'=>$this->Ge_model->get_professores());


		$this->load->view('header');
		$this->load->view('cad_turmas',$dados);
		$this->load->view('footer');
	}


	public function edita()
	{	
		$ci =& get_instance();

		$status=null;
		$id=strtolower($ci->uri->segment('3'));

		if($this->input->post()){
			$status=$this->Ge_model->grava_turmas($id,$_POST);
		}

		$dados=array('status'=>$status,'cursos'=>$this->Ge_model->get_cursos(),'professores'=>$this->Ge_model->get_professores(),'turma'=>$this->Ge_model->get_turmas($id));


		$this->load->view('header');
		$this->load->view('edita_turmas',$dados);
		$this->load->view('footer');
	}


	public function index()
	{

		$status=null;
		

		$dados=array('turmas'=>$this->Ge_model->get_turmas());


		$this->load->view('header');
		$this->load->view('turmas',$dados);
		$this->load->view('footer');
	}
}
