<h2><?php  echo __('Disc Arts Photo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($discArtsPhoto['DiscArtsPhoto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($discArtsPhoto['DiscArtsPhoto']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($discArtsPhoto['DiscArtsPhoto']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Image'); ?></dt>
		<dd>
			<?php 
				echo $this->Html->image(
					DS.'files'.DS.'disc_arts_photo'.DS.'url_image'.DS.$discArtsPhoto['DiscArtsPhoto']['id'].DS.$discArtsPhoto['DiscArtsPhoto']['url_image'],
					array(
						'alt' => 'DiscArtsPhoto_'.$discArtsPhoto['DiscArtsPhoto']['id'],
						'width' => '120'
					)
				); 
			?>&nbsp;
		</dd>
	</dl>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php echo $this->Html->link(__('Edit Disc Arts Photo'), array('action' => 'edit', $discArtsPhoto['DiscArtsPhoto']['id'])); ?> 
		</li>
		<li>
			<?php 
				echo $this->Html->link(
					__('Change Image'), 
					array(
						'action' => 'change_image', 
						$discArtsPhoto['DiscArtsPhoto']['id']
					)
				); 
			?> 
		</li>
		<li><?php echo $this->Form->postLink(__('Delete Disc Arts Photo'), array('action' => 'delete', $discArtsPhoto['DiscArtsPhoto']['id']), null, __('Are you sure you want to delete # %s?', $discArtsPhoto['DiscArtsPhoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Disc Arts Photos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disc Arts Photo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
