<h2><?php  echo __('Hiring'); ?></h2>
	<dl>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo $hiring['Hiring']['text']; ?>
			&nbsp;
		</dd>
	</dl>
	
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hiring'), array('action' => 'edit', $hiring['Hiring']['id'])); ?> </li>
	</ul>
</div>
