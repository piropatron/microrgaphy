<div class="container">
    <?=form_open_multipart( $action, $attributes);?>
    <h2 class="form-signin-heading"><?=lang('choose_file');?> </h2>
    <?=form_upload($upload)?>
    <?=form_button($button)?>
    <?=form_close()?>
    <?php if(isset($error)):?>
       <?=$error?>
    <?php endif;?>
    <ul>
        <?php if(isset($upload_data)):?>
        <?php foreach ($upload_data as $item => $value):?>
            <li><?php echo $item;?>: <?php echo $value;?></li>
        <?php endforeach; ?>
        <?php endif;?>
    </ul>
</div>