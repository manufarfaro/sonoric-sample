<h2><?php  echo __('Disc Photo Combo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($discPhotoCombo['DiscPhotoCombo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($discPhotoCombo['DiscPhotoCombo']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo $discPhotoCombo['DiscPhotoCombo']['text']; ?>
			&nbsp;
		</dd>
	</dl>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Disc Photo Combo'), array('action' => 'edit', $discPhotoCombo['DiscPhotoCombo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Disc Photo Combo'), array('action' => 'delete', $discPhotoCombo['DiscPhotoCombo']['id']), null, __('Are you sure you want to delete # %s?', $discPhotoCombo['DiscPhotoCombo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Disc Photo Combos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disc Photo Combo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
