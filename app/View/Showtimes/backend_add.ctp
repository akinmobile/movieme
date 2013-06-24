<div class="showtimes form">
<?php echo $this->Form->create('Showtime'); ?>
	<fieldset>
		<legend><?php echo __('Add Showtime'); ?></legend>
	<?php
		echo $this->Form->input('cinemas_movie_id');
		echo $this->Form->input('movie_id');
		echo $this->Form->input('cinema_id');
		echo $this->Form->input('start_day_id');
		echo $this->Form->input('end_day_id');
		echo $this->Form->input('adult_price');
		echo $this->Form->input('student_price');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Showtimes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cinemas Movies'), array('controller' => 'cinemas_movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cinemas Movie'), array('controller' => 'cinemas_movies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cinemas'), array('controller' => 'cinemas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cinema'), array('controller' => 'cinemas', 'action' => 'add')); ?> </li>
	</ul>
</div>
