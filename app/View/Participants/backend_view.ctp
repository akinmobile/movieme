<div class="participants view">
<h2><?php  echo __('Participant'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($participant['Participant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($participant['Participant']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imdb Link'); ?></dt>
		<dd>
			<?php echo h($participant['Participant']['imdb_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rt Link'); ?></dt>
		<dd>
			<?php echo h($participant['Participant']['rt_link']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Participant'), array('action' => 'edit', $participant['Participant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Participant'), array('action' => 'delete', $participant['Participant']['id']), null, __('Are you sure you want to delete # %s?', $participant['Participant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Participants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participant'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Movies'); ?></h3>
	<?php if (!empty($participant['Movie'])): ?>
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
		foreach ($participant['Movie'] as $movie): ?>
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
