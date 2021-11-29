<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
		public function index()
	{
		$ci =& get_instance();
		$id=$ci->uri->segment('3');
		$err=false;
		if ($this->input->server('REQUEST_METHOD') == 'POST'){

			$this->load->model("Ge_model");
		
			if(isset($_POST['txLogin'])!="" && $_POST['txPwd']!=""){

				$v_login=$this->Ge_model->login($_POST);
				if(is_array($v_login)){
					$this->session->set_userdata($v_login);
					echo "<script>this.location='".base_url()."';</script>";
					exit();
				}else{
					$err=true;
				}
			}
		}




		$this->load->view('login.php',array('err'=>$err));
	}



	public function sair()
	{
		$this->session->sess_destroy();
		echo "<script>location.href='".base_url()."login'</script>";
	
	}
}
