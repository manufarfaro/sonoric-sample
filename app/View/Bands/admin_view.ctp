<?php echo $this->Html->css('jplayer/jplayer.blue.monday.css'); ?>
<?php echo $this->Html->script('jQuery.jPlayer.2.2.0/jquery.jplayer.min'); ?>

<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){
<?php foreach ($band['tracks'] as $tracks): ?> 
	<?php 
		$jId = '"#jquery_jplayer_'. $tracks['id'] . '"'; 
		$jp_container = '"#jp_container_'. $tracks['id'] .'"';
	?>
	$(<?php echo $jId; ?>).jPlayer({
		ready: function (event) {
			$(this).jPlayer("setMedia", {
				mp3:<?php echo "'".$this->webroot.'files'.DS.'band_track'.DS.'url_track'.DS.$tracks['id'].DS.$tracks['url_track']."'"; ?>,
				free: true
			});
		},
		cssSelectorAncestor: <?php echo $jp_container; ?>,
		swfPath: <?php echo "'".$this->webroot.JS_URL."jQuery.jPlayer.2.2.0".DS."'"; ?>,
		supplied: "mp3",
		wmode: "window"
	});
<?php endforeach; ?>
});
//]]>
</script>

<h2><?php  echo __('Band'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($band['Band']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genre'); ?></dt>
		<dd>
			<?php echo $this->Html->link($band['Genre']['name'], array('controller' => 'genres', 'action' => 'view', $band['Genre']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($band['Band']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('About'); ?></dt>
		<dd>
			<?php echo $band['Band']['about']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo $band['Band']['contact']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Image Logo'); ?></dt>
		<dd>
			<?php 
				echo $this->Html->image(
					DS.'files'.DS.'band'.DS.'url_image_logo'.DS.$band['Band']['id'].DS.$band['Band']['url_image_logo'],
					array(
						'alt' => 'imageBandLogo_'.$band['Band']['id'],
						'width' => '120'
					)
				); 
			?>&nbsp;
		</dd>
		<dt><?php echo __('Url Image Brand'); ?></dt>
		<dd>
			<?php 
					echo $this->Html->image(
						DS.'files'.DS.'band'.DS.'url_image_brand'.DS.$band['Band']['id'].DS.$band['Band']['url_image_brand'],
						array(
							'alt' => 'imageBandBrand_'.$band['Band']['id'],
							'width' => '120'
						)
					); 
			?>&nbsp;
		</dd>
	</dl>


<div class="related">
	<h3><?php echo __('Related Band Tracks'); ?></h3>
	<?php if (!empty($band['tracks'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Duration'); ?></th>
		<th><?php echo __('Url Track'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($band['tracks'] as $tracks): ?>
		<tr>
			<td><?php echo $tracks['id']; ?></td>
			<td><?php echo $tracks['title']; ?></td>
			<td><?php echo $tracks['duration']; ?></td>
			<td>
				<?php echo '<div id="jquery_jplayer_' . $tracks['id'] .'" class="jp-jplayer"></div>' ?>
				<?php echo '<div id="jp_container_'. $tracks['id'] .'" class="jp-audio">'; ?>
		<!--<div id="jp_container_1" class="jp-audio">-->
			<div class="jp-type-single">
				<div class="jp-gui jp-interface">
					<ul class="jp-controls">
						<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
						<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
						<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
						<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
						<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
						<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
					</ul>
					<div class="jp-progress">
						<div class="jp-seek-bar">
							<div class="jp-play-bar"></div>
						</div>
					</div>
					<div class="jp-volume-bar">
						<div class="jp-volume-bar-value"></div>
					</div>
					<div class="jp-time-holder">
						<div class="jp-current-time"></div>
						<div class="jp-duration"></div>

						<ul class="jp-toggles">
							<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
							<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
						</ul>
					</div>
				</div>
				<div class="jp-no-solution">
					<span>Update Required</span>
					To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
				</div>
			</div>
		</div>
			</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'band_tracks', 'action' => 'view', $tracks['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'band_tracks', 'action' => 'edit', $tracks['id'])); ?>
				<?php 
				echo $this->Html->link(__('Change File Track'), array('controller' => 'band_tracks','action' => 'change_file_track', $tracks['id'])); 
				?> 
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'band_tracks', 'action' => 'delete', $tracks['id']), null, __('Are you sure you want to delete # %s?', $tracks['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tracks'), array('controller' => 'band_tracks', 'action' => 'add', $band['Band']['id'])); ?> </li>
		</ul>
	</div>
</div>

<div class="related">
	<h3><?php echo __('Related Band Photos'); ?></h3>
	<?php if (!empty($band['photos'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Url Image'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($band['photos'] as $photos): ?>
		<tr>
			<td><?php echo $photos['id']; ?></td>
			<td><?php echo $photos['title']; ?></td>
			<td><?php echo $photos['description']; ?></td>
			<td>
				<?php 
				echo $this->Html->image(
					DS.'files'.DS.'band_photo'.DS.'url_image'.DS.$photos['id'].DS.$photos['url_image'],
					array(
						'alt' => 'imageBandPhoto_'.$photos['id'],
						'width' => '120'
					)
				); 
			?>&nbsp;
			</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'band_photos', 'action' => 'view', $photos['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'band_photos', 'action' => 'edit', $photos['id'])); ?>
				<?php echo $this->Html->link(__('Change Image'), array('controller' => 'band_photos', 'action' => 'change_image', $photos['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'band_photos', 'action' => 'delete', $photos['id']), null, __('Are you sure you want to delete # %s?', $photos['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Photos'), array('controller' => 'band_photos', 'action' => 'add', $band['Band']['id'])); ?> </li>
		</ul>
	</div>
</div>


<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Bands'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Band'), array('action' => 'edit', $band['Band']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Change Logo'), array('action' => 'change_image_logo', $band['Band']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Change Brand'), array('action' => 'change_image_brand', $band['Band']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Band'), array('action' => 'delete', $band['Band']['id']), null, __('Are you sure you want to delete # %s?', $band['Band']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Band'), array('action' => 'add')); ?> </li>
		
	</ul>
</div>
