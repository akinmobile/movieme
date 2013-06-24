<div class="showtimes index">
	<h2><?php echo __('Showtimes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cinemas_movie_id'); ?></th>
			<th><?php echo $this->Paginator->sort('movie_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cinema_id'); ?></th>
			<th><?php echo $this->Paginator->sort('start_day_id'); ?></th>
			<th><?php echo $this->Paginator->sort('end_day_id'); ?></th>
			<th><?php echo $this->Paginator->sort('adult_price'); ?></th>
			<th><?php echo $this->Paginator->sort('student_price'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($showtimes as $showtime): ?>
	<tr>
		<td><?php echo h($showtime['Showtime']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($showtime['CinemasMovie']['movie_id'], array('controller' => 'cinemas_movies', 'action' => 'view', $showtime['CinemasMovie']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($showtime['Movie']['name'], array('controller' => 'movies', 'action' => 'view', $showtime['Movie']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($showtime['Cinema']['name'], array('controller' => 'cinemas', 'action' => 'view', $showtime['Cinema']['id'])); ?>
		</td>
		<td><?php echo h($showtime['Showtime']['start_day_id']); ?>&nbsp;</td>
		<td><?php echo h($showtime['Showtime']['end_day_id']); ?>&nbsp;</td>
		<td><?php echo h($showtime['Showtime']['adult_price']); ?>&nbsp;</td>
		<td><?php echo h($showtime['Showtime']['student_price']); ?>&nbsp;</td>
		<td><?php echo h($showtime['Showtime']['created']); ?>&nbsp;</td>
		<td><?php echo h($showtime['Showtime']['active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $showtime['Showtime']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $showtime['Showtime']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $showtime['Showtime']['id']), null, __('Are you sure you want to delete # %s?', $showtime['Showtime']['id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Showtime'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cinemas Movies'), array('controller' => 'cinemas_movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cinemas Movie'), array('controller' => 'cinemas_movies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cinemas'), array('controller' => 'cinemas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cinema'), array('controller' => 'cinemas', 'action' => 'add')); ?> </li>
	</ul>
</div>
