<div class="moviesLanguages view">
<h2><?php  echo __('Movies Language'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($moviesLanguage['MoviesLanguage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Movie Id'); ?></dt>
		<dd>
			<?php echo h($moviesLanguage['MoviesLanguage']['movie_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Language Id'); ?></dt>
		<dd>
			<?php echo h($moviesLanguage['MoviesLanguage']['language_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Movies Language'), array('action' => 'edit', $moviesLanguage['MoviesLanguage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Movies Language'), array('action' => 'delete', $moviesLanguage['MoviesLanguage']['id']), null, __('Are you sure you want to delete # %s?', $moviesLanguage['MoviesLanguage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies Languages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movies Language'), array('action' => 'add')); ?> </li>
	</ul>
</div>
