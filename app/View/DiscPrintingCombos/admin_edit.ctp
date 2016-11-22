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

<?php echo $this->Form->create('DiscPrintingCombo'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Disc Printing Combo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('text');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DiscPrintingCombo.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DiscPrintingCombo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Disc Printing Combos'), array('action' => 'index')); ?></li>
	</ul>
</div>
