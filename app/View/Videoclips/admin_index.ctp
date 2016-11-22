<h2><?php  echo __('Videoclip'); ?></h2>
	<dl>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo $videoclip['Videoclip']['text']; ?>
			&nbsp;
		</dd>
		<dt><?php //echo __('Url Image'); ?></dt>
		<dd>

			<?php 
			/*
				echo $this->Html->image(
					DS.'files'.DS.'videoclip'.DS.'url_image'.DS.$videoclip['Videoclip']['id'].DS.$videoclip['Videoclip']['url_image'],
					array(
						'alt' => 'videoclip_'.$videoclip['Videoclip']['id'],
						'width' => '120'
					)
				); 
				*/
			?>&nbsp;
		</dd>
		<dt><?php echo __('Url Sample Video'); ?></dt>
		<dd>
			<?php 
				echo $this->Youtube->video(
					$videoclip['Videoclip']['url_sample_video'], 
					array(),
					array()
					); 
			?>
			&nbsp;
		</dd>
	</dl>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php 
				echo $this->Html->link(
					__('Edit Videoclip'), 
					array(
						'action' => 'edit'
					)
				); 
			?> 
		</li>
		<li>
			<?php 
			/*
				echo $this->Html->link(
					__('Change Image'), 
					array(
						'action' => 'change_image'
					)
				); 
			*/
			?> 
		</li>
	</ul>
</div>
