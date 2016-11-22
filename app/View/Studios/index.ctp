<h2><?php  echo __('Studio'); ?></h2>
<?php 
	echo $this->Html->image(
		'studios.logo.jpg',
		array(
			'alt' => 'Studios',
			'width' => '630px'
		)
	);
?>
<p style="margin: 10px auto;">
	<?php echo $studio['Studio']['about']; ?>
</p>

<?php 
	echo $this->Html->image(
		'index.brand.logos.png',
		array(
			'alt' => 'Brands',
			'width' => '630px'
		)
	);
?>

