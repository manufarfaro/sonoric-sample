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
	echo $this->Html->doctype('html5');
?>
<html>
	<head>
		<?php 
			echo $this->Html->charset();
			echo $this->Html->meta(array('name' => 'robots', 'content' => 'noindex'));

		?>
		<?php
			echo $this->Html->meta('icon');

			echo $this->Html->css('cake.generic');

			echo $this->Html->script('jquery-1.9.1.min');

			//echo $this->Html->script('application');

			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
	</head>
	<body>
		<div id="login_content">
			<?php 
				
				echo $this->Session->flash(); 
				echo $this->fetch('content'); 
			?>
		</div>
	</body>
</html>