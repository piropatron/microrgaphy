<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Main_page extends MY_Controller {

	public $title	= __CLASS__;

    public function __construct(){
        parent::__construct();
        $this->load->model( strtolower(__CLASS__).'_model', 'model');
        //$this->output->cache(1);
    }

	public function index(){
        $this->start_page();
	}

    public function start_page(){
        $page_data = array();
        //$page_data['js_lib'] = array( __FUNCTION__ );
        $page_data['head']['js'] = array( __FUNCTION__ );
        $page_data['head']['css'] = 'carousel';
        $page_data[__FUNCTION__] = 'carousel';
        $page_data['navigator'] = 'carousel';
        $page_data['carousel'] = '';
        $page_data['small_content']['features'] = $this->model->get_features() ;
        $page_data['features']='';
        $page_data['footer']='';
        $this->load->page('start_page' , $page_data);
    }
    
    public function test(){
    	$page_data['head']['js'] = array( );
        $page_data['head']['css'] = 'carousel';
        $page_data['navigator'] = 'carousel';


        $options = array(
            CURLOPT_URL        => 'http://bash.im',
            //CURLOPT_RETURNTRANSFER => true,         // return web page
            //CURLOPT_HEADER         => false,        // don't return headers
            //CURLOPT_FOLLOWLOCATION => true,         // follow redirects
            CURLOPT_ENCODING       => "UTF-8",           // handle all encodings
            CURLOPT_USERAGENT      => "spider",     // who am i
            CURLOPT_AUTOREFERER    => true,         // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 120,          // timeout on connect
            CURLOPT_TIMEOUT        => 120,          // timeout on response
            CURLOPT_MAXREDIRS      => 10,           // stop after 10 redirects
            CURLOPT_POST            => 1,            // i am sending post data
            //CURLOPT_POSTFIELDS     => $curl_data,    // this are my post vars
            CURLOPT_SSL_VERIFYHOST => 0,            // don't verify ssl
            CURLOPT_SSL_VERIFYPEER => false,        //
            CURLOPT_VERBOSE        => 1                //
        );

        $ch      = curl_init();
        curl_setopt_array($ch,$options);
        $content = curl_exec($ch);
        $err     = curl_errno($ch);
        $errmsg  = curl_error($ch) ;
        $header  = curl_getinfo($ch);
        curl_close($ch);

        $raw_content =  $content;
        //$content = iconv('windows-1251','utf-8',$raw_content);
             echo var_dump($raw_content) ;
             echo '<hr>';
             echo strlen($content) ;
		//echo '<pre>';
        //var_dump( strripos('<head>', substr($content, 35,100	))) ;
        //echo '</pre>';
        $raw_content =  substr($raw_content, strpos('</head>', $raw_content));
        //echo strlen($raw_content) ;
        //$dom = new DomDocument();
        //$dom->loadHTML($raw_content);
        
        //$XML = new SimpleXMLElement($raw_content);
        
        
        $page_data['content'] = $content;
        //$page_data['XML'] = $XML;
        $page_data['footer']='';
    
		
    	$this->load->page('test' , $page_data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */