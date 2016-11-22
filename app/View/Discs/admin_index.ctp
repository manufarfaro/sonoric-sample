<h2><?php  echo __('Discs'); ?></h2>
	<dl>
		<dt><?php echo __('Text Printing'); ?></dt>
		<dd>
			<?php echo $Disc['Disc']['text_printing']; ?>
			&nbsp;
		</dd>
	</dl>
	<dl>
		<dt><?php echo __('Text Arts'); ?></dt>
		<dd>
			<?php echo $Disc['Disc']['text_arts']; ?>
			&nbsp;
		</dd>
	</dl>
	<dl>
		<dt><?php echo __('Text Photography'); ?></dt>
		<dd>
			<?php echo $Disc['Disc']['text_photos']; ?>
			&nbsp;
		</dd>
	</dl>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php 
				echo $this->Html->link(
					__('Edit Disc Art'), 
					array(
						'action' => 'edit'
					)
				); 
			?> 
		</li>
	</ul>
</div>
