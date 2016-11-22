	<h2><?php echo __('Band Tracks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('band_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('duration'); ?></th>
			<th><?php echo $this->Paginator->sort('url_track'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bandTracks as $bandTrack): ?>
	<tr>
		<td><?php echo h($bandTrack['BandTrack']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bandTrack['Band']['name'], array('controller' => 'bands', 'action' => 'view', $bandTrack['Band']['id'])); ?>
		</td>
		<td><?php echo h($bandTrack['BandTrack']['title']); ?>&nbsp;</td>
		<td><?php echo h($bandTrack['BandTrack']['duration']); ?>&nbsp;</td>
		<td><?php echo h($bandTrack['BandTrack']['url_track']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bandTrack['BandTrack']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bandTrack['BandTrack']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bandTrack['BandTrack']['id']), null, __('Are you sure you want to delete # %s?', $bandTrack['BandTrack']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Band Track'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bands'), array('controller' => 'bands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Band'), array('controller' => 'bands', 'action' => 'add')); ?> </li>
	</ul>
</div>
