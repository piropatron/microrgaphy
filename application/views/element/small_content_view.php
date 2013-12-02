<div class="row">
	<?php foreach($features AS $feature):?>
	<div class="col-lg-4">
		<img alt="140x140" class="img-circle" style="width: 140px; height: 140px;" data-src="start_page.js/140x140" src="<?=$feature['url']?>" >
		<h2><?=$feature['name']?></h2>
		<p><?=$feature['text']?></p>
		<p><a href="#" class="btn btn-default">View details</a></p>
	</div><!-- /.col-lg-4 -->
	<?php endforeach;?>
</div><!-- /.row -->