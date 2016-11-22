<h2><?php  echo __('Disc Printing Photo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($discPrintingPhoto['DiscPrintingPhoto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($discPrintingPhoto['DiscPrintingPhoto']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($discPrintingPhoto['DiscPrintingPhoto']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Image'); ?></dt>
		<dd>
			<?php 
				echo $this->Html->image(
					DS.'files'.DS.'disc_printing_photo'.DS.'url_image'.DS.$discPrintingPhoto['DiscPrintingPhoto']['id'].DS.urldecode($discPrintingPhoto['DiscPrintingPhoto']['url_image']),
					array(
						'alt' => 'DiscPrintingPhoto_'.$discPrintingPhoto['DiscPrintingPhoto']['id'],
						'width' => '120'
					)
				); 
			?>&nbsp;
		</dd>
	</dl>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Disc Printing Photo'), array('action' => 'edit', $discPrintingPhoto['DiscPrintingPhoto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Disc Printing Photo'), array('action' => 'delete', $discPrintingPhoto['DiscPrintingPhoto']['id']), null, __('Are you sure you want to delete # %s?', $discPrintingPhoto['DiscPrintingPhoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Disc Printing Photos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disc Printing Photo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
