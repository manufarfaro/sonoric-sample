<h2><?php echo __('Bands'); ?></h2>
<?php 
	echo $this->Html->image(
		'son_bands.jpg',
		array(
			'alt' => 'imageBands',
			'width' => '100%'
		)
	);
?>
<p>
En esta sesión se encuentran todos tus  grupos favoritos, con toda la información, música para que te la bajes directamente, sus link para seguirlos en Factbook y otras redes sociales. 
</p>
<p>
Si vos tenés un grupos o sos solista y querés  que tu material este en esta pagina no dudes en dejar un mensaje con tu contacto a el mail de Sonoric que en la brevedad nos estaremos comunicando con vos.
</p>
<p style="font-weight:bolder; margin-bottom:15px;">
Consulte directamente con la empresa en sus contactos telefónicos.
</p>

	<?php foreach ($bands as $band): ?>
	<?php 
		$linkUrl = '/index.php/bands/'. strtolower($genre['Genre']['name']) . '/' . strtolower(str_replace(" ", "_", $band['Band']['name'])); 
	?>

	<a href=<?php echo $linkUrl ?> class="lstLink" target="_self">
	<div class="lstBody">
		<?php 
			echo $this->Html->image(
				DS.'files'.DS.'band'.DS.'url_image_logo'.DS.$band['Band']['id'].DS.$band['Band']['url_image_logo'],
				array(
					'alt' => 'imageBandLogo_'.$band['Band']['id'],
					'width' => '150'
				)
			); 
		?>
		<div class="listText">
			<?php echo $band['Band']['name']; ?>
		</div>
	</div>
</a>

	<?php endforeach; ?>
