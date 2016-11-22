<h2><?php  echo __('Videoclip Combo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($videoclipCombo['VideoclipCombo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($videoclipCombo['VideoclipCombo']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo $videoclipCombo['VideoclipCombo']['text']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Estimated'); ?></dt>
		<dd>
			<?php echo h($videoclipCombo['VideoclipCombo']['work_estimated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Duration'); ?></dt>
		<dd>
			<?php echo h($videoclipCombo['VideoclipCombo']['work_duration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Cost'); ?></dt>
		<dd>
			<?php echo h($videoclipCombo['VideoclipCombo']['work_cost']); ?>
			&nbsp;
		</dd>
	</dl>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Videoclip Combo'), array('action' => 'edit', $videoclipCombo['VideoclipCombo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Videoclip Combo'), array('action' => 'delete', $videoclipCombo['VideoclipCombo']['id']), null, __('Are you sure you want to delete # %s?', $videoclipCombo['VideoclipCombo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Videoclip Combos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Videoclip Combo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
