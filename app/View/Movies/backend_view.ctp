<div class="movies view">
<h2><?php  echo __('Movie'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Movie Length'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['movie_length']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thumbnail Url'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['thumbnail_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Release Date'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['release_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imdb Link'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['imdb_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rt Link'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['rt_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Web Link'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['web_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imdb Rating'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['imdb_rating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rt Rating'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['rt_rating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cn Rating'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['cn_rating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content Rating'); ?></dt>
		<dd>
			<?php echo $this->Html->link($movie['ContentRating']['name'], array('controller' => 'content_ratings', 'action' => 'view', $movie['ContentRating']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Movie'), array('action' => 'edit', $movie['Movie']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Movie'), array('action' => 'delete', $movie['Movie']['id']), null, __('Are you sure you want to delete # %s?', $movie['Movie']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Movie Photos'); ?></h3>
	<?php if (!empty($movie['MoviePhoto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Movie Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Photo Url'); ?></th>
		<th><?php echo __('Sort Order'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($movie['MoviePhoto'] as $moviePhoto): ?>
		<tr>
			<td><?php echo $moviePhoto['id']; ?></td>
			<td><?php echo $moviePhoto['movie_id']; ?></td>
			<td><?php echo $moviePhoto['name']; ?></td>
			<td><?php echo $moviePhoto['photo_url']; ?></td>
			<td><?php echo $moviePhoto['sort_order']; ?></td>
			<td><?php echo $moviePhoto['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'movie_photos', 'action' => 'view', $moviePhoto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'movie_photos', 'action' => 'edit', $moviePhoto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'movie_photos', 'action' => 'delete', $moviePhoto['id']), null, __('Are you sure you want to delete # %s?', $moviePhoto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Movie Photo'), array('controller' => 'movie_photos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Movie Trailers'); ?></h3>
	<?php if (!empty($movie['MovieTrailer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Movie Id'); ?></th>
		<th><?php echo __('Youtube Vid'); ?></th>
		<th><?php echo __('Sort Order'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($movie['MovieTrailer'] as $movieTrailer): ?>
		<tr>
			<td><?php echo $movieTrailer['id']; ?></td>
			<td><?php echo $movieTrailer['movie_id']; ?></td>
			<td><?php echo $movieTrailer['youtube_vid']; ?></td>
			<td><?php echo $movieTrailer['sort_order']; ?></td>
			<td><?php echo $movieTrailer['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'movie_trailers', 'action' => 'view', $movieTrailer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'movie_trailers', 'action' => 'edit', $movieTrailer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'movie_trailers', 'action' => 'delete', $movieTrailer['id']), null, __('Are you sure you want to delete # %s?', $movieTrailer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Movie Trailer'), array('controller' => 'movie_trailers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Showtimes'); ?></h3>
	<?php if (!empty($movie['Showtime'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cinemas Movie Id'); ?></th>
		<th><?php echo __('Movie Id'); ?></th>
		<th><?php echo __('Cinema Id'); ?></th>
		<th><?php echo __('Start Day Id'); ?></th>
		<th><?php echo __('End Day Id'); ?></th>
		<th><?php echo __('Adult Price'); ?></th>
		<th><?php echo __('Student Price'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($movie['Showtime'] as $showtime): ?>
		<tr>
			<td><?php echo $showtime['id']; ?></td>
			<td><?php echo $showtime['cinemas_movie_id']; ?></td>
			<td><?php echo $showtime['movie_id']; ?></td>
			<td><?php echo $showtime['cinema_id']; ?></td>
			<td><?php echo $showtime['start_day_id']; ?></td>
			<td><?php echo $showtime['end_day_id']; ?></td>
			<td><?php echo $showtime['adult_price']; ?></td>
			<td><?php echo $showtime['student_price']; ?></td>
			<td><?php echo $showtime['created']; ?></td>
			<td><?php echo $showtime['active']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'showtimes', 'action' => 'view', $showtime['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'showtimes', 'action' => 'edit', $showtime['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'showtimes', 'action' => 'delete', $showtime['id']), null, __('Are you sure you want to delete # %s?', $showtime['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Showtime'), array('controller' => 'showtimes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Reviews'); ?></h3>
	<?php if (!empty($movie['UserReview'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Cinema Id'); ?></th>
		<th><?php echo __('Movie Id'); ?></th>
		<th><?php echo __('Review Title'); ?></th>
		<th><?php echo __('Review Text'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($movie['UserReview'] as $userReview): ?>
		<tr>
			<td><?php echo $userReview['id']; ?></td>
			<td><?php echo $userReview['user_id']; ?></td>
			<td><?php echo $userReview['cinema_id']; ?></td>
			<td><?php echo $userReview['movie_id']; ?></td>
			<td><?php echo $userReview['review_title']; ?></td>
			<td><?php echo $userReview['review_text']; ?></td>
			<td><?php echo $userReview['rating']; ?></td>
			<td><?php echo $userReview['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_reviews', 'action' => 'view', $userReview['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_reviews', 'action' => 'edit', $userReview['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_reviews', 'action' => 'delete', $userReview['id']), null, __('Are you sure you want to delete # %s?', $userReview['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Review'), array('controller' => 'user_reviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cinemas'); ?></h3>
	<?php if (!empty($movie['Cinema'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Street Address'); ?></th>
		<th><?php echo __('Coord Lat'); ?></th>
		<th><?php echo __('Coord Lon'); ?></th>
		<th><?php echo __('Web Link'); ?></th>
		<th><?php echo __('Contact Info'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Sort Order'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($movie['Cinema'] as $cinema): ?>
		<tr>
			<td><?php echo $cinema['id']; ?></td>
			<td><?php echo $cinema['location_id']; ?></td>
			<td><?php echo $cinema['name']; ?></td>
			<td><?php echo $cinema['description']; ?></td>
			<td><?php echo $cinema['street_address']; ?></td>
			<td><?php echo $cinema['coord_lat']; ?></td>
			<td><?php echo $cinema['coord_lon']; ?></td>
			<td><?php echo $cinema['web_link']; ?></td>
			<td><?php echo $cinema['contact_info']; ?></td>
			<td><?php echo $cinema['active']; ?></td>
			<td><?php echo $cinema['rating']; ?></td>
			<td><?php echo $cinema['created']; ?></td>
			<td><?php echo $cinema['sort_order']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cinemas', 'action' => 'view', $cinema['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cinemas', 'action' => 'edit', $cinema['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cinemas', 'action' => 'delete', $cinema['id']), null, __('Are you sure you want to delete # %s?', $cinema['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cinema'), array('controller' => 'cinemas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Genres'); ?></h3>
	<?php if (!empty($movie['Genre'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($movie['Genre'] as $genre): ?>
		<tr>
			<td><?php echo $genre['id']; ?></td>
			<td><?php echo $genre['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'genres', 'action' => 'view', $genre['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'genres', 'action' => 'edit', $genre['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'genres', 'action' => 'delete', $genre['id']), null, __('Are you sure you want to delete # %s?', $genre['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Languages'); ?></h3>
	<?php if (!empty($movie['Language'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($movie['Language'] as $language): ?>
		<tr>
			<td><?php echo $language['id']; ?></td>
			<td><?php echo $language['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'languages', 'action' => 'view', $language['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'languages', 'action' => 'edit', $language['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'languages', 'action' => 'delete', $language['id']), null, __('Are you sure you want to delete # %s?', $language['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Participants'); ?></h3>
	<?php if (!empty($movie['Participant'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Imdb Link'); ?></th>
		<th><?php echo __('Rt Link'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($movie['Participant'] as $participant): ?>
		<tr>
			<td><?php echo $participant['id']; ?></td>
			<td><?php echo $participant['name']; ?></td>
			<td><?php echo $participant['imdb_link']; ?></td>
			<td><?php echo $participant['rt_link']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'participants', 'action' => 'view', $participant['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'participants', 'action' => 'edit', $participant['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'participants', 'action' => 'delete', $participant['id']), null, __('Are you sure you want to delete # %s?', $participant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Participant'), array('controller' => 'participants', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
