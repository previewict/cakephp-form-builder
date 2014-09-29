<div class="responses view">
<h2><?php echo __('Response'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($response['Response']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Field'); ?></dt>
		<dd>
			<?php echo $this->Html->link($response['Field']['name'], array('controller' => 'fields', 'action' => 'view', $response['Field']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Response'); ?></dt>
		<dd>
			<?php echo h($response['Response']['response']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($response['Response']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($response['Response']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($response['Response']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Response'), array('action' => 'edit', $response['Response']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Response'), array('action' => 'delete', $response['Response']['id']), array(), __('Are you sure you want to delete # %s?', $response['Response']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Responses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Response'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fields'), array('controller' => 'fields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Field'), array('controller' => 'fields', 'action' => 'add')); ?> </li>
	</ul>
</div>
