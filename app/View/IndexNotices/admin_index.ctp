	<h2><?php echo __('Index Notices'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('url_image'); ?></th>
			<th><?php echo $this->Paginator->sort('dateCreated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($indexNotices as $indexNotice): ?>
	<tr>
		<td><?php echo h($indexNotice['IndexNotice']['id']); ?>&nbsp;</td>
		<td><?php echo h($indexNotice['IndexNotice']['title']); ?>&nbsp;</td>
		<td>
			<?php 
				echo $this->Html->image(
					DS.'files'.DS.'index_notice'.DS.'url_image'.DS.$indexNotice['IndexNotice']['id'].DS.$indexNotice['IndexNotice']['url_image'],
					array(
						'alt' => 'indexNoticeCourse_'.$indexNotice['IndexNotice']['id'],
						'width' => '120'
					)
				); 
			?>&nbsp;
		</td>
		<td><?php echo h($indexNotice['IndexNotice']['dateCreated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $indexNotice['IndexNotice']['id'])); ?>
			<?php 
				echo $this->Html->link(
					__('Edit'), 
					array(
						'action' => 'edit', 
						$indexNotice['IndexNotice']['id']
					)
				); 
			?>
			<?php 
				echo $this->Html->link(
					__('Change Image'), 
					array(
						'action' => 'change_image', 
						$indexNotice['IndexNotice']['id']
					)
				); 
			?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $indexNotice['IndexNotice']['id']), null, __('Are you sure you want to delete # %s?', $indexNotice['IndexNotice']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Index Notice'), array('action' => 'add')); ?></li>
	</ul>
</div>
