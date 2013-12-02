<?php 
	$this->load->view( 'element/navigator_view', $page_data['navigator'] );
	//$this->load->view( 'element/carousel_view', $page_data['carousel'] );
?>
<div class="container marketing">
<?php
	$this->load->view( 'element/small_content_view', $page_data['small_content'] ); 
	$this->load->view( 'element/features_view', $page_data['features'] ); ?>
</div>
<?php 
	//$this->load->view( 'element/video_view' );
	$this->load->view( 'element/footer_view', $page_data['footer'] );
?>
