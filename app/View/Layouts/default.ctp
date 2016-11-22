<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeDescription = ".:: Sonoric Studios ::.";

echo $this->Html->docType('html5');
?>

<html>
<head>
	<?php 
		echo $this->Html->charset();
		echo $this->Html->meta(array('name' => 'robots', 'content' => 'noindex'));
	?>
	<title>
		<?php echo $cakeDescription; ?> - 
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('ui-lightness/jquery-ui-1.10.1.custom');
		echo $this->Html->css('dynatree/ui.dynatree');
		echo $this->Html->css('main.style');

		echo $this->Html->script('jquery-1.9.1.min');
		echo $this->Html->script('jquery.ui/jquery-ui-1.10.1.custom.min');
		//echo $this->Html->script('jquery.columns');
		echo $this->Html->script('jquery.cookie');

		echo $this->Html->script('dynatree/jquery.dynatree.min');
		echo $this->Html->script('application');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
<!-- Begin Inclusion of Facebook JSSDK -->
<script type="text/javascript">
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<!-- End Inclusion of Facebook JSSDK -->

</head>
<body>
<div id="loadingLayout">
	<?php 
		echo $this->Html->image(
			'sonoric.loading.gif',
			array(
				'alt' => 'Loading...',
				'width' => '100px'
			)
		);
	?>
</div>
<div id="capaContenido">
            <div id="headerCapa">
                <div id="logoHeader">
                <?php 
					echo $this->Html->link(
							$this->Html->image(
								'sonoric.icon.png',
								array(
									'alt' => $cakeDescription
								)
							),
							'/',
							array(
								'escape' => false
							)
						 ); 
				?>

                </div>
                <div id="headerDerecho"><br>
                	<?php if ($this->session->check('Auth.User')):	?>
					<div id="logout">
						<span class="logout_text">
							<?php echo __('User') ?>:
						</span>
						<?php 
							echo $this->Html->link(
								$this->session->read('Auth.User.username'),
								'/admin/users/view/'.$this->session->read('Auth.User.id'),
								array(
									'target' => '_self'
								)
							);
						?>
						(
						<?php 
							echo $this->Html->link(
								__('Logout'),
								'/logout',
								array(
									'target' => '_self'
								)
							); 
						?>
						)
					</div>
				<?php endif; ?>
					<?php 
						echo $this->Html->link(
							$this->Html->image(
								'facebook.png',
								array(
									'alt' => $cakeDescription
								)
							),
							'http://www.facebook.com/sonoricstudios',
							array(
								'escape' => false
							)
						 ); 
						echo $this->Html->link(
							$this->Html->image(
								'twitter.png',
								array(
									'alt' => $cakeDescription
								)
							),
							'http://www.twitter.com/sonoricstudios',
							array(
								'escape' => false
							)
						 );
					?>
					
                </div>
            </div>
				 
			<div id="capaBarra">
			</div>
				
            <div id="contenedorPrincipal">
				<div id="lateral"></div> 
				   
				<div id="principal" class="principal"> 
					<?php 
						echo $this->Session->flash(); 
						echo $this->fetch('content'); 
					?>
				</div> 
				
				<div id="otrolado"> 
					<?php 
						echo $this->Html->link(
							$this->Html->image(
								'tropicalisimatv.gray.jpg',
								array(
									'alt' => 'tropicalisimatv',
									'width' => '300'
								)
							),
							'https://www.facebook.com/TropicalisimaTvOficial',
							array(
								'alt' => 'tropicalisimatv',
								'class' => 'imgSponsor',
								'target' => '_blank',
								'escape' => false
							)
						);
					?>
					
					<?php 
						echo $this->Html->link(
							$this->Html->image(
								'magentadiscos.gray.jpg',
								array(
									'alt' => 'magentadiscos',
									'width' => '300'
								)
							),
							'http://www.magentadiscos.com/',
							array(
								'alt' => 'magentadiscos',
								'class' => 'imgSponsor',
								'target' => '_blank',
								'escape' => false
							)
						);
					?>
					<div id="fb-root"></div>
					<div class="fb-like-box" style="background:#666666;border:1px solid #333" data-href="http://www.facebook.com/sonoricstudios" data-width="298" data-height="220" data-show-faces="true" data-colorscheme="dark" data-stream="false" border-color="#666666" data-header="true"></div>
				</div> 

            </div>

            <div id="capaPie">
                <p class="txtPie"></p>
            </div>
        </div>

	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>