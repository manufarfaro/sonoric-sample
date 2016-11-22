	<h2><?php echo __('Bands'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('genre_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('url_image_logo'); ?></th>
			<th><?php echo $this->Paginator->sort('url_image_brand'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bands as $band): ?>
	<tr>
		<td><?php echo h($band['Band']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($band['Genre']['name'], array('controller' => 'genres', 'action' => 'view', $band['Genre']['id'])); ?>
		</td>
		<td><?php echo h($band['Band']['name']); ?>&nbsp;</td>
		<td>
			<?php 
				echo $this->Html->image(
					DS.'files'.DS.'band'.DS.'url_image_logo'.DS.$band['Band']['id'].DS.$band['Band']['url_image_logo'],
					array(
						'alt' => 'imageBandLogo_'.$band['Band']['id'],
						'width' => '120'
					)
				); 
			?>&nbsp;
		</td>
		<td>
			<?php 
					echo $this->Html->image(
						DS.'files'.DS.'band'.DS.'url_image_brand'.DS.$band['Band']['id'].DS.$band['Band']['url_image_brand'],
						array(
							'alt' => 'imageBandBrand_'.$band['Band']['id'],
							'width' => '120'
						)
					); 
			?>&nbsp;
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $band['Band']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $band['Band']['id'])); ?>
			<?php echo $this->Html->link(__('Change Logo'), array('action' => 'change_image_logo', $band['Band']['id'])); ?>
			<?php echo $this->Html->link(__('Change Brand'), array('action' => 'change_image_brand', $band['Band']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $band['Band']['id']), null, __('Are you sure you want to delete # %s?', $band['Band']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Band'), array('action' => 'add')); ?></li>
	</ul>
</div>
