<div class="locations view">
<h2><?php  echo __('Location'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($location['Location']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($location['Location']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Location'), array('action' => 'edit', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Location'), array('action' => 'delete', $location['Location']['id']), null, __('Are you sure you want to delete # %s?', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cinemas'), array('controller' => 'cinemas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cinema'), array('controller' => 'cinemas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cinemas'); ?></h3>
	<?php if (!empty($location['Cinema'])): ?>
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
		foreach ($location['Cinema'] as $cinema): ?>
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
