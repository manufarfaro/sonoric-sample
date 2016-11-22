<?php echo $this->Form->create('Clinic', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Clinic'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('url_image', array('type' => 'file'));
		echo $this->Form->input('url_link');
		echo $this->Form->input('dateCreated');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php 
				echo $this->Html->link(
					__('List Clinics'), 
					array(
						'action' => 'index'
					)
				); 
			?>
		</li>
	</ul>
</div>
