<div class="showtimes view">
<h2><?php  echo __('Showtime'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($showtime['Showtime']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cinemas Movie'); ?></dt>
		<dd>
			<?php echo $this->Html->link($showtime['CinemasMovie']['movie_id'], array('controller' => 'cinemas_movies', 'action' => 'view', $showtime['CinemasMovie']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Movie'); ?></dt>
		<dd>
			<?php echo $this->Html->link($showtime['Movie']['name'], array('controller' => 'movies', 'action' => 'view', $showtime['Movie']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cinema'); ?></dt>
		<dd>
			<?php echo $this->Html->link($showtime['Cinema']['name'], array('controller' => 'cinemas', 'action' => 'view', $showtime['Cinema']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Day Id'); ?></dt>
		<dd>
			<?php echo h($showtime['Showtime']['start_day_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Day Id'); ?></dt>
		<dd>
			<?php echo h($showtime['Showtime']['end_day_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adult Price'); ?></dt>
		<dd>
			<?php echo h($showtime['Showtime']['adult_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student Price'); ?></dt>
		<dd>
			<?php echo h($showtime['Showtime']['student_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($showtime['Showtime']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($showtime['Showtime']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Showtime'), array('action' => 'edit', $showtime['Showtime']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Showtime'), array('action' => 'delete', $showtime['Showtime']['id']), null, __('Are you sure you want to delete # %s?', $showtime['Showtime']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Showtimes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Showtime'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cinemas Movies'), array('controller' => 'cinemas_movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cinemas Movie'), array('controller' => 'cinemas_movies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cinemas'), array('controller' => 'cinemas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cinema'), array('controller' => 'cinemas', 'action' => 'add')); ?> </li>
	</ul>
</div>
