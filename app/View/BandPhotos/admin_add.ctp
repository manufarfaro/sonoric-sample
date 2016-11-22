<?php echo $this->Form->create('BandPhoto', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Band Photo'); ?></legend>
		<div class="input text required">
		<label for="UserUsername"><?php echo __('Band'); ?></label>
		<p style="font-weight:normal;font-family:'frutiger linotype','lucida grande','verdana',sans-serif;font-size:140%; padding:1%;">
			<?php echo $bands['Band']['name']; ?>
		</p>
	</div>
	<?php
		echo $this->Form->input('band_id', array('type' => 'hidden', 'value' => $bands['Band']['id']));
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
					__('View Band'), 
					array(
						'controller' => 'bands', 
						'action' => 'view', 
						$bands['Band']['id']
					)
				); 
			?>
		</li>
		<li>
			<?php 
				echo $this->Html->link(
					__('List Bands'), 
					array(
						'controller' => 'bands', 
						'action' => 'index'
					)
				); 
			?> 
		</li>
	</ul>
</div>
