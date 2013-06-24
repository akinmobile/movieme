<div class="movieTrailers form">
<?php echo $this->Form->create('MovieTrailer'); ?>
	<fieldset>
		<legend><?php echo __('Add Movie Trailer'); ?></legend>
	<?php
		echo $this->Form->input('movie_id');
		echo $this->Form->input('youtube_vid');
		echo $this->Form->input('sort_order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Movie Trailers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
	</ul>
</div>
