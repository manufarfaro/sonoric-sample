<?php echo $this->Form->create('DiscPrintingPhoto'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Disc Printing Photo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('url_image', array('type' => 'hidden', 'value' => $this->Form->value('DiscPrintingPhoto.url_image')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php 
				echo $this->Html->link(
					__('Change Image'), 
					array(
						'action' => 'change_image', 
						$this->Form->value('DiscPrintingPhoto.id')
					)
				); 
			?> 
		</li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DiscPrintingPhoto.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DiscPrintingPhoto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Disc Printing Photos'), array('action' => 'index')); ?></li>
	</ul>
</div>
