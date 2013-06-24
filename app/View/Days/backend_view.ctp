<div class="days view">
<h2><?php  echo __('Day'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($day['Day']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($day['Day']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Day Num'); ?></dt>
		<dd>
			<?php echo h($day['Day']['day_num']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Day'), array('action' => 'edit', $day['Day']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Day'), array('action' => 'delete', $day['Day']['id']), null, __('Are you sure you want to delete # %s?', $day['Day']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Days'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Day'), array('action' => 'add')); ?> </li>
	</ul>
</div>
