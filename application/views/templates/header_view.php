<head>
    <meta charset="utf-8">
    <title><?php  echo $title; ?></title>
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url();?>img/icon.png">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url().'css/userstyle'.DATE_RELEASE.'.css';?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url().'css/content/'.$page.DATE_RELEASE.'.css';?>" />
    <?php endif;?>
    <?php foreach($js_libs AS $js_lib): ?>
    <script type="text/javascript" src="<?=base_url().JS_LIB_PART.$js_lib?>"></script>
    <?php endforeach; ?>
    <?php if( file_exists( './'.JS_PART.strtolower($page).DATE_RELEASE.JS_EXT ) ):?>
	<script type="text/javascript" src="<?php echo base_url().JS_PART.strtolower($page).DATE_RELEASE.JS_EXT?>"></script>
    <?php endif;?>
</head>

