<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site_model extends CI_Model{
	public function __construct(){
         parent::__construct();
	}
	public function get_menu(){
		$this->load->helper('directory');
		$menu = directory_map(APPPATH.'controllers/content');
		return $menu;
	}
     
	public function get_sub_menu($m){
		$sub_menu =get_dir_file_info($m);
		array_walk($sub_menu , function(&$a){ $a['name'] = str_replace(EXT, '', $a['name']); });
		return $sub_menu;
	}
}
?>