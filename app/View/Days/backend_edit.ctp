<div class="days form">
<?php echo $this->Form->create('Day'); ?>
	<fieldset>
		<legend><?php echo __('Edit Day'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('day_num');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Day.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Day.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Days'), array('action' => 'index')); ?></li>
	</ul>
</div>
