<?php 
	echo $this->Form->create(
		'Videoclip', 
		array(
			'type' => 'file'
		)
	); 
?>
	<fieldset>
		<legend><?php echo __('Admin Edit Videoclip'); ?></legend>
	<?php
		echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->input('text', array('type' => 'hidden'));
		echo $this->Form->input('url_image', array('type' => 'file'));
		echo $this->Form->input('url_sample_video', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php 
				echo $this->Html->link(
					__('Edit Videoclip'), 
					array(
						'action' => 'edit'
					)
				); 
			?> 
		</li>
		<li>
			<?php 
				echo $this->Html->link(
					__('View Videoclip'), 
					array(
						'action' => 'index'
					)
				); 
			?>
		</li>
	</ul>
</div>
