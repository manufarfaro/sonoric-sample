<h2><?php echo __('Clinics'); ?></h2>
<?php 
	echo $this->Html->image(
		'clinics.logo.jpg',
		array(
			'alt' => 'Clinics',
			'width' => '630px'
		)
	);
?>
<p style="margin: 10px auto;">
	En este sector le brindamos a nuestros alumnos y usuarios informaci&oacute;n en formato Video y PDF de diferentes debates que surgen en el género música técnica, como también entrevistas a artistas de Sonoric o amigos que nos visitan otorgando en este sitio alguna información o novedad de ellos.
</p>
<p style="margin:10px auto; color:#F78181; font-weight:bolder;">
	Consulte directamente con la empresa en sus contactos telef&oacute;nicos.
</p>

<?php foreach ($clinics as $clinic): ?>
<a href="<?php echo $clinic['Clinic']['url_link']; ?>" class="lstLink" target="_blank">
	<div class="lstBody">
		<?php 
			echo $this->Html->image(
				DS.'files'.DS.'clinic'.DS.'url_image'.DS.$clinic['Clinic']['id'].DS.$clinic['Clinic']['url_image'],
				array(
					'alt' => 'Clinic_' . $clinic['Clinic']['id']
				)
			);
		?>
		<div class="listText">
			<?php echo $clinic['Clinic']['name']; ?>
		</div>
	</div>
</a>
<?php endforeach; ?>



