<?php echo $this->Html->script('tiny_mce/tiny_mce'); ?>

<script type="text/javascript">
    tinyMCE.init({
        theme : "advanced",
        mode : "textareas",
        plugins : "autoresize",
        theme_advanced_buttons3_add : "forecolor,backcolor",
        convert_urls : false
    });
</script> 

<?php echo $this->Form->create('Band'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Band'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('genre_id');
		echo $this->Form->input('name');
		echo $this->Form->input('about');
		echo $this->Form->input('contact');
		echo $this->Form->input('url_image_logo', array('type' => 'hidden'));
		echo $this->Form->input('url_image_brand', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Bands'), array('action' => 'index')); ?></li>
		<li>
			<?php 
				echo $this->Html->link(
					__('Change Logo'), 
					array(
						'action' => 'change_image_logo',
						$this->Form->value('Band.id')
					)
				); 
			?>
		</li>
		<li>
			<?php 
				echo $this->Html->link(
					__('Change Brand'), 
					array(
						'action' => 'change_image_brand',
						$this->Form->value('Band.id')
					)
				); 
			?>
		</li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Band.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Band.id'))); ?></li>
	</ul>
</div>
