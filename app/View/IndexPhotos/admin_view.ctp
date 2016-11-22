<h2><?php  echo __('Index Photo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($indexPhoto['IndexPhoto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($indexPhoto['IndexPhoto']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($indexPhoto['IndexPhoto']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Image'); ?></dt>
		<dd>
			<?php 
				echo $this->Html->image(
					DS.'files'.DS.'index_photo'.DS.'url_image'.DS.$indexPhoto['IndexPhoto']['id'].DS.$indexPhoto['IndexPhoto']['url_image'],
					array(
						'alt' => 'indexPhotoCourse_'.$indexPhoto['IndexPhoto']['id'],
						'width' => '120'
					)
				); 
			?>&nbsp;
		</dd>
	</dl>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Index Photo'), array('action' => 'edit', $indexPhoto['IndexPhoto']['id'])); ?> </li>
		<li>
			<?php 
				echo $this->Html->link(
					__('Change Image'), 
					array(
						'action' => 'change_image', 
						$indexPhoto['IndexPhoto']['id']
					)
				); 
			?>
		</li>
		<li><?php echo $this->Form->postLink(__('Delete Index Photo'), array('action' => 'delete', $indexPhoto['IndexPhoto']['id']), null, __('Are you sure you want to delete # %s?', $indexPhoto['IndexPhoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Index Photos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Index Photo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
