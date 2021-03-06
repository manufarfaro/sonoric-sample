	<h2><?php echo __('Disc Photo Photos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('url_image'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($discPhotoPhotos as $discPhotoPhoto): ?>
	<tr>
		<td><?php echo h($discPhotoPhoto['DiscPhotoPhoto']['id']); ?>&nbsp;</td>
		<td><?php echo h($discPhotoPhoto['DiscPhotoPhoto']['title']); ?>&nbsp;</td>
		<td><?php echo h($discPhotoPhoto['DiscPhotoPhoto']['description']); ?>&nbsp;</td>
		<td>
			<?php 
				echo $this->Html->image(
					DS.'files'.DS.'disc_photo_photo'.DS.'url_image'.DS.$discPhotoPhoto['DiscPhotoPhoto']['id'].DS.urldecode($discPhotoPhoto['DiscPhotoPhoto']['url_image']),
					array(
						'alt' => 'DiscPhotoPhoto_'.$discPhotoPhoto['DiscPhotoPhoto']['id'],
						'width' => '120'
					)
				); 
			?>&nbsp;
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $discPhotoPhoto['DiscPhotoPhoto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $discPhotoPhoto['DiscPhotoPhoto']['id'])); ?>
			<?php echo $this->Html->link(__('Change Image'), array('action' => 'change_image', $discPhotoPhoto['DiscPhotoPhoto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $discPhotoPhoto['DiscPhotoPhoto']['id']), null, __('Are you sure you want to delete # %s?', $discPhotoPhoto['DiscPhotoPhoto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Disc Photo Photo'), array('action' => 'add')); ?></li>
	</ul>
</div>
