<div class="participants form">
<?php echo $this->Form->create('Participant'); ?>
	<fieldset>
		<legend><?php echo __('Edit Participant'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('imdb_link');
		echo $this->Form->input('rt_link');
		echo $this->Form->input('Movie');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Participant.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Participant.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Participants'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
	</ul>
</div>
