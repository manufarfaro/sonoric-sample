<?php echo $this->Form->create('DiscPrintingPhoto', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Disc Printing Photo'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('url_image', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php 
				echo $this->Html->link(
					__('List Disc Printing Photos'), 
					array(
						'action' => 'index'
					)
				); 
			?>
		</li>
	</ul>
</div>
