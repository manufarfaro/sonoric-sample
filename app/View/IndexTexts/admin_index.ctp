<h2><?php  echo __('Index Text'); ?></h2>
	<dl>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo $indexText['IndexText']['text']; ?>
			&nbsp;
		</dd>
	</dl>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php 
				echo $this->Html->link(
					__('Edit Index Text'), 
					array(
						'action' => 'edit', 
						$indexText['IndexText']['id']
					)
				); 
			?> 
		</li>
	</ul>
</div>
