<style type="text/css">
	table tr:nth-child(2n){
		background: url('/app/webroot/img/bandlist.pattern.png');	
	}
</style>

<h2><?php echo __('Shows'); ?></h2>
<?php 
	echo $this->Html->image(
		'shows.logo.jpg',
		array(
			'alt' => 'Shows',
			'width' => '630px'
		)
	);
?>
<p style="margin: 10px auto;">
	En esta sesión de shows, Sonoric Studios brinda la posibilidad a las bandas de presentar la fecha de su evento. Esta subpágina  esta ordenada de forma cercana al show más próximo arriba. Los eventos ya realizados o pasados son removidos de la página así todas las fechas que este en este web son válidas y próximas a realizarse.
</p>

<table class="tblShows">
<?php foreach ($shows as $show): ?>
				
					<tr>
						<td>
							<?php 
								echo $this->Html->image(
								DS.'files'.DS.'show'.DS.'url_image'.DS.$show['Show']['id'].DS.$show['Show']['url_image'],
								array(
								'alt' => 'showCourse_'.$show['Show']['id'],
								'width' => '250px'
									)
								); 
								?>
							</td>
							<td >
								<font color="white">
									<?php echo $show['Show']['text']; ?>
									<span style="font-weight:bolder;">Fecha:&nbsp;</span>
									<?php echo $show['Show']['event_date']; ?>
									<br/>
									<span style="font-weight:bolder;">Mas Info:&nbsp;</span><?php echo $this->Html->link($show['Show']['url_moreinfo']); ?>
								</font>
							</td>
						</tr>
						
<?php endforeach; ?>
</table>