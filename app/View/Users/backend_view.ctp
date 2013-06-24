<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Passwd'); ?></dt>
		<dd>
			<?php echo h($user['User']['passwd']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($user['User']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Reviews'), array('controller' => 'user_reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Review'), array('controller' => 'user_reviews', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related User Reviews'); ?></h3>
	<?php if (!empty($user['UserReview'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Cinema Id'); ?></th>
		<th><?php echo __('Movie Id'); ?></th>
		<th><?php echo __('Review Title'); ?></th>
		<th><?php echo __('Review Text'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['UserReview'] as $userReview): ?>
		<tr>
			<td><?php echo $userReview['id']; ?></td>
			<td><?php echo $userReview['user_id']; ?></td>
			<td><?php echo $userReview['cinema_id']; ?></td>
			<td><?php echo $userReview['movie_id']; ?></td>
			<td><?php echo $userReview['review_title']; ?></td>
			<td><?php echo $userReview['review_text']; ?></td>
			<td><?php echo $userReview['rating']; ?></td>
			<td><?php echo $userReview['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_reviews', 'action' => 'view', $userReview['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_reviews', 'action' => 'edit', $userReview['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_reviews', 'action' => 'delete', $userReview['id']), null, __('Are you sure you want to delete # %s?', $userReview['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Review'), array('controller' => 'user_reviews', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
