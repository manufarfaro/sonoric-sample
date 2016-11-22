<?php 
	echo $this->Form->create(
		'Course',
		array(
			'type' => 'file'
		)
	); 
?>
	<fieldset>
		<legend><?php echo __('Admin Edit Course'); ?></legend>
	<?php
		echo $this->Form->input('id');
	?>
	<div class="input text required">
		<label for="UserUsername">Titulo</label>
		<p style="font-weight:normal;font-family:'frutiger linotype','lucida grande','verdana',sans-serif;font-size:140%; padding:1%;">
			<?php echo $course['Course']['title']; ?>
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
		<li>
			<?php 
				echo $this->Html->link(
					__('List Courses'), 
					array(
						'action' => 'index'
					)
				); 
			?>
		</li>
		<li>
			<?php 
				echo $this->Html->link(
					__('Edit Course'), 
					array(
						'action' => 'edit', 
						$course['Course']['id']
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
						$course['Course']['id']
					), 
					null, 
					__(
						'Are you sure you want to delete # %s?', 
						$course['Course']['id']
					)
				); 
			?>
		</li>
	</ul>
</div>
