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

<?php echo $this->Form->create('Show', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Show'); ?></legend>
	<?php
		echo $this->Form->input('id');
	?>
	<div class="input text required">
		<label for="UserUsername">Fecha Evento</label>
		<p style="font-weight:normal;font-family:'frutiger linotype','lucida grande','verdana',sans-serif;font-size:140%; padding:1%;">
			<?php echo $show['Show']['event_date']; ?>
		</p>
	</div>
	<?php
		echo $this->Form->input('url_image', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Show'), array('action' => 'edit', $show['Show']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $show['Show']['id']), null, __('Are you sure you want to delete # %s?', $show['Show']['id'])); ?></li>
		<li><?php echo $this->Html->link(__('List Shows'), array('action' => 'index')); ?></li>
	</ul>
</div>
