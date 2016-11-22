<?php echo $this->Html->script('jquery.coin-slider.min'); ?>
<?php echo $this->Html->css('jquery.coin-slider-styles'); ?>

<script type="text/javascript">
	$(document).ready(function() {
	        $('#coin-slider').coinslider({ 
				width: 630,
				navigation: false, 
				navigation: true,
				links : false,
				hoverPause: true,
				delay: 5000 
			});
	    });
</script>

<style type="text/css">
	.paging{
		background: none;
		text-align: center;
		margin-bottom: 15px;
	}
</style>

<div id="ss_index_container">
	<?php 
		echo $this->Html->image(
			'index.logo.png',
			array(
				'alt' => 'Sonoric Administrator',
				'id' => 'ss_index_logo',
				'width' => '630'
			)
		); 
	?>
</div>

<div id="indexText">
	<?php echo ($IndexText['IndexText']['text']); ?>
</div>

<div id="coin-slider"> 
	<?php foreach ($IndexPhoto as $photo): ?>
			<?php 
				echo $this->Html->image(
					DS.'files'.DS.'index_photo'.DS.'url_image'.DS.$photo['IndexPhoto']['id'].DS.$photo['IndexPhoto']['url_image'],
					array(
						'alt' => 'indexPhoto_'.$photo['IndexPhoto']['id'],
						'width' => '630',
						'border' => '0'
					)
				); 
			?>
			<?php
				$description = $photo['IndexPhoto']['description'];
				if(isset($description) && !empty($description)):
			?>
				<span>
					<?php echo $description; ?>
				</span>
			<?php endif; ?>
	<?php endforeach; ?>
</div>

<h2>Noticias</h2>

<?php foreach ($IndexNotice as $key => $notice): ?>

<div class="lstNotices <?php if($key % 2 != 0) echo 'evenNotice'; ?>">
		<?php 
			echo $this->Html->image(
				DS.'files'.DS.'index_notice'.DS.'url_image'.DS.$notice['IndexNotice']['id'].DS.$notice['IndexNotice']['url_image'],
				array(
					'alt' => 'indexPhoto_'.$notice['IndexNotice']['id'],
					'width' => '250',
					'border' => '0'
				)
			); 
		?>
	<div class="noticesText">
		<h3 id="h3">
			<?php echo $notice['IndexNotice']['title'] ?>
		<h3>
		<h4>
			<?php echo $this->Time->nice($notice['IndexNotice']['dateCreated']); ?>
		</h4>
		<h1 id="letra">
			<?php echo $notice['IndexNotice']['text'] ?>
		</h1>
	</div>
</div>

<?php endforeach; ?>

<div class="paging">
	<?php 
		if(count($this->Paginator->options['url']) < 1) {
			$previous = str_replace('page:','',$this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')));
			$numbers = str_replace('page:','',$this->Paginator->numbers(array('separator' => '')));
			$next = str_replace('page:','',$this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')));

		}else{

			$pattern = "/((?:[a-z][a-z]+))(\/)(\d+)/is";

			$previous = str_replace('page:','',$this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')));
			$previous = preg_replace($pattern , 'index', $previous);

			$numbers = str_replace('page:','',$this->Paginator->numbers(array('separator' => '')));
			$numbers = preg_replace($pattern, 'index', $numbers);

			$next = str_replace('page:','',$this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')));
			$next = preg_replace($pattern, 'index', $next);
		}
		echo $previous;
		echo $numbers;
		echo $next;
	?>
</div>
