<div class="moviePhotos form">
<?php echo $this->Form->create('MoviePhoto'); ?>
	<fieldset>
		<legend><?php echo __('Add Movie Photo'); ?></legend>
	<?php
		echo $this->Form->input('movie_id');
		echo $this->Form->input('name');
		echo $this->Form->input('photo_url');
		echo $this->Form->input('sort_order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Movie Photos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
	</ul>
</div>
