<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_model extends MY_model
{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function login($data)
	{
		
	  $this->db->select('id');
	  $this->db->where('login', $data['login']);
	  $this->db->where('password_hash', $data['password']);
	  $result = $this->db->get('users')->row_array();
	  if(isset( $result['id'] )){
			$user_data = array('id'=>$result['id'],
			'password'=>$data['password']);
			$this->session->set_userdata($user_data);
			return true;
	  }else{
		return false;
	  }
	  
	}

	public function login_test()
	{
	  $this->db->set('login', 'admin');
	  $this->db->set('password_hash', 'password');
	  $this->db->insert('users');
	}

	public function get_login(){
		$user_login = $this->session->userdata('login');
		$user_password = $this->session->userdata('password');
		$user_id = $this->session->userdata('id');
		$this->db->select('id');
		$this->db->where('login', $user_login);
		$this->db->where('password_hash', $user_password);
		$user_sql = $this->db->get('users')->row_array();
		if( $user_sql && $user_id == $user_sql['id'] ){
			
			return true;
		}else{
			return false;
		}
	}

	public function chek_login(){
		if( !$this->get_login() ){
			if( $this->uri->uri_string() != 'admin' ){
				echo '2';
				redirect(base_url().'admin');
 			} 
		}
	}
}

?>