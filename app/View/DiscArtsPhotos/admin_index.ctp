	<h2><?php echo __('Disc Arts Photos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('url_image'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($discArtsPhotos as $discArtsPhoto): ?>
	<tr>
		<td><?php echo h($discArtsPhoto['DiscArtsPhoto']['id']); ?>&nbsp;</td>
		<td><?php echo h($discArtsPhoto['DiscArtsPhoto']['title']); ?>&nbsp;</td>
		<td><?php echo h($discArtsPhoto['DiscArtsPhoto']['description']); ?>&nbsp;</td>
		<td>
			<?php 
				echo $this->Html->image(
					DS.'files'.DS.'disc_arts_photo'.DS.'url_image'.DS.$discArtsPhoto['DiscArtsPhoto']['id'].DS.urldecode($discArtsPhoto['DiscArtsPhoto']['url_image']),
					array(
						'alt' => 'DiscArtsPhoto_'.$discArtsPhoto['DiscArtsPhoto']['id'],
						'width' => '120'
					)
				); 
			?>&nbsp;
		</td>

		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $discArtsPhoto['DiscArtsPhoto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $discArtsPhoto['DiscArtsPhoto']['id'])); ?>
			<?php echo $this->Html->link(__('Change Image'), array('action' => 'change_image', $discArtsPhoto['DiscArtsPhoto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $discArtsPhoto['DiscArtsPhoto']['id']), null, __('Are you sure you want to delete # %s?', $discArtsPhoto['DiscArtsPhoto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Disc Arts Photo'), array('action' => 'add')); ?></li>
	</ul>
</div>
