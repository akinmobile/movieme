<div class="days form">
<?php echo $this->Form->create('Day'); ?>
	<fieldset>
		<legend><?php echo __('Add Day'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('day_num');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Days'), array('action' => 'index')); ?></li>
	</ul>
</div>
