<div class="cinemas index">
	<h2><?php echo __('Cinemas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('street_address'); ?></th>
			<th><?php echo $this->Paginator->sort('coord_lat'); ?></th>
			<th><?php echo $this->Paginator->sort('coord_lon'); ?></th>
			<th><?php echo $this->Paginator->sort('web_link'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_info'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('rating'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('sort_order'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($cinemas as $cinema): ?>
	<tr>
		<td><?php echo h($cinema['Cinema']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cinema['Location']['name'], array('controller' => 'locations', 'action' => 'view', $cinema['Location']['id'])); ?>
		</td>
		<td><?php echo h($cinema['Cinema']['name']); ?>&nbsp;</td>
		<td><?php echo h($cinema['Cinema']['description']); ?>&nbsp;</td>
		<td><?php echo h($cinema['Cinema']['street_address']); ?>&nbsp;</td>
		<td><?php echo h($cinema['Cinema']['coord_lat']); ?>&nbsp;</td>
		<td><?php echo h($cinema['Cinema']['coord_lon']); ?>&nbsp;</td>
		<td><?php echo h($cinema['Cinema']['web_link']); ?>&nbsp;</td>
		<td><?php echo h($cinema['Cinema']['contact_info']); ?>&nbsp;</td>
		<td><?php echo h($cinema['Cinema']['active']); ?>&nbsp;</td>
		<td><?php echo h($cinema['Cinema']['rating']); ?>&nbsp;</td>
		<td><?php echo h($cinema['Cinema']['created']); ?>&nbsp;</td>
		<td><?php echo h($cinema['Cinema']['sort_order']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cinema['Cinema']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cinema['Cinema']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cinema['Cinema']['id']), null, __('Are you sure you want to delete # %s?', $cinema['Cinema']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cinema'), array('action' => 'add')); ?></li>
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
