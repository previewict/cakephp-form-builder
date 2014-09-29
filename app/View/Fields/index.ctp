<div class="fields index">
	<h2><?php echo __('Fields'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('domid'); ?></th>
			<th><?php echo $this->Paginator->sort('label'); ?></th>
			<th><?php echo $this->Paginator->sort('placeholder'); ?></th>
			<th><?php echo $this->Paginator->sort('required'); ?></th>
			<th><?php echo $this->Paginator->sort('onempty'); ?></th>
			<th><?php echo $this->Paginator->sort('onerror'); ?></th>
			<th><?php echo $this->Paginator->sort('regex'); ?></th>
			<th><?php echo $this->Paginator->sort('type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('order'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($fields as $field): ?>
	<tr>
		<td><?php echo h($field['Field']['id']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['name']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['domid']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['label']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['placeholder']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['required']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['onempty']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['onerror']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['regex']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($field['Type']['name'], array('controller' => 'types', 'action' => 'view', $field['Type']['id'])); ?>
		</td>
		<td><?php echo h($field['Field']['status']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['order']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['created']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $field['Field']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $field['Field']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $field['Field']['id']), array(), __('Are you sure you want to delete # %s?', $field['Field']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Field'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responses'), array('controller' => 'responses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Response'), array('controller' => 'responses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forms'), array('controller' => 'forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form'), array('controller' => 'forms', 'action' => 'add')); ?> </li>
	</ul>
</div>
