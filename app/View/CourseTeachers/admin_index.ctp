<h2>
	<?php echo __('Course Teachers'); ?>
</h2>
<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('course_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
	</tr>
	<?php foreach ($courseTeachers as $courseTeacher): ?>
		<tr>
			<td><?php echo h($courseTeacher['CourseTeacher']['id']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($courseTeacher['Course']['title'], array('controller' => 'courses', 'action' => 'view', $courseTeacher['Course']['id'])); ?>
			</td>
			<td><?php echo h($courseTeacher['CourseTeacher']['name']); ?>&nbsp;</td>
			<td><?php echo h($courseTeacher['CourseTeacher']['description']); ?>&nbsp;</td>
		</tr>
	<?php endforeach; ?>
</table>
<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	
</p>
<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
</div>
