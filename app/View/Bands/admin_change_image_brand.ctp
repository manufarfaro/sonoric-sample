<?php echo $this->Form->create('Band', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Band'); ?></legend>
	<?php
		echo $this->Form->input('id');
	?>
	<div class="input text required">
		<label for="UserUsername">Nombre</label>
		<p style="font-weight:normal;font-family:'frutiger linotype','lucida grande','verdana',sans-serif;font-size:140%; padding:1%;">
			<?php echo $band['Band']['name']; ?>
		</p>
	</div>
	<?php
		echo $this->Form->input('genre_id', array('type' => 'hidden', 'value' => $band['Band']['genre_id']));
		echo $this->Form->input('name', array('type' => 'hidden', 'value' => $band['Band']['name']));
		echo $this->Form->input('about', array('type' => 'hidden', 'value' => $band['Band']['about']));
		echo $this->Form->input('contact', array('type' => 'hidden', 'value' => $band['Band']['contact']));
		echo $this->Form->input('url_image_logo', array('type' => 'hidden', 'value' => $band['Band']['url_image_logo']));
		echo $this->Form->input('url_image_brand', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Bands'), array('action' => 'index')); ?></li>
		<li>
			<?php 
				echo $this->Html->link(
					__('Edit'), 
					array(
						'action' => 'edit',
						$band['Band']['id']
					)
				); 
			?>
		</li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $band['Band']['id']), null, __('Are you sure you want to delete # %s?', $band['Band']['id'])); ?></li>
	</ul>
</div>