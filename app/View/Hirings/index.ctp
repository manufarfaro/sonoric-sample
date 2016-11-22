<h2><?php echo __('Hiring');?></h2>
<?php 
	echo $this->Html->Image(
		'hiring.contact.png', 
		array(
			'alt' => 'hiring.contact', 
			'width' => '630'
		)
	); 
?>
<?php 
	echo $this->Html->Image(
		'hiring.logo.jpg', 
		array(
			'alt' => 'hiring.logo', 
			'width' => '630',
			'style' => 'margin: 10px auto;'
		)
	); 
?>

<p style='margin:10px auto;'>
	<?php echo $hiring['Hiring']['text']; ?>
</p>