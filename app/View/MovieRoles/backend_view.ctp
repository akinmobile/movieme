<div class="movieRoles view">
<h2><?php  echo __('Movie Role'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($movieRole['MovieRole']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($movieRole['MovieRole']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role Key'); ?></dt>
		<dd>
			<?php echo h($movieRole['MovieRole']['role_key']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Movie Role'), array('action' => 'edit', $movieRole['MovieRole']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Movie Role'), array('action' => 'delete', $movieRole['MovieRole']['id']), null, __('Are you sure you want to delete # %s?', $movieRole['MovieRole']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Movie Roles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie Role'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies Participants'), array('controller' => 'movies_participants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movies Participant'), array('controller' => 'movies_participants', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Movies Participants'); ?></h3>
	<?php if (!empty($movieRole['MoviesParticipant'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Movie Id'); ?></th>
		<th><?php echo __('Movie Role Id'); ?></th>
		<th><?php echo __('Participant Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($movieRole['MoviesParticipant'] as $moviesParticipant): ?>
		<tr>
			<td><?php echo $moviesParticipant['id']; ?></td>
			<td><?php echo $moviesParticipant['movie_id']; ?></td>
			<td><?php echo $moviesParticipant['movie_role_id']; ?></td>
			<td><?php echo $moviesParticipant['participant_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'movies_participants', 'action' => 'view', $moviesParticipant['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'movies_participants', 'action' => 'edit', $moviesParticipant['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'movies_participants', 'action' => 'delete', $moviesParticipant['id']), null, __('Are you sure you want to delete # %s?', $moviesParticipant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Movies Participant'), array('controller' => 'movies_participants', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
