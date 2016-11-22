
<?php echo $this->Form->create('BandTrack'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Band Track'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('band_id', array('disabled' => true));
		echo $this->Form->input('band_id', array('type' => 'hidden'));
		echo $this->Form->input('title');
		echo $this->Form->input('duration');
		echo $this->Form->input('url_track', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Change File Track'), array('controller' => 'band_tracks', 'action' => 'change_file_track', $this->Form->value('BandTrack.id'))); ?> </li>
		<li><?php echo $this->Html->link(__('View Band'), array('controller' => 'bands', 'action' => 'view', $this->Form->value('BandTrack.band_id'))); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BandTrack.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BandTrack.id'))); ?></li>
	</ul>
</div>
