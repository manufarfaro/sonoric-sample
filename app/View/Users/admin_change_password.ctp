<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Change Password'); ?></legend>
	<?php
		echo $this->Form->input('id');
		//echo $this->Form->input('username');
	?>
	<div class="input text required">
		<label for="UserUsername">Usuario</label>
		<p style="font-weight:normal;font-family:'frutiger linotype','lucida grande','verdana',sans-serif;font-size:140%; padding:1%;"><?php echo $this->Form->value('User.username'); ?></p>
	</div>
	<?php
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $this->Form->value('User.id'))); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $this->Form->value('User.id'))); ?>
		</li>
		<li>
			<?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?>
		</li>
	</ul>
</div>
