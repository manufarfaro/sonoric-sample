	<h2><?php echo __('Clinics'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('url_image'); ?></th>
			<th><?php echo $this->Paginator->sort('url_link'); ?></th>
			<th><?php echo $this->Paginator->sort('dateCreated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clinics as $clinic): ?>
	<tr>
		<td><?php echo h($clinic['Clinic']['id']); ?>&nbsp;</td>
		<td><?php echo h($clinic['Clinic']['name']); ?>&nbsp;</td>
		<td>
			<?php 
				echo $this->Html->image(
					DS.'files'.DS.'clinic'.DS.'url_image'.DS.$clinic['Clinic']['id'].DS.$clinic['Clinic']['url_image'],
					array(
						'alt' => 'clinicCourse_'.$clinic['Clinic']['id'],
						'width' => '120'
					)
				); 
			?>&nbsp;
		</td>
		<td><?php echo h($clinic['Clinic']['url_link']); ?>&nbsp;</td>
		<td><?php echo h($clinic['Clinic']['dateCreated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clinic['Clinic']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clinic['Clinic']['id'])); ?>
			<?php echo $this->Html->link(__('Change Image'), array('action' => 'change_image', $clinic['Clinic']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clinic['Clinic']['id']), null, __('Are you sure you want to delete # %s?', $clinic['Clinic']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Clinic'), array('action' => 'add')); ?></li>
	</ul>
</div>
