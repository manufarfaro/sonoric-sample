<h2><?php  echo __('Clinic'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clinic['Clinic']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($clinic['Clinic']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Image'); ?></dt>
		<dd>
			<?php 
				echo $this->Html->image(
					DS.'files'.DS.'clinic'.DS.'url_image'.DS.$clinic['Clinic']['id'].DS.$clinic['Clinic']['url_image'],
					array(
						'alt' => 'clinicCourse_'.$clinic['Clinic']['id'],
						'width' => '120'
					)
				); 
			?>&nbsp;
		</dd>
		<dt><?php echo __('Url Link'); ?></dt>
		<dd>
			<?php echo h($clinic['Clinic']['url_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DateCreated'); ?></dt>
		<dd>
			<?php echo h($clinic['Clinic']['dateCreated']); ?>
			&nbsp;
		</dd>
	</dl>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clinic'), array('action' => 'edit', $clinic['Clinic']['id'])); ?> </li>
		<li>
			<?php echo $this->Html->link(__('Change Image'), array('action' => 'change_image', $clinic['Clinic']['id'])); ?>
		</li>
		<li><?php echo $this->Form->postLink(__('Delete Clinic'), array('action' => 'delete', $clinic['Clinic']['id']), null, __('Are you sure you want to delete # %s?', $clinic['Clinic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clinics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clinic'), array('action' => 'add')); ?> </li>
	</ul>
</div>
