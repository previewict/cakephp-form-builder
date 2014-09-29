<div class="responses index">
	<h2><?php echo __('Responses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('field_id'); ?></th>
			<th><?php echo $this->Paginator->sort('response'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($responses as $response): ?>
	<tr>
		<td><?php echo h($response['Response']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($response['Field']['name'], array('controller' => 'fields', 'action' => 'view', $response['Field']['id'])); ?>
		</td>
		<td><?php echo h($response['Response']['response']); ?>&nbsp;</td>
		<td><?php echo h($response['Response']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($response['Response']['created']); ?>&nbsp;</td>
		<td><?php echo h($response['Response']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $response['Response']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $response['Response']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $response['Response']['id']), array(), __('Are you sure you want to delete # %s?', $response['Response']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Response'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Fields'), array('controller' => 'fields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Field'), array('controller' => 'fields', 'action' => 'add')); ?> </li>
	</ul>
</div>
