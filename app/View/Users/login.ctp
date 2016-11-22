<?php
	echo $this->Html->css('cake.login');
?>

<div id="login_logo">
	<?php 
		echo $this->Html->link(
			$this->Html->image(
				'sonoric.icon.png',
				array(
					'alt' => 'Sonoric Studios',
					'class' => 'img_login_logo'
				)
			),
			'/',
			array(
				'escape' => false
			)
		); 
	?>
</div>
<?php 
	//echo $this->Session->flash('auth');
?>
<div id="login_form">
	
	<?php
		echo $this->Form->create('User'); 
	?>
    <fieldset>
        <legend>
        	<?php 
        		//echo __('Please enter your username and password'); 
        	?>
        </legend>
        <?php 
	        echo $this->Form->input('username');
	        echo $this->Form->input('password');
    	?>
    </fieldset>
    <div class="submit">
    	<?php
    		echo $this->Form->button(__('Go Back'), array('onclick'=>"location.href = '".FULL_BASE_URL . "';", 'class' => 'login_button'));
			echo $this->Form->button(__('Login'), array('type'=>'submit', 'class' => 'login_button'));
    	?>
    </div>
    <?php 
    	
		echo $this->Form->end(); 
	?>
</div>
<div id="login_actions">
	
</div>
