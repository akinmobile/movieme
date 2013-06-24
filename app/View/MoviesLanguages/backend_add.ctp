<div class="moviesLanguages form">
<?php echo $this->Form->create('MoviesLanguage'); ?>
	<fieldset>
		<legend><?php echo __('Add Movies Language'); ?></legend>
	<?php
		echo $this->Form->input('movie_id');
		echo $this->Form->input('language_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Movies Languages'), array('action' => 'index')); ?></li>
	</ul>
</div>
