<?php echo $this->Html->css('jplayer/jplayer.blue.monday.css'); ?>
<?php echo $this->Html->script('jQuery.jPlayer.2.2.0/jquery.jplayer.min'); ?>

<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){

	<?php $jId = '"#jquery_jplayer_'. $bandTrack['BandTrack']['id'] . '"'; ?>
	$(<?php echo $jId; ?>).jPlayer({
		ready: function (event) {
			$(this).jPlayer("setMedia", {
				mp3:<?php echo "'".$this->webroot.'files'.DS.'band_track'.DS.'url_track'.DS.$bandTrack['BandTrack']['id'].DS.$bandTrack['BandTrack']['url_track']."'"; ?>,
				free: true
			});
		},
		
		swfPath: <?php echo "'".$this->webroot.JS_URL."jQuery.jPlayer.2.2.0".DS."'"; ?>,
		supplied: "mp3",
		wmode: "window"
	});
});
//]]>
</script>

<h2><?php  echo __('Band Track'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bandTrack['BandTrack']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Band'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bandTrack['Band']['name'], array('controller' => 'bands', 'action' => 'view', $bandTrack['Band']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($bandTrack['BandTrack']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duration'); ?></dt>
		<dd>
			<?php echo h($bandTrack['BandTrack']['duration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Track'); ?></dt>
		<dd>

			<?php echo '<div id="jquery_jplayer_' . $bandTrack['BandTrack']['id'] .'" class="jp-jplayer"></div>' ?>
		<div id="jp_container_1" class="jp-audio">
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
		</dd>
	</dl>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li>
			<?php 
				echo $this->Html->link(__('Edit Band Track'), array('action' => 'edit', $bandTrack['BandTrack']['id'])); 
			?> 
		</li>
		<li>
			<?php 
				echo $this->Html->link(__('Change File Track'), array('action' => 'change_file_track', $bandTrack['BandTrack']['id'])); 
			?> 
		</li>
		<li>
			<?php 
				echo $this->Form->postLink(__('Delete Band Track'), array('action' => 'delete', $bandTrack['BandTrack']['id']), null, __('Are you sure you want to delete # %s?', $bandTrack['BandTrack']['id'])); 
			?> 
		</li>
		<li>
			<?php 
				echo $this->Html->link(
					__('View Band'), 
					array(
						'controller' => 'bands',
						'action' => 'view',
						$bandTrack['Band']['id']
					)
				); 
			?> 
		</li>
		<li>
			<?php 
				echo $this->Html->link(__('List Bands'), array('controller' => 'bands', 'action' => 'index')); 
			?>
		</li>
	</ul>
</div>
