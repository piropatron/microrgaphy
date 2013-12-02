<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends MY_Controller {
///109.86.2.21
	public $title	= __CLASS__;

	public function __construct(){
		parent::__construct();
 		$this->load->model( strtolower(__CLASS__).'_model' );

	}
	
	public function index(){
		$this->about_page();
	}
	
	public function about_page(){

		$page_data = array();
        $page_data['head']['js'] 	        = array( __FUNCTION__ );
        $page_data['head']['css'] 	        = 'singin';
        $page_data['about']['attributes']   = array('class' => 'form-signin', 'id' => 'myform');
        $page_data['navigator']['attributes']   = array('class' => 'form-signin', 'id' => 'myform');
        $page_data['features']['attributes']   = array('class' => 'form-signin', 'id' => 'myform');
        $page_data['footer']['attributes']   = array('class' => 'form-signin', 'id' => 'myform');
		$this->load->page(__CLASS__, $page_data);
	}

    public function upload(){
        $this->load->helper('form');
        $this->load->helper('file');
        $this->load->library('zip');

        $page_data = array();
        $page_data['head']['js'] 	        = array( __FUNCTION__ );
        $page_data['head']['css'] 	        = 'singin';
        $page_data['upload_form']['attributes']   = array('class' => 'form-signin', 'id' => 'myform');
        $page_data['upload_form']['action']       = 'about/upload';
        $page_data['upload_form']['upload']       = array('name' => 'userfile');
        $page_data['upload_form']['button']       = array('type' => 'submit',
            'content' => lang('share'),
            'class' => 'btn btn-lg btn-primary btn-block');


        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'txt';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload()){
            $page_data['upload_form']['error'] = $this->upload->display_errors();
            $this->load->page('upload_form', $page_data);
        }else{
            $upload_data =$this->upload->data();
            $page_data['upload_form']['upload_data'] = $upload_data;
            $this->load->page('upload_form', $page_data);

            $file = file($upload_data['full_path'],FILE_SKIP_EMPTY_LINES);
            $dir = $upload_data['file_path'].$upload_data['raw_name'];
            mkdir( $dir, 0777);
            $counter = 0;
            $num_part = 0;
            foreach ($file as $k => $line) {
                $line = mb_convert_encoding($line, 'WINDOWS-1251', mb_detect_encoding($line));
                if($counter < 300){
                    write_file($dir.'/path_'.$num_part.'.txt', $line,  'a+');
                    $counter++;
                }else{
                    write_file($dir.'/path_'.$num_part.'.txt', $line,  'a+');
                    $counter=0;
                    $num_part++;
                }
            }
            delete_files($dir, TRUE);
        }



    }
	
}