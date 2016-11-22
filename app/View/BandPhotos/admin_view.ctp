<h2><?php  echo __('Band Photo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bandPhoto['BandPhoto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Band'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bandPhoto['Band']['name'], array('controller' => 'bands', 'action' => 'view', $bandPhoto['Band']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($bandPhoto['BandPhoto']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($bandPhoto['BandPhoto']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Image'); ?></dt>
		<dd>
			<?php 
				echo $this->Html->image(
					DS.'files'.DS.'band_photo'.DS.'url_image'.DS.$bandPhoto['BandPhoto']['id'].DS.$bandPhoto['BandPhoto']['url_image'],
					array(
						'alt' => 'imageBandPhoto_'.$bandPhoto['BandPhoto']['id'],
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
			<?php 
				echo $this->Html->link(
					__('Edit Band Photo'), 
					array(
						'action' => 'edit', 
						$bandPhoto['BandPhoto']['id']
					)
				);
			?>
		</li>
		<li>
			<?php 
				echo $this->Html->link(
					__('Change Band Photo'), 
					array(
						'action' => 'change_image', 
						$bandPhoto['BandPhoto']['id']
					)
				);
			?>
		</li>
		<li>
			<?php 
				echo $this->Form->postLink(
					__('Delete Band Photo'),
					array(
						'action' => 'delete', 
						$bandPhoto['BandPhoto']['id']
					), 
					null, 
					__(
						'Are you sure you want to delete # %s?', 
						$bandPhoto['BandPhoto']['id']
					)
				); 
			?>
		</li>
		<li>
			<?php 
				echo $this->Html->link(
					__('View Band'), 
					array(
						'controller' => 'bands',
						'action' => 'view',
						$bandPhoto['BandPhoto']['band_id']
					)
				); 
			?> 
		</li>
		<li>
			<?php 
				echo $this->Html->link(
					__('List Bands'), 
					array(
						'controller' => 'bands', 
						'action' => 'index'
					)
				); 
			?>
		</li>
	</ul>
</div>
