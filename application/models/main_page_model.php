<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_page_model extends MY_model
{
	public function __construct(){
        parent::__construct();
	}

	public function get_features()
	{
        $base_url = base_url();
        $sql = "SELECT features.name,
                       features.text,
                       CONCAT('{$base_url}', images.path,images.name,images.ext) AS url
                  FROM features,
                       images
                 WHERE features.images_id = images.id";
        return $this->db->query($sql)->result_array();
	}

}

?>