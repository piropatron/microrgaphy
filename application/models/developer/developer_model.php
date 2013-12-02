<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Developer_model extends Base_model{

	public function __construct(){
         parent::__construct();
	}
	
	protected function make_file($type, $page){
		$this->load->helper('file');
		$page = str_replace('/content/','',$page);
		$tree = explode('/', $page);
		$page_name = array_pop( $tree );
		switch($type){
			case 'css':
				$base_dir = BASE_PART.'/'.STYLE_PART; 
				$file_template = BASE_PART.'/css/template/template.';
				$file_name  = $page_name.DATE_RELEASE.'.'.$type;
				$string = read_file($file_template.$type);
				break;
			case 'js':
				$base_dir = BASE_PART.'/'.JS_PART; 
				$file_template = BASE_PART.'/js/template/template.';
				$file_name  = $page_name.DATE_RELEASE.'.'.$type;
				$string = read_file($file_template.$type);
				break;
			case 'left_block':
				$base_dir = BASE_PART.'/'.APPPATH.'views/content/'; 
				$file_name  = $type.'_view'.EXT;
				$string = '<span>'.$type.'  '.$file_name.'</span>';
				break;
			case 'center_block':
				$base_dir = BASE_PART.'/'.APPPATH.'views/content/'; 
				$file_name  = $type.'_view'.EXT;
				$string = '<span>'.$type.'  '.$file_name.'</span>';
				break;
			case 'right_block':
				$base_dir = BASE_PART.'/'.APPPATH.'views/content/'; 
				$file_name  = $type.'_view'.EXT;
				$string = '<span>'.$type.'  '.$file_name.'</span>';
				break;
			case 'top_block':
				$base_dir = BASE_PART.'/'.APPPATH.'views/content/'; 
				$file_name  = $type.'_view'.EXT;
				$string = '<span>'.$type.'  '.$file_name.'</span>';
				break;
			case 'bottom_block':
				$base_dir = BASE_PART.'/'.APPPATH.'views/content/'; 
				$file_name  = $type.'_view'.EXT;
				$string = '<span>'.$type.'  '.$file_name.'</span>';
				break;
			case 'model':
				$base_dir = BASE_PART.'/'.APPPATH.'models/content/'; 
				$file_name  = $page_name.'_model'.EXT;
				$string = '<?php
require_once(base_model.php);

class '.ucfirst($page_name).'_model extends Base_model
{
     public function __construct()
     {
         parent::__construct();
     }
}';
				break;
			default:
			    die('type!!!') ;
			    break;
		}
		foreach(explode('/', $page) AS $sub_dir){
				$base_dir .= $sub_dir.'/';
			if(!is_dir($base_dir)){
				mkdir($base_dir, 0777);
			}
			
		}
		echo $base_dir.$file_name.'<br>';
		if($string){
			var_dump( write_file($base_dir.$file_name, str_replace('{page_name}',$file_name , $string))).'<br>';
			chmod($base_dir.$file_name, 0777);
		}
	}
	
	public function get_page($data){
// 		$this->make_file('css', $data['part']);
// 	    $this->make_file('js', $data['part']);
// 		$this->make_file('left_block', $data['part']);
// 		$this->make_file('center_block', $data['part']);
// 		$this->make_file('right_block', $data['part']);
// 		$this->make_file('top_block', $data['part']);
// 		$this->make_file( 'bottom_block', $data['part']);
// 		$this->make_file( 'model', $data['part']);
	}
		
	
}