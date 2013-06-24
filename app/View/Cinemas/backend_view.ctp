<div class="cinemas view">
<h2><?php  echo __('Cinema'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cinema['Cinema']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cinema['Location']['name'], array('controller' => 'locations', 'action' => 'view', $cinema['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cinema['Cinema']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($cinema['Cinema']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Address'); ?></dt>
		<dd>
			<?php echo h($cinema['Cinema']['street_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coord Lat'); ?></dt>
		<dd>
			<?php echo h($cinema['Cinema']['coord_lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coord Lon'); ?></dt>
		<dd>
			<?php echo h($cinema['Cinema']['coord_lon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Web Link'); ?></dt>
		<dd>
			<?php echo h($cinema['Cinema']['web_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Info'); ?></dt>
		<dd>
			<?php echo h($cinema['Cinema']['contact_info']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($cinema['Cinema']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rating'); ?></dt>
		<dd>
			<?php echo h($cinema['Cinema']['rating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cinema['Cinema']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sort Order'); ?></dt>
		<dd>
			<?php echo h($cinema['Cinema']['sort_order']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cinema'), array('action' => 'edit', $cinema['Cinema']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cinema'), array('action' => 'delete', $cinema['Cinema']['id']), null, __('Are you sure you want to delete # %s?', $cinema['Cinema']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cinemas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cinema'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Showtimes'), array('controller' => 'showtimes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Showtime'), array('controller' => 'showtimes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Reviews'), array('controller' => 'user_reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Review'), array('controller' => 'user_reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Showtimes'); ?></h3>
	<?php if (!empty($cinema['Showtime'])): ?>
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
		foreach ($cinema['Showtime'] as $showtime): ?>
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
	<?php if (!empty($cinema['UserReview'])): ?>
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
		foreach ($cinema['UserReview'] as $userReview): ?>
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
	<h3><?php echo __('Related Movies'); ?></h3>
	<?php if (!empty($cinema['Movie'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Movie Length'); ?></th>
		<th><?php echo __('Thumbnail Url'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Release Date'); ?></th>
		<th><?php echo __('Imdb Link'); ?></th>
		<th><?php echo __('Rt Link'); ?></th>
		<th><?php echo __('Web Link'); ?></th>
		<th><?php echo __('Imdb Rating'); ?></th>
		<th><?php echo __('Rt Rating'); ?></th>
		<th><?php echo __('Cn Rating'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Content Rating Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cinema['Movie'] as $movie): ?>
		<tr>
			<td><?php echo $movie['id']; ?></td>
			<td><?php echo $movie['name']; ?></td>
			<td><?php echo $movie['description']; ?></td>
			<td><?php echo $movie['movie_length']; ?></td>
			<td><?php echo $movie['thumbnail_url']; ?></td>
			<td><?php echo $movie['active']; ?></td>
			<td><?php echo $movie['release_date']; ?></td>
			<td><?php echo $movie['imdb_link']; ?></td>
			<td><?php echo $movie['rt_link']; ?></td>
			<td><?php echo $movie['web_link']; ?></td>
			<td><?php echo $movie['imdb_rating']; ?></td>
			<td><?php echo $movie['rt_rating']; ?></td>
			<td><?php echo $movie['cn_rating']; ?></td>
			<td><?php echo $movie['created']; ?></td>
			<td><?php echo $movie['content_rating_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'movies', 'action' => 'view', $movie['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'movies', 'action' => 'edit', $movie['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'movies', 'action' => 'delete', $movie['id']), null, __('Are you sure you want to delete # %s?', $movie['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
