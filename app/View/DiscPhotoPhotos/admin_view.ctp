<h2><?php  echo __('Disc Photo Photo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($discPhotoPhoto['DiscPhotoPhoto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($discPhotoPhoto['DiscPhotoPhoto']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($discPhotoPhoto['DiscPhotoPhoto']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Image'); ?></dt>
		<dd>
			<?php echo h($discPhotoPhoto['DiscPhotoPhoto']['url_image']); ?>
			&nbsp;
		</dd>
	</dl>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Disc Photo Photo'), array('action' => 'edit', $discPhotoPhoto['DiscPhotoPhoto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Disc Photo Photo'), array('action' => 'delete', $discPhotoPhoto['DiscPhotoPhoto']['id']), null, __('Are you sure you want to delete # %s?', $discPhotoPhoto['DiscPhotoPhoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Disc Photo Photos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disc Photo Photo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
