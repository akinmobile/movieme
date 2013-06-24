<div class="moviePhotos index">
	<h2><?php echo __('Movie Photos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('movie_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('photo_url'); ?></th>
			<th><?php echo $this->Paginator->sort('sort_order'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($moviePhotos as $moviePhoto): ?>
	<tr>
		<td><?php echo h($moviePhoto['MoviePhoto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($moviePhoto['Movie']['name'], array('controller' => 'movies', 'action' => 'view', $moviePhoto['Movie']['id'])); ?>
		</td>
		<td><?php echo h($moviePhoto['MoviePhoto']['name']); ?>&nbsp;</td>
		<td><?php echo h($moviePhoto['MoviePhoto']['photo_url']); ?>&nbsp;</td>
		<td><?php echo h($moviePhoto['MoviePhoto']['sort_order']); ?>&nbsp;</td>
		<td><?php echo h($moviePhoto['MoviePhoto']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $moviePhoto['MoviePhoto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $moviePhoto['MoviePhoto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $moviePhoto['MoviePhoto']['id']), null, __('Are you sure you want to delete # %s?', $moviePhoto['MoviePhoto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Movie Photo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
	</ul>
</div>
