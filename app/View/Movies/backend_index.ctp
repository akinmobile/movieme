<div class="row">
	<div class="actions span4">
	<h3><?php echo __('Actions'); ?></h3>
	<ul class="nav nav-list bs-docs-sidenav affix-top">
		<li><?php echo $this->Html->link(__('New Movie'), array('action' => 'add')); ?></li>
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

	<div class="movies index span8">
	<h2><?php echo __('Movies'); ?></h2>
	<table class="table table-bordered">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('movie_length'); ?></th>
			<th><?php echo $this->Paginator->sort('thumbnail_url'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('release_date'); ?></th>
			<th><?php echo $this->Paginator->sort('imdb_link'); ?></th>
			<th><?php echo $this->Paginator->sort('rt_link'); ?></th>
			<th><?php echo $this->Paginator->sort('web_link'); ?></th>
			<th><?php echo $this->Paginator->sort('imdb_rating'); ?></th>
			<th><?php echo $this->Paginator->sort('rt_rating'); ?></th>
			<th><?php echo $this->Paginator->sort('cn_rating'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('content_rating_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($movies as $movie): ?>
	<tr>
		<td><?php echo h($movie['Movie']['id']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['name']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['description']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['movie_length']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['thumbnail_url']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['active']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['release_date']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['imdb_link']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['rt_link']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['web_link']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['imdb_rating']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['rt_rating']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['cn_rating']); ?>&nbsp;</td>
		<td><?php echo h($movie['Movie']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($movie['ContentRating']['name'], array('controller' => 'content_ratings', 'action' => 'view', $movie['ContentRating']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $movie['Movie']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $movie['Movie']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $movie['Movie']['id']), null, __('Are you sure you want to delete # %s?', $movie['Movie']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
</div>