<?php echo $this->Form->create('Clinic', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Clinic'); ?></legend>
	<?php
		echo $this->Form->input('id');
	?>
	<div class="input text required">
		<label for="UserUsername">Nombre</label>
		<p style="font-weight:normal;font-family:'frutiger linotype','lucida grande','verdana',sans-serif;font-size:140%; padding:1%;">
			<?php echo $clinic['Clinic']['name']; ?>
		</p>
	</div>
	<?php
		echo $this->Form->input('url_image', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clinic['Clinic']['id']), null, __('Are you sure you want to delete # %s?', $clinic['Clinic']['id'])); ?></li>
		<li><?php echo $this->Html->link(__('List Clinics'), array('action' => 'index')); ?></li>
	</ul>
</div>
