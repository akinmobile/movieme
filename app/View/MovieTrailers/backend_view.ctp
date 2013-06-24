<div class="movieTrailers view">
<h2><?php  echo __('Movie Trailer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($movieTrailer['MovieTrailer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Movie'); ?></dt>
		<dd>
			<?php echo $this->Html->link($movieTrailer['Movie']['name'], array('controller' => 'movies', 'action' => 'view', $movieTrailer['Movie']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Youtube Vid'); ?></dt>
		<dd>
			<?php echo h($movieTrailer['MovieTrailer']['youtube_vid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sort Order'); ?></dt>
		<dd>
			<?php echo h($movieTrailer['MovieTrailer']['sort_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($movieTrailer['MovieTrailer']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Movie Trailer'), array('action' => 'edit', $movieTrailer['MovieTrailer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Movie Trailer'), array('action' => 'delete', $movieTrailer['MovieTrailer']['id']), null, __('Are you sure you want to delete # %s?', $movieTrailer['MovieTrailer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Movie Trailers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie Trailer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
	</ul>
</div>
