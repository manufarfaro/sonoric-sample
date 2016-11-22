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

<?php echo $this->Form->create('Disc'); ?>
	<fieldset>
		<legend>
			<?php echo __('Admin Edit Discs'); ?>
		</legend>
		<?php echo $this->Form->input('id'); ?>
		<span class="txtAdminTitle">Arte</span>
		<?php echo $this->Form->input('text_arts');?>
		<span class="txtAdminTitle">Impresiones</span>
		<?php echo $this->Form->input('text_printing');?>
		<span class="txtAdminTitle">Fotograf&iacute;as</span>
		<?php echo $this->Form->input('text_photos');?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php 
				echo $this->Html->link(
					__('List Discs'), 
					array(
						'action' => 'index'
					)
				); 
			?>
		</li>
	</ul>
</div>
