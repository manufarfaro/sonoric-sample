<?php echo $this->Html->css('jplayer/jplayer.blue.monday.css'); ?>
<?php echo $this->Html->script('jQuery.jPlayer.2.2.0/jquery.jplayer.min'); ?>
<?php echo $this->Html->script('jQuery.jPlayer.2.2.0/add-on/jplayer.playlist'); ?>

<?php echo $this->Html->script('jquery.coin-slider.min'); ?>
<?php echo $this->Html->css('jquery.coin-slider-styles'); ?>

<script type="text/javascript">
	$(document).ready(function() {
	        
	    });
</script>

<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){

	$('#coin-slider').coinslider({ 
		width: 650,
		height: 330,
		navigation: true,
		links : false,
		hoverPause: true,
		delay: 5000,
	});

	var playlist = new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
		<?php $arrTrackCount = count($band['tracks']); ?>
		<?php foreach ($band['tracks'] as $key => $track): ?>
			{
				title:<?php echo "'". mysql_real_escape_string($track['title'])."'"; ?>,
				mp3:<?php echo "'".$this->webroot.'files'.DS.'band_track'.DS.'url_track'.DS.$track['id'].DS.$track['url_track']."'"; ?>,
				free: true
			}
			<?php if ($key < $arrTrackCount) echo ","; ?>
		<?php endforeach; ?>
	], {
		swfPath: <?php echo "'".$this->webroot.JS_URL."jQuery.jPlayer.2.2.0".DS."'"; ?>,
		supplied: "mp3",
		wmode: "window"
	});

});
//]]>
</script>

<h2><?php echo __('Band Info'); ?></h2>

<div id="lateralBanda">
	<p class="bandName">
		<?php echo $band['Band']['name']; ?>
	</p>
<br>
<?php 
	echo $this->Html->image(
		DS.'files'.DS.'band'.DS.'url_image_logo'.DS.$band['Band']['id'].DS.$band['Band']['url_image_logo'],
		array(
			'alt' => 'imageBandLogo_'.$band['Band']['id'],
			'width' => '100%'
		)
	); 
?>
	<div class="bandContact">
		<?php echo $band['Band']['contact']; ?>
	</div>
	<br>
	<div class="bandBrandImg">
		<?php 
		echo $this->Html->image(
			DS.'files'.DS.'band'.DS.'url_image_brand'.DS.$band['Band']['id'].DS.$band['Band']['url_image_brand'],
			array(
				'alt' => 'imageBandBrand_'.$band['Band']['id'],
				'width' => '70%',
				'class' => 'imgBrand'
			)
		); 
	?>
	</div>
	
</div>
					
	<div id="principalBanda">
<!-- Player Begin -->

		<div id="jquery_jplayer_1" class="jp-jplayer"></div>
		<div id="jp_container_1" class="jp-audio">
			<div class="jp-type-playlist">
				<div class="jp-gui jp-interface">
					<ul class="jp-controls">
						<li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
						<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
						<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
						<li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
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
					</div>
					<ul class="jp-toggles">
						<li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
						<li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
						<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
						<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
					</ul>
				</div>
				<div class="jp-playlist">
					<ul>
						<li></li>
					</ul>
				</div>
				<div class="jp-no-solution">
					<span>Update Required</span>
					To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
				</div>
			</div>
		</div>

<!-- Player End -->					
					<br>
					
	<p>
		<?php echo $band['Band']['about']; ?>			
	</p>
					<br>
	

<div id="coin-slider"> 
	<?php foreach ($band['photos'] as $photo): ?>
		<?php 
			echo $this->Html->image(
				DS.'files'.DS.'band_photo'.DS.'url_image'.DS.$photo['id'].DS.urldecode($photo['url_image']),
				array(
					'alt' => 'BandPhotos_'.$photo['id'],
					'width' => '650'
				)
			); 
		?>
		<?php
				$description = $photo['description'];
				if(isset($description) && !empty($description)):
			?>
				<span>
					<?php echo $description; ?>
				</span>
			<?php endif; ?>
	<?php endforeach; ?>
</div>
<br><br>
</div>
