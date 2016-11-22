<h2><?php echo __('Videoclip'); ?></h2>

<?php 
	echo $this->Html->image(
		'videoclips.logo.jpg',
		array(
			'alt' => 'Videoclips',
			'width' => '630px'
		)
	);
?>

<div style="margin: 10px auto;">
	<?php echo($videoclip['Videoclip']['text']); ?>
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

<?php foreach ($videoclipCombos as $key => $value):?>
	<div class="lstNotices <?php if($key % 2 != 0) echo 'evenNotice'; ?>" style="margin: 10px auto;">
		<h3 style="color:orange;"><?php echo $value['VideoclipCombos']['title']; ?></h3>
		<p><?php echo $value['VideoclipCombos']['text']; ?></p>
		<span style="font-weight:bolder; margin-top:10px;">Tiempo estimado:</span><?php echo $value['VideoclipCombos']['work_estimated']; ?>
		</br>
		<span style="font-weight:bolder;">Duraci&oacute;n: </span><?php echo $value['VideoclipCombos']['work_duration']; ?>
		
		<p style="text-align: right;">
		<span style="font-weight:bolder;">Precios aproximados</span>
		<?php echo $value['VideoclipCombos']['work_cost']; ?></p>
		<br>
	</div>
<?php endforeach;?>

<h2 style="width:100%;">Video de Muestra</h2>

<?php 
	echo $this->Youtube->video(
		$videoclip['Videoclip']['url_sample_video'], 
		array(),
		array()
	); 
?>
<p style="margin-bottom:10px;"></p>