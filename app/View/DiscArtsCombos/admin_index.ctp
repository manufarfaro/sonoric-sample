	<h2><?php echo __('Disc Arts Combos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('text'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($discArtsCombos as $discArtsCombo): ?>
	<tr>
		<td><?php echo h($discArtsCombo['DiscArtsCombo']['id']); ?>&nbsp;</td>
		<td><?php echo h($discArtsCombo['DiscArtsCombo']['title']); ?>&nbsp;</td>
		<td><?php echo $discArtsCombo['DiscArtsCombo']['text']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $discArtsCombo['DiscArtsCombo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $discArtsCombo['DiscArtsCombo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $discArtsCombo['DiscArtsCombo']['id']), null, __('Are you sure you want to delete # %s?', $discArtsCombo['DiscArtsCombo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Disc Arts Combo'), array('action' => 'add')); ?></li>
	</ul>
</div>
