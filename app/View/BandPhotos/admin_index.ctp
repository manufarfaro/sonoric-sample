	<h2><?php echo __('Band Photos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('band_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('url_image'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bandPhotos as $bandPhoto): ?>
	<tr>
		<td><?php echo h($bandPhoto['BandPhoto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bandPhoto['Band']['name'], array('controller' => 'bands', 'action' => 'view', $bandPhoto['Band']['id'])); ?>
		</td>
		<td><?php echo h($bandPhoto['BandPhoto']['title']); ?>&nbsp;</td>
		<td><?php echo h($bandPhoto['BandPhoto']['description']); ?>&nbsp;</td>
		<td><?php echo h($bandPhoto['BandPhoto']['url_image']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bandPhoto['BandPhoto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bandPhoto['BandPhoto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bandPhoto['BandPhoto']['id']), null, __('Are you sure you want to delete # %s?', $bandPhoto['BandPhoto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Band Photo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bands'), array('controller' => 'bands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Band'), array('controller' => 'bands', 'action' => 'add')); ?> </li>
	</ul>
</div>
