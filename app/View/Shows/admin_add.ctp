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

<?php 
	echo $this->Form->create(
		'Show',
		array(
			'type' => 'file'
		)
	); 
?>
	<fieldset>
		<legend><?php echo __('Admin Add Show'); ?></legend>
	<?php
		echo $this->Form->input('text');
		echo $this->Form->input('url_image', array('type' => 'file'));
		echo $this->Form->input('url_moreinfo');
		echo $this->Form->input('event_date');
		echo $this->Form->input('dateCreated');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Shows'), array('action' => 'index')); ?></li>
	</ul>
</div>
