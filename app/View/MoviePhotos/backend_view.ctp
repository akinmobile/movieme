<div class="moviePhotos view">
<h2><?php  echo __('Movie Photo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($moviePhoto['MoviePhoto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Movie'); ?></dt>
		<dd>
			<?php echo $this->Html->link($moviePhoto['Movie']['name'], array('controller' => 'movies', 'action' => 'view', $moviePhoto['Movie']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($moviePhoto['MoviePhoto']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo Url'); ?></dt>
		<dd>
			<?php echo h($moviePhoto['MoviePhoto']['photo_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sort Order'); ?></dt>
		<dd>
			<?php echo h($moviePhoto['MoviePhoto']['sort_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($moviePhoto['MoviePhoto']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Movie Photo'), array('action' => 'edit', $moviePhoto['MoviePhoto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Movie Photo'), array('action' => 'delete', $moviePhoto['MoviePhoto']['id']), null, __('Are you sure you want to delete # %s?', $moviePhoto['MoviePhoto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Movie Photos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie Photo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
	</ul>
</div>
