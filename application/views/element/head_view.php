<head>
    <?=meta($this->meta)?>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?=$this->title; ?></title>
    <!-- Latest compiled and minified CSS -->
    <?=css('./css/bootstrap')?>
	<!-- Optional theme -->
	<?=css('./css/bootstrap-theme')?>
	<?=css('./css/userstyle')?>
	<?php if(isset($css)):
		echo css('./css/content/'.$css);
		endif;?>
	<style id="holderjs-style" type="text/css">
		.holderjs-fluid {
			font-size:16px;
			font-weight:bold;
			text-align:center;
			font-family:sans-serif;
			margin:0
		}
	</style>
	<?=js('./js/lib/jquery-2.0.3')?>
	<?=js('./js/lib/bootstrap')?>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    <?php if(isset($js)):
            foreach ($js as $js_file): 
            	echo js('./js/content/'.$js_file);
			endforeach;
          endif;
          if(isset($js_lib)):
            foreach ($js_lib as $lib): 
            	echo js('./js/lib/'.$lib);
			endforeach;
          endif;?>
</head>