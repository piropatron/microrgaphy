<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends MY_Controller {

	//private $last_update;
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index($file_name){
		//echo $file;
	}
	
	public function sitemap_xml(){
		$this->output
			->set_content_type('text/xml')
			->set_output('<xml></xml>');	
	}
	
	public function robots_txt(){
		$this->output
			->set_content_type('text/plain')
			->set_output('sdfsdfsdf');
	}
}