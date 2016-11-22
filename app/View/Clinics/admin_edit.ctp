<?php echo $this->Form->create('Clinic'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Clinic'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('url_image', array('type' => 'hidden', 'value' => $this->Form->value('Clinic.url_image')));
		echo $this->Form->input('url_link');
		echo $this->Form->input('dateCreated');
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
					__('Change Image'), 
					array(
						'action' => 'change_image', 
						$this->Form->value('Clinic.id')
					)
				); 
			?>
		</li>
		<li>
			<?php 
				echo $this->Form->postLink(
					__('Delete'), 
					array(
						'action' => 'delete', 
						$this->Form->value('Clinic.id')
					), 
					null, 
					__(
						'Are you sure you want to delete # %s?', 
						$this->Form->value('Clinic.id')
					)
				); 
			?>
		</li>
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
