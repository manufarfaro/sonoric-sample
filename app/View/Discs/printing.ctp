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

<h2><?php echo __('Disc Printing');?></h2>
<?php
	echo $this->Html->image(
		'disc.printing.logo.jpg',
		array(
			'alt' => 'disc.printing.logo',
			'width' => '630'
		)
	);
?>

<p style="margin:10px auto;">
	<?php echo $Discs['Disc']['text_printing'] ?>
</p>

<div id="coin-slider"> 
	<?php foreach ($DiscPrintingPhotos as $photo): ?>
		<?php 
			echo $this->Html->image(
				DS.'files'.DS.'disc_printing_photo'.DS.'url_image'.DS.$photo['DiscPrintingPhotos']['id'].DS.urldecode($photo['DiscPrintingPhotos']['url_image']),
				array(
					'alt' => 'DiscPrintingPhotos_'.$photo['DiscPrintingPhotos']['id'],
					'height' => '180'
				)
			); 
		?>
		<?php
			$description = $photo['DiscPrintingPhotos']['description'];
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

<?php foreach ($DiscPrintingCombos as $key => $combo): ?>
	<div class="<?php if($key % 2 != 0) echo 'evenNotice'; ?>" style = "padding:5px; margin:10px auto;">
		<h3 id="center" style="color:orange;margin-top:10px;"><?php echo $combo['DiscPrintingCombos']['title'] ?></h3>
		<?php echo $combo['DiscPrintingCombos']['text'] ?>
	</div>
<?php endforeach; ?>