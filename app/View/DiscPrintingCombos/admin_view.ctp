<h2><?php  echo __('Disc Printing Combo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($discPrintingCombo['DiscPrintingCombo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($discPrintingCombo['DiscPrintingCombo']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo $discPrintingCombo['DiscPrintingCombo']['text']; ?>
			&nbsp;
		</dd>
	</dl>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Disc Printing Combo'), array('action' => 'edit', $discPrintingCombo['DiscPrintingCombo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Disc Printing Combo'), array('action' => 'delete', $discPrintingCombo['DiscPrintingCombo']['id']), null, __('Are you sure you want to delete # %s?', $discPrintingCombo['DiscPrintingCombo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Disc Printing Combos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disc Printing Combo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
