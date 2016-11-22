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
$cakeDescription = ".:: Sonoric Studios Administración ::.";

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

		echo $this->Html->script('jquery-1.9.1.min');

		echo $this->Html->script('admin.application');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
				<?php 
					echo $this->Html->link(
							$this->Html->image(
								'sonoric.icon.png',
								array(
									'alt' => $cakeDescription
								)
							),
							'/admin',
							array(
								'escape' => false
							)
						 ); 
				?>
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
		</div>
		<div id="menu"></div>
		<div id="submenu"></div>
		<div id="content">
			<?php 
				echo $this->Session->flash(); 
				echo $this->fetch('content'); 
			?>
		</div>
		<div id="footer">
			<?php
				echo($this->Html-> link('Sonoric Studios', 'http://www.sonoricstudios.com/'));
			 ?>
			. Todos los derechos Reservados. <?php echo date('Y') ;?>. Desarrollado por  
			<?php echo $this->Html->link(
					'Ualabi Solutions',
					'http://ualabisolutions.com',
					array('target' => '_blank')
				);
			?>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
