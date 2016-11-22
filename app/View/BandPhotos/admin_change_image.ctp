<?php echo $this->Form->create('BandPhoto', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Band Photo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('band_id', array('disabled' => true));
		echo $this->Form->input('band_id', array('type' => 'hidden'));
		echo $this->Form->input('title', array('type' => 'hidden'));
		echo $this->Form->input('description', array('type' => 'hidden'));
		echo $this->Form->input('url_image', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li>
			<?php 
				echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bandPhoto['BandPhoto']['id']), null, __('Are you sure you want to delete # %s?', $bandPhoto['BandPhoto']['id'])); 
			?>
		</li>
		<li>
			<?php 
				echo $this->Html->link(
					__('Edit'), 
					array(
						'action' => 'edit', 
						$bandPhoto['BandPhoto']['id']
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
						$bandPhoto['BandPhoto']['band_id']
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
