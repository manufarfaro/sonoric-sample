
<?php echo $this->Form->create('BandTrack', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Band Track'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('band_id', array('disabled' => true));
		echo $this->Form->input('band_id', array('type' => 'hidden'));
		echo $this->Form->input('title', array('type' => 'hidden'));
		echo $this->Form->input('duration', array('type' => 'hidden'));
		echo $this->Form->input('url_track', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit'), array('controller' => 'band_tracks', 'action' => 'edit', $bandTrack['BandTrack']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('View Band'), array('controller' => 'bands', 'action' => 'view', $bandTrack['BandTrack']['band_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bandTrack['BandTrack']['id']), null, __('Are you sure you want to delete # %s?', $bandTrack['BandTrack']['id'])); ?></li>
	</ul>
</div>
