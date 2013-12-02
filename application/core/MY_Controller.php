<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class MY_Controller extends CI_Controller
{
	public $meta = array(
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'description', 'content' => 'My Great Site'),
        array('name' => 'keywords', 'content' => 'love, passion, intrigue, deception'),
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
    );
    public $title = '';
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('language');
		//$this->lang->load('english', 'english');
		//var_dump($this->input->get_request_header('Accept-language'));//, TRUE
		//exit;
		$this->lang->load('russian', 'russian');
	}

}