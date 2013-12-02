<?=doctype('html5');?>
<html lang="en">
<?php $this->load->view('element/head_view', $page_data['head']);?>
<body>
	<?php $this->load->view('pages/'.$page.'_view', $page_data[$page]); ?>
</body>
</html>