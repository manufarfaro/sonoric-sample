<?php echo $this->Form->create('IndexPhoto', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Index Photo'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('url_image', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<div class="actions">
	<h3>
		<?php echo __('Actions'); ?>
	</h3>
	<ul>
		<li>
			<?php 
				echo $this->Html->link(
					__('List Index Photos'), 
					array(
						'action' => 'index'
					)
				); 
			?>
		</li>
	</ul>
</div>
