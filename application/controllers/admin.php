<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {
	
	public $title	= __CLASS__;

	public function __construct(){
		parent::__construct();
 		$this->load->model( strtolower(__CLASS__).'_model',  'model');
 		$this->model->chek_login();
	}
	
	public function index(){
		$this->admin_login();
	}
	
	public function admin_login(){
		$page_data = array();
        $page_data['head']['js'] 	= array( __FUNCTION__ );
        $page_data['head']['css'] 	= 'singin';  
        $page_data['login']['css'] 	= 'singin';
		$this->load->page('login', $page_data);
	}
	
	
	
	
	
	public function test_login(){
		//$this->admin_model->login_test();
	}
	
	public function control(){
		$page_data = array();
        $page_data['head']['js'] 	= array( __FUNCTION__ );
        //$page_data['css'] 	= 'control';  
		$this->load->page('control', $page_data, false, false);
	}
	
}