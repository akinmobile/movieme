<div class="cinemas form">
<?php echo $this->Form->create('Cinema'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cinema'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('location_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('street_address');
		echo $this->Form->input('coord_lat');
		echo $this->Form->input('coord_lon');
		echo $this->Form->input('web_link');
		echo $this->Form->input('contact_info');
		echo $this->Form->input('active');
		echo $this->Form->input('rating');
		echo $this->Form->input('sort_order');
		echo $this->Form->input('Movie');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cinema.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Cinema.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cinemas'), array('action' => 'index')); ?></li>
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
