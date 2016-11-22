<?php echo $this->Form->create('BandPhoto'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Band Photo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('band_id', array('disabled' => true));
		echo $this->Form->input('band_id', array('type' => 'hidden'));
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('url_image', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li>
			<?php 
				echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BandPhoto.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BandPhoto.id'))); 
			?>
		</li>
		<li>
			<?php 
				echo $this->Html->link(
					__('Change Image'), 
					array(
						'action' => 'change_image', 
						$this->Form->value('BandPhoto.id')
					)
				); 
			?> 
		</li>
		<li>
			<?php 
				echo $this->Html->link(
					__('View Band'), 
					array(
						'controller' => 'bands', 
						'action' => 'view', 
						$this->Form->value('BandPhoto.id')
					)
				); 
			?> 
		</li>
		<li>
			<?php 
				echo $this->Html->link(__('List Bands'), array('controller' => 'bands', 'action' => 'index')); 
			?> 
		</li>
	</ul>
</div>
