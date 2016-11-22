<?php echo $this->Html->script('tiny_mce/tiny_mce'); ?>

<script type="text/javascript">
    tinyMCE.init({
        theme : "advanced",
        mode : "textareas",
        plugins : "autoresize",
        theme_advanced_buttons3_add : "forecolor,backcolor",
        convert_urls : false
    });
</script> 

<?php echo $this->Form->create('Band', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Band'); ?></legend>
	<?php
		echo $this->Form->input('genre_id');
		echo $this->Form->input('name');
		echo $this->Form->input('about');
		echo $this->Form->input('contact');
		echo $this->Form->input('url_image_logo', array('type' => 'file'));
		echo $this->Form->input('url_image_brand', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bands'), array('action' => 'index')); ?></li>
	</ul>
</div>
