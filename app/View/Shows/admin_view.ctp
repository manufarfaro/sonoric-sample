<h2><?php  echo __('Show'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($show['Show']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo $show['Show']['text']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Image'); ?></dt>
		<dd>
			<td>
			<?php 
				echo $this->Html->image(
					DS.'files'.DS.'show'.DS.'url_image'.DS.$show['Show']['id'].DS.$show['Show']['url_image'],
					array(
						'alt' => 'showCourse_'.$show['Show']['id'],
						'width' => '120'
					)
				); 
			?>&nbsp;
		</td>
		</dd>
		<dt><?php echo __('Url Moreinfo'); ?></dt>
		<dd>
			<?php echo h($show['Show']['url_moreinfo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event Date'); ?></dt>
		<dd>
			<?php echo h($show['Show']['event_date']); ?>
			&nbsp;
		</dd>
		<dt>
			<?php echo __('DateCreated'); ?>
		</dt>
		<dd>
			<?php echo h($show['Show']['dateCreated']); ?>
			&nbsp;
		</dd>
	</dl>
<div class="actions">
	<h3>
		<?php 
			echo __('Actions'); 
		?>
	</h3>
	<ul>
		<li>
			<?php 
				echo $this->Html->link(
					__('Edit Show'), 
					array(
						'action' => 'edit', 
						$show['Show']['id']
					)
				); 
			?> 
		</li>
		<li>
			<?php 
				echo $this->Html->link(
					__('Change Image'), 
					array(
						'action' => 'change_image', 
						$show['Show']['id']
					)
				); 
			?>
		</li>
		<li>
			<?php 
				echo $this->Form->postLink(
					__('Delete Show'), 
					array(
						'action' => 'delete', 
						$show['Show']['id']
					), 
					null, 
					__(
						'Are you sure you want to delete # %s?', 
						$show['Show']['id']
					)
				); 
			?> 
		</li>
		<li>
			<?php 
				echo $this->Html->link(
					__('List Shows'), 
					array(
						'action' => 'index'
					)
				); 
			?> 
		</li>
		<li>
			<?php 
				echo $this->Html->link(
					__('New Show'), 
					array(
						'action' => 'add'
					)
				); 
			?>
		</li>
	</ul>
</div>
