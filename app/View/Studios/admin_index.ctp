<h2><?php  echo __('Studio'); ?></h2>
	<dl>
		<dt><?php echo __('About'); ?></dt>
		<dd>
			<?php echo $studio['Studio']['about']; ?>
			&nbsp;
		</dd>
	</dl>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Studio'), array('action' => 'edit')); ?> </li>
	</ul>
</div>