<div class="movieRoles form">
<?php echo $this->Form->create('MovieRole'); ?>
	<fieldset>
		<legend><?php echo __('Edit Movie Role'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('role_key');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MovieRole.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MovieRole.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Movie Roles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Movies Participants'), array('controller' => 'movies_participants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movies Participant'), array('controller' => 'movies_participants', 'action' => 'add')); ?> </li>
	</ul>
</div>
