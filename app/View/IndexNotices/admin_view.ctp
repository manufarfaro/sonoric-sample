<h2><?php  echo __('Index Notice'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($indexNotice['IndexNotice']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($indexNotice['IndexNotice']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo $indexNotice['IndexNotice']['text']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Image'); ?></dt>
		<dd>
			<?php 
				echo $this->Html->image(
					DS.'files'.DS.'index_notice'.DS.'url_image'.DS.$indexNotice['IndexNotice']['id'].DS.$indexNotice['IndexNotice']['url_image'],
					array(
						'alt' => 'indexNoticeCourse_'.$indexNotice['IndexNotice']['id'],
						'width' => '120'
					)
				); 
			?>&nbsp;
		</dd>
		<dt><?php echo __('DateCreated'); ?></dt>
		<dd>
			<?php echo h($indexNotice['IndexNotice']['dateCreated']); ?>
			&nbsp;
		</dd>
	</dl>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Index Notice'), array('action' => 'edit', $indexNotice['IndexNotice']['id'])); ?> </li>
		<li>
			<?php 
				echo $this->Html->link(
					__('Change Image'), 
					array(
						'action' => 'change_image', 
						$indexNotice['IndexNotice']['id']
					)
				); 
			?>
		</li>
		<li><?php echo $this->Form->postLink(__('Delete Index Notice'), array('action' => 'delete', $indexNotice['IndexNotice']['id']), null, __('Are you sure you want to delete # %s?', $indexNotice['IndexNotice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Index Notices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Index Notice'), array('action' => 'add')); ?> </li>
	</ul>
</div>
