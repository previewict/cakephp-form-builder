<div class="fields view">
<h2><?php echo __('Field'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($field['Field']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($field['Field']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Domid'); ?></dt>
		<dd>
			<?php echo h($field['Field']['domid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Label'); ?></dt>
		<dd>
			<?php echo h($field['Field']['label']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Placeholder'); ?></dt>
		<dd>
			<?php echo h($field['Field']['placeholder']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Required'); ?></dt>
		<dd>
			<?php echo h($field['Field']['required']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Onempty'); ?></dt>
		<dd>
			<?php echo h($field['Field']['onempty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Onerror'); ?></dt>
		<dd>
			<?php echo h($field['Field']['onerror']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Regex'); ?></dt>
		<dd>
			<?php echo h($field['Field']['regex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($field['Type']['name'], array('controller' => 'types', 'action' => 'view', $field['Type']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($field['Field']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo h($field['Field']['order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($field['Field']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($field['Field']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($field['Field']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Field'), array('action' => 'edit', $field['Field']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Field'), array('action' => 'delete', $field['Field']['id']), array(), __('Are you sure you want to delete # %s?', $field['Field']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fields'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Field'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responses'), array('controller' => 'responses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Response'), array('controller' => 'responses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forms'), array('controller' => 'forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form'), array('controller' => 'forms', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Responses'); ?></h3>
	<?php if (!empty($field['Response'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Field Id'); ?></th>
		<th><?php echo __('Response'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($field['Response'] as $response): ?>
		<tr>
			<td><?php echo $response['id']; ?></td>
			<td><?php echo $response['field_id']; ?></td>
			<td><?php echo $response['response']; ?></td>
			<td><?php echo $response['user_id']; ?></td>
			<td><?php echo $response['created']; ?></td>
			<td><?php echo $response['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'responses', 'action' => 'view', $response['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'responses', 'action' => 'edit', $response['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'responses', 'action' => 'delete', $response['id']), array(), __('Are you sure you want to delete # %s?', $response['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Response'), array('controller' => 'responses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Forms'); ?></h3>
	<?php if (!empty($field['Form'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($field['Form'] as $form): ?>
		<tr>
			<td><?php echo $form['id']; ?></td>
			<td><?php echo $form['name']; ?></td>
			<td><?php echo $form['description']; ?></td>
			<td><?php echo $form['status']; ?></td>
			<td><?php echo $form['user_id']; ?></td>
			<td><?php echo $form['created']; ?></td>
			<td><?php echo $form['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'forms', 'action' => 'view', $form['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'forms', 'action' => 'edit', $form['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'forms', 'action' => 'delete', $form['id']), array(), __('Are you sure you want to delete # %s?', $form['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Form'), array('controller' => 'forms', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
