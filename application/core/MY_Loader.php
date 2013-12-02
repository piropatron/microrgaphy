<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Loader extends CI_Loader {
	
	private $_CI;

    public function __construct(){
    	parent::__construct();
        $this->_CI =& get_instance();
    }

    public function page($page, $input_page_data){
    	$page_data['page']		= strtolower($page);
    	$page_data['page_data']	= $input_page_data;
        $this->_CI->load->view('template/template_view', $page_data);
    }
}
?>