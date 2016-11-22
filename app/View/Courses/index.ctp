<h2>Cursos</h2>

<?php foreach ($courses as $key => $course): ?>
	<div class="<?php if($key % 2 != 0) echo 'evenNotice'; ?>" style = "padding:5px; margin:10px auto;">
		<h3 id="center" style="color:orange;">
			<?php echo $course['Course']['title'] ?>
		</h3>
		
		<?php 
			echo $this->Html->image(
			DS.'files'.DS.'course'.DS.'url_image'.DS.$course['Course']['id'].DS.$course['Course']['url_image'],
			array(
				'alt' => 'coursePhoto_'.$course['Course']['id'],
				'width' => '620'
				)
			); 
		?>&nbsp;

		<?php echo $course['Course']['text']; ?>

		
		<?php if(isset($course['teachers'])): ?>
			<h4>Profesores:</h4>
			<div id="teacherLists">
				<ul>
					<?php foreach ($course['teachers'] as $teacher): ?>
						<li><?php echo $teacher['name'] ?>	( <?php echo $teacher['description']; ?> )</li>
					<?php endforeach;?>
				</ul>
				<br>
			</div>

		<?php endif; ?>
	</div>

<?php endforeach; ?>