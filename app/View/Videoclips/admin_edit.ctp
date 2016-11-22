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

<?php echo $this->Form->create('Videoclip'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Videoclip'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('text');
		echo $this->Form->input('url_image', array('type' => 'hidden'));
		echo $this->Form->input('url_sample_video');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php 
			/*
				echo $this->Html->link(
					__('Change Image'), 
					array(
						'action' => 'change_image'
					)
				); 
			*/
			?> 
		</li>
		<li><?php echo $this->Html->link(__('List Videoclips'), array('action' => 'index')); ?></li>
	</ul>
</div>
