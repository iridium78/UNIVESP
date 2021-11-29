<?php defined('BASEPATH') OR exit('No direct script access allowed');
//date_default_timezone_set('America/Sao_Paulo');
//require str_replace("/system","",BASEPATH)."/vendor/autoload.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Ge_model extends CI_Model {
	
	public function login($postado){

		$login=$postado['txLogin'];
		$pwd=md5($postado['txPwd']);

		$this->db->select('id as id_usuario,nome,email');
		$this->db->from('usuarios');
		$this->db->where('email',$login);
		$this->db->where('senha',$pwd);
		$query = $this->db->get();
		//exit();
		if ($query->num_rows() > 0) {
			return $query->row_array();
		}else{

			return true;
		}

	}

	public function get_estados($id=0){

		
		$this->db->select('*')->from('estados');
		if($id>0){
			$this->db->where('id',$id);
		}
		$this->db->order_by('sigla');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result_array();
		}
		return null;
	}

	public function get_perfis($id=""){

		
		$this->db->select('*')->from('perfis');
		if($id!=""){
			$this->db->where('md5(id)',$id);
		}
		$this->db->order_by('perfil');
		$query = $this->db->get();
		
		if($query->num_rows() > 0) {
			return $query->result_array();
		}
		return null;
	}

	public function get_usuarios($id=''){

		
		$this->db->select('*')->from('usuarios');
		if($id!=''){
			$this->db->where('md5(id)',$id);
		}
		$this->db->order_by('nome');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result_array();
		}
		return null;
	}


	public function get_cursos($id=''){

		
		$this->db->select('*')->from('cursos');
		if($id!=''){
			$this->db->where('md5(id)',$id);
		}
		$this->db->order_by('curso');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result_array();
		}
		return null;
	}


	public function get_professores($id=0){

		
		$this->db->select('*')->from('usuarios')->where('id_perfil',3);
		if($id>0){
			$this->db->where('id',$id);
		}
		$this->db->order_by('nome');
		$query = $this->db->get();

		if($query->num_rows() > 0) {
			return $query->result_array();
		}
		return null;
	}

	public function get_turmas($id=0){

		
		$this->db->select('a.*,b.curso,c.nome as nome_professor')->from('turmas a')->join('cursos b','a.id_curso=b.id','left')->join('usuarios c','a.id_professor=c.id','left');
		if($id>0){
			$this->db->where('id',$id);
		}
		$this->db->order_by('id_curso,id_professor,id_horario');
		$query = $this->db->get();
		

		if($query->num_rows() > 0) {
			return $query->result_array();
		}
		return null;
	}

	public function get_horarios($id_horario){
		switch($id_horario){
		case '1':
			$horario='Manhã';
			break;
		case '2':
			$horario='Tarde';
			break;
		case '3':
			$horario='Noite';
			break;
		case '4':
			$horario='Integral';
			break;
		}
		return $horario;
	}

	public function grava_usuarios($id="",$dados){

		if(isset($dados['txAtivo'])==1){
			$ativo=1;
		}else{
			$ativo=0;
		}

		if(isset($dados['txAdmin'])==1){
			$admin=1;
		}else{
			$admin=0;
		}


		if($id==""){

			$this->db->select('*')->from('usuarios')->where("email=lower('".$dados['txEmail']."')");
			$query = $this->db->get();
			if($query->num_rows() > 0) {
				$status=2;
			}
			else{
				$arr=array(
					'nome'=>$dados['txNome'],
					'email'=>strtolower($dados['txEmail']),
					'senha'=>md5($dados['txSenha']),
					'ativo'=>$ativo,
					'administrador'=>$admin,
					'id_perfil'=>$dados['txPerfil'],
					'dt_cadastro'=>date('Y-m-d H:i')
				);

				$this->db->insert('usuarios',$arr);
				$status=1;
			}


		}else{
			$this->db->select('*')->from('usuarios')->where("email=lower('".$dados['txEmail']."')")->where("md5(id)<>'".$id."'");
			$query = $this->db->get();
			
			if($query->num_rows() > 0) {
				$status=2;
				
			}
			else{


				if($dados['old_password']==md5($dados['txSenha'])){
					$senha=$dados['old_password'];
				}else{
					$senha=md5($dados['txSenha']);
				}

				$arr=array(
					'nome'=>$dados['txNome'],
					'email'=>strtolower($dados['txEmail']),
					'senha'=>$senha,
					'ativo'=>$ativo,
					'administrador'=>$admin,
					'id_perfil'=>$dados['txPerfil'],
					'dt_cadastro'=>date('Y-m-d H:i')
				);
				$this->db->where('md5(id)',$id);
				$this->db->update('usuarios',$arr);

				
				$status=1;
			}
		}

		return $status;
	}


	public function grava_perfis($id="",$dados){

		if($id==""){

			$this->db->select('*')->from('perfis')->where("perfil",$dados['txPerfil']);
			$query = $this->db->get();
			if($query->num_rows() > 0) {
				$status=2;
			}
			else{
				$arr=array(
					'perfil'=>$dados['txPerfil']
					
				);

				$this->db->insert('perfis',$arr);
				$status=1;
			}


		}else{
			$this->db->select('*')->from('perfis')->where("perfil",$dados['txPerfil'])->where("md5(id)<>'".$id."'");
			$query = $this->db->get();
			
			if($query->num_rows() > 0) {
				$status=2;
				
			}
			else{
				$arr=array(
					'perfil'=>$dados['txPerfil']
				);
				$this->db->where('md5(id)',$id);
				$this->db->update('perfis',$arr);

				
				$status=1;
			}
		}

		return $status;
	}


	public function grava_cursos($id="",$dados){

		if(isset($dados['txAtivo'])==1){
			$ativo=1;
		}else{
			$ativo=0;
		}

		if($id==""){

			$this->db->select('*')->from('cursos')->where("curso",$dados['txCurso']);
			$query = $this->db->get();
			if($query->num_rows() > 0) {
				$status=2;
			}
			else{
				$arr=array(
					'curso'=>$dados['txCurso'],
					'ativo'=>$ativo,
					'descricao'=>$dados['txDescricao']
					
				);

				$this->db->insert('cursos',$arr);
				$status=1;
			}


		}else{
			$this->db->select('*')->from('cursos')->where("curso",$dados['txCurso'])->where("md5(id)<>'".$id."'");
			$query = $this->db->get();
			
			if($query->num_rows() > 0) {
				$status=2;
				
			}
			else{
				$arr=array(
					'curso'=>$dados['txCurso'],
					'ativo'=>$ativo,
					'descricao'=>$dados['txDescricao']
					
				);
				$this->db->where('md5(id)',$id);
				$this->db->update('cursos',$arr);

				
				$status=1;
			}
		}

		return $status;
	}



	public function grava_turmas($id="",$dados){

		if(isset($dados['txAtivo'])==1){
			$ativo=1;
		}else{
			$ativo=0;
		}

		if(isset($dados['txDomingo'])==1){
			$dom=1;
		}else{
			$dom=0;
		}
		if(isset($dados['txSegunda'])==1){
			$seg=1;
		}else{
			$seg=0;
		}
		if(isset($dados['txTerca'])==1){
			$ter=1;
		}else{
			$ter=0;
		}
		if(isset($dados['txQuarta'])==1){
			$qua=1;
		}else{
			$qua=0;
		}
		if(isset($dados['txQuinta'])==1){
			$qui=1;
		}else{
			$qui=0;
		}
		if(isset($dados['txSexta'])==1){
			$sex=1;
		}else{
			$sex=0;
		}
		if(isset($dados['txSabado'])==1){
			$sab=1;
		}else{
			$sab=0;
		}

		if($id==""){

			$this->db->select('*')->from('turmas')->where("id_curso",$dados['txCurso'])->where("id_horario",$dados['txHorario'])->where("id_professor",$dados['txProfessor']);
			$query = $this->db->get();
			if($query->num_rows() > 0) {
				$status=2;
			}
			else{
				$arr=array(
					'id_curso'=>$dados['txCurso'],
					'id_professor'=>$dados['txProfessor'],
					'id_horario'=>$dados['txHorario'],
					'dom'=>$dom,
					'seg'=>$seg,
					'ter'=>$ter,
					'qua'=>$qua,
					'qui'=>$qui,
					'sex'=>$sex,
					'sab'=>$sab,
					'encerramento'=>$dados['txEncerramento'],
					'ativo'=>$ativo
					
				);

				$this->db->insert('turmas',$arr);
				$status=1;
			}


		}else{
			$this->db->select('*')->from('turmas')->where("id_curso",$dados['txCurso'])->where("id_horario",$dados['txHorario'])->where("id_professor",$dados['txProfessor'])->where("md5(id)<>'".$id."'");
			$query = $this->db->get();
			
			if($query->num_rows() > 0) {
				$status=2;
				
			}
			else{
				$arr=array(
					'id_curso'=>$dados['txCurso'],
					'id_professor'=>$dados['txProfessor'],
					'id_horario'=>$dados['txHorario'],
					'dom'=>$dom,
					'seg'=>$seg,
					'ter'=>$ter,
					'qua'=>$qua,
					'qui'=>$qui,
					'sex'=>$sex,
					'sab'=>$sab,
					'encerramento'=>$dados['txEncerramento'],
					'ativo'=>$ativo
					
				);
				$this->db->where('md5(id)',$id);
				$this->db->update('turmas',$arr);

				
				$status=1;
			}
		}

		return $status;
	}


}?>
