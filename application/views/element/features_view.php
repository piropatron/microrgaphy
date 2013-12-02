<!-- START THE FEATURETTES -->
<hr class="featurette-divider">
<?php for($i=1;$i<=6;$i++): ?>
<div class="row featurette">
	<?php if( $i%2 === 0): ?>
	<div class="col-md-7">
		<h2 class="featurette-heading"><?=$i?> featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
		<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
	</div>
	
	<div class="col-md-5">
		<img alt="500x500" data-src="start_page.js/500x500/auto" class="featurette-image img-responsive" src="<?=base_url()?>images/48222<?=$i?>.jpg" >
	</div>
	<?php else:?>
	<div class="col-md-5">
		<img alt="500x500" data-src="start_page.js/500x500/auto" class="featurette-image img-responsive" src="<?=base_url()?>images/48222<?=$i?>.jpg" >
	</div>
	<div class="col-md-7">
		<h2 class="featurette-heading"><?=$i?> featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
		<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
	</div>
	<?php endif;?>
	
</div>
<hr class="featurette-divider">
<?php endfor;?>