<?php echo $this->Form->create('CourseTeacher'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Course Teacher'); ?></legend>
	<?php
		echo $this->Form->input('id');
	?>
		<div class="input text required">
		<label for="UserUsername"><?= __('Course'); ?></label>
		<p style="font-weight:normal;font-family:'frutiger linotype','lucida grande','verdana',sans-serif;font-size:140%; padding:1%;">
			<?= $courses['Course']['title']; ?>
		</p>
	</div>

	<?php
		echo $this->Form->input(
			'course_id', 
			array(
				'type' => 'hidden',
				'value' => $courses['Course']['id']
			)
		);
		//echo $this->Form->input('course_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php 
				echo $this->Html->link(
					__('View Course'), 
					array(
						'controller' => 'Courses',
						'action' => 'view',
						$this->Form->value('CourseTeacher.course_id')
					)
				); 
			?>
		</li>
		<li>
			<?php 
				echo $this->Html->link(
					__('List Courses'), 
					array(
						'controller' => 'courses', 
						'action' => 'index'
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
						$this->Form->value('CourseTeacher.id')
					), 
					null, 
					__(
						'Are you sure you want to delete # %s?', 
						$this->Form->value('CourseTeacher.id')
					)
				);
			?>
		</li>
	</ul>
</div>
