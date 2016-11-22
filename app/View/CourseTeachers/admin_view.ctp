<h2><?php  echo __('Course Teacher'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($courseTeacher['CourseTeacher']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Course'); ?></dt>
		<dd>
			<?php echo $this->Html->link($courseTeacher['Course']['title'], array('controller' => 'courses', 'action' => 'view', $courseTeacher['Course']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($courseTeacher['CourseTeacher']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($courseTeacher['CourseTeacher']['description']); ?>
			&nbsp;
		</dd>
	</dl>
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
						$courseTeacher['CourseTeacher']['course_id']
					)
				); 
			?>
		</li>
		<li>
			<?php 
				echo $this->Html->link(
					__('Edit Course Teacher'), 
					array(
						'action' => 'edit', 
						$courseTeacher['CourseTeacher']['id']
					)
				); 
			?> 
		</li>
		<li>
			<?php 
				echo $this->Form->postLink(
					__('Delete Course Teacher'), 
					array(
						'action' => 'delete', 
						$courseTeacher['CourseTeacher']['id']), 
						null, 
						__(
							'Are you sure you want to delete # %s?', 
							$courseTeacher['CourseTeacher']['id']
						)
				); 
			?> 
		</li>
	</ul>
</div>
