<div class="moviesGenres form">
<?php echo $this->Form->create('MoviesGenre'); ?>
	<fieldset>
		<legend><?php echo __('Add Movies Genre'); ?></legend>
	<?php
		echo $this->Form->input('genre_id');
		echo $this->Form->input('movie_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Movies Genres'), array('action' => 'index')); ?></li>
	</ul>
</div>
