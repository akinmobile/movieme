<div class="movieRoles index">
	<h2><?php echo __('Movie Roles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('role_key'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($movieRoles as $movieRole): ?>
	<tr>
		<td><?php echo h($movieRole['MovieRole']['id']); ?>&nbsp;</td>
		<td><?php echo h($movieRole['MovieRole']['name']); ?>&nbsp;</td>
		<td><?php echo h($movieRole['MovieRole']['role_key']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $movieRole['MovieRole']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $movieRole['MovieRole']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $movieRole['MovieRole']['id']), null, __('Are you sure you want to delete # %s?', $movieRole['MovieRole']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Movie Role'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Movies Participants'), array('controller' => 'movies_participants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movies Participant'), array('controller' => 'movies_participants', 'action' => 'add')); ?> </li>
	</ul>
</div>
