<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {
	
	public $title	= __CLASS__;

	public function __construct(){
		parent::__construct();
 		$this->load->model( 'admin_model' );
	}
	
	public function singin(){
		$data = $this->input->post();
		$response = array('login'=>'false');
		if($this->admin_model->login($data) ){
			$response['login']='true';
		}
		$this->output
    		->set_content_type('application/json')
			->set_output( json_encode($response) );
	}
}