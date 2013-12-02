<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$controller_folder = dirname(__FILE__);
$controller = "Base_Controller.php";
$php_file = $controller_folder . '/../../' . $controller;
file_exists($php_file) ? require_once $php_file : die('File does not exist!');

class Why_polar_b extends Base_Controller {

	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data = array();
	    $data['title'] 			= __CLASS__;
	    $data['page'] 			= __CLASS__;
	    $data['js_files']  		= array(__FUNCTION__);
	    $data['js_libs']  		= array('jquery-1.8.0.min.js');
	    $data['css_file'] 		= 'style.css';
	    $data['menu'] 			= $this->base_model->get_menu();
	    $data['submenu'] 		= $this->base_model->get_Submenu(1);
	    $data['infoSubMenu'] 	= $this->base_model->get_infoSubmenu(2);
	    $data['subMenuFooter'] 	= $this->base_model->get_sub_menu_footer();
	    $data['activeSubMenu'] 	= __CLASS__ ;
		$this->load->page( strtolower (__CLASS__).'/'.__FUNCTION__, $data);
	}
}