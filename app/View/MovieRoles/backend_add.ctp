<div class="movieRoles form">
<?php echo $this->Form->create('MovieRole'); ?>
	<fieldset>
		<legend><?php echo __('Add Movie Role'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('role_key');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Movie Roles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Movies Participants'), array('controller' => 'movies_participants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movies Participant'), array('controller' => 'movies_participants', 'action' => 'add')); ?> </li>
	</ul>
</div>
