<?php echo $this->Html->script('jquery.coin-slider.min'); ?>
<?php echo $this->Html->css('jquery.coin-slider-styles'); ?>

<script type="text/javascript">
	$(document).ready(function() {
	        $('#coin-slider').coinslider({ 
				width: 630,
				height: 180,
				navigation: false, 
				navigation: true,
				links : false,
				hoverPause: true,
				delay: 5000 
			});
	    });
</script>

<h2><?php echo __('Disc Arts');?></h2>
<?php
	echo $this->Html->image(
		'disc.arts.logo.jpg',
		array(
			'alt' => 'disc.arts.logo',
			'width' => '630'
		)
	);
?>

<p style="margin:10px auto;">
	<?php echo $Discs['Disc']['text_arts']; ?>
</p>

<div id="coin-slider"> 
	<?php foreach ($DiscArtsPhotos as $photo): ?>
		<?php 
			echo $this->Html->image(
				DS.'files'.DS.'disc_arts_photo'.DS.'url_image'.DS.$photo['DiscArtsPhotos']['id'].DS.urldecode($photo['DiscArtsPhotos']['url_image']),
				array(
					'alt' => 'DiscArtsPhoto_'.$photo['DiscArtsPhotos']['id'],
					'height' => '180'
				)
			); 
		?>
		<?php
			$description = $photo['DiscArtsPhotos']['description'];
			if(isset($description) && !empty($description)):
		?>
			<span>
				<?php echo $description; ?>
			</span>
		<?php endif; ?>
	<?php endforeach; ?>
</div>

<?php 
	echo $this->Html->image(
		'promo.logo.png',
		array(
			'alt' => 'Promos',
			'width' => '630px'
		)
	);
?>

<?php foreach ($DiscArtsCombos as $key => $combo): ?>
	<div class="<?php if($key % 2 != 0) echo 'evenNotice'; ?>" style = "padding:5px; margin:10px auto;">
		<h3 id="center" style="color:orange;margin-top:10px;">
			<?php echo $combo['DiscArtsCombos']['title']; ?>
		</h3>
		<?php echo $combo['DiscArtsCombos']['text']; ?>
	</div>
<?php endforeach; ?>