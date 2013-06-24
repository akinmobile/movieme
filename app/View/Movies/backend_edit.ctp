<div class="movies form">
<?php echo $this->Form->create('Movie'); ?>
	<fieldset>
		<legend><?php echo __('Edit Movie'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('movie_length');
		echo $this->Form->input('thumbnail_url');
		echo $this->Form->input('active');
		echo $this->Form->input('release_date');
		echo $this->Form->input('imdb_link');
		echo $this->Form->input('rt_link');
		echo $this->Form->input('web_link');
		echo $this->Form->input('imdb_rating');
		echo $this->Form->input('rt_rating');
		echo $this->Form->input('cn_rating');
		echo $this->Form->input('content_rating_id');
		echo $this->Form->input('Cinema');
		echo $this->Form->input('Genre');
		echo $this->Form->input('Language');
		echo $this->Form->input('Participant');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Movie.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Movie.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Movies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Content Ratings'), array('controller' => 'content_ratings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content Rating'), array('controller' => 'content_ratings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movie Photos'), array('controller' => 'movie_photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie Photo'), array('controller' => 'movie_photos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movie Trailers'), array('controller' => 'movie_trailers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie Trailer'), array('controller' => 'movie_trailers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Showtimes'), array('controller' => 'showtimes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Showtime'), array('controller' => 'showtimes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Reviews'), array('controller' => 'user_reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Review'), array('controller' => 'user_reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cinemas'), array('controller' => 'cinemas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cinema'), array('controller' => 'cinemas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Languages'), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participants'), array('controller' => 'participants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participant'), array('controller' => 'participants', 'action' => 'add')); ?> </li>
	</ul>
</div>
