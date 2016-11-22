<h2><?php  echo __('Course'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($course['Course']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($course['Course']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo $course['Course']['text']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Image'); ?></dt>
		<dd>
			<?php 
				echo $this->Html->image(
					DS.'files'.DS.'course'.DS.'url_image'.DS.$course['Course']['id'].DS.$course['Course']['url_image'],
					array(
						'alt' => 'coursePhoto_'.$course['Course']['id'],
						'width' => '120'
					)
				); 
			?>&nbsp;
		</dd>
	</dl>
<div class="related">
	<h3><?php echo __('Related Course Teachers'); ?></h3>
	<?php if (!empty($course['teachers'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['teachers'] as $key => $teachers): 
	?>
		<tr>
			<td><?php echo $teachers['id']; ?></td>
			<td><?php echo $teachers['name']; ?></td>
			<td><?php echo $teachers['description']; ?></td>
			<td class="actions">
				<?php 
					echo $this->Html->link(
						__('View'), 
						array(
							'controller' => 'course_teachers', 
							'action' => 'view', 
							$teachers['id'],
							$course['Course']['id']
						)
					); 
				?>
				<?php 
					echo $this->Html->link(
						__('Edit'), 
						array(
							'controller' => 'course_teachers', 
							'action' => 'edit', 
							$teachers['id']
						)
					); 
				?>
				<?php 
					echo $this->Form->postLink(
						__('Delete'), 
						array(
							'controller' => 'course_teachers', 
							'action' => 'delete', 
							$teachers['id'],
						), 
						null, 
						__(
							'Are you sure you want to delete # %s?', 
							$teachers['id']
						)
					); 
				?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Teachers'), array('controller' => 'course_teachers', 'action' => 'add',$course['Course']['id'])); ?> </li>
		</ul>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course'), array('action' => 'edit', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course'), array('action' => 'delete', $course['Course']['id']), null, __('Are you sure you want to delete # %s?', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('action' => 'add')); ?> </li>
	</ul>
</div>