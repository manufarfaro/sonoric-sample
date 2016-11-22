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

<?php echo $this->Form->create('VideoclipCombo'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Videoclip Combo'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('text');
		echo $this->Form->input('work_estimated');
		echo $this->Form->input('work_duration');
		echo $this->Form->input('work_cost');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Videoclip Combos'), array('action' => 'index')); ?></li>
	</ul>
</div>
