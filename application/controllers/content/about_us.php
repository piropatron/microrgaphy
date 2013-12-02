<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$php_file = __DIR__. '/../' . "Base_Controller.php";
file_exists($php_file) ? require_once $php_file : die('File '.$php_file.' does not exist!');



class About_us extends Base_Controller {

	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
	echo 'test';
		$data = array();
	    $data['title'] 			= str_replace('_', ' ', __CLASS__  );
	    $part = __FILE__ ;
	    $data['js_libs']  		= array('jquery-1.8.0.min.js');
	    $data['menu'] 			= $this->base_model->get_menu();
// 	    $data['submenu'] 		= $this->base_model->get_Submenu(1);
// 	    $data['infoSubMenu'] 	= $this->base_model->get_infoSubmenu(2);
// 	    $data['subMenuFooter'] 	= $this->base_model->get_sub_menu_footer();
		$data['submenu'] 		= array();
	    $data['infoSubMenu'] 	= array();
	    $data['subMenuFooter'] 	= array();
	    $data['page'] 			= __CLASS__;  
		$this->load->page($part, $data);
	}
}