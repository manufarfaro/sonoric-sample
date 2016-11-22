<?php echo $this->Form->create('DiscPhotoPhoto', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Disc Photo Photo'); ?></legend>
	<?php
		echo $this->Form->input('id');
	?>
	<div class="input text required">
		<label for="UserUsername">Titulo</label>
		<p style="font-weight:normal;font-family:'frutiger linotype','lucida grande','verdana',sans-serif;font-size:140%; padding:1%;">
			<?php echo $discPhotoPhoto['DiscPhotoPhoto']['title']; ?>
		</p>
	</div>
	<?php
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
				echo $this->Html->link(
					__('Edit'), 
					array(
						'action' => 'edit', 
						$discPhotoPhoto['DiscPhotoPhoto']['id']
					)
				); 
			?> 
		</li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $discPhotoPhoto['DiscPhotoPhoto']['title']), null, __('Are you sure you want to delete # %s?', $discPhotoPhoto['DiscPhotoPhoto']['id'])); ?></li>
		<li><?php echo $this->Html->link(__('List Disc Photo Photos'), array('action' => 'index')); ?></li>
	</ul>
</div>
