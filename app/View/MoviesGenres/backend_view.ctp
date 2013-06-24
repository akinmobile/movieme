<div class="moviesGenres view">
<h2><?php  echo __('Movies Genre'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($moviesGenre['MoviesGenre']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genre Id'); ?></dt>
		<dd>
			<?php echo h($moviesGenre['MoviesGenre']['genre_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Movie Id'); ?></dt>
		<dd>
			<?php echo h($moviesGenre['MoviesGenre']['movie_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Movies Genre'), array('action' => 'edit', $moviesGenre['MoviesGenre']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Movies Genre'), array('action' => 'delete', $moviesGenre['MoviesGenre']['id']), null, __('Are you sure you want to delete # %s?', $moviesGenre['MoviesGenre']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies Genres'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movies Genre'), array('action' => 'add')); ?> </li>
	</ul>
</div>
