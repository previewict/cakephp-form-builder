<div class="forms view">
<h2><?php echo __('Form'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($form['Form']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($form['Form']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($form['Form']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($form['Form']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($form['Form']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($form['Form']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($form['Form']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Form'), array('action' => 'edit', $form['Form']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Form'), array('action' => 'delete', $form['Form']['id']), array(), __('Are you sure you want to delete # %s?', $form['Form']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Forms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fields'), array('controller' => 'fields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Field'), array('controller' => 'fields', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Fields'); ?></h3>
	<?php if (!empty($form['Field'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Domid'); ?></th>
		<th><?php echo __('Label'); ?></th>
		<th><?php echo __('Placeholder'); ?></th>
		<th><?php echo __('Required'); ?></th>
		<th><?php echo __('Onempty'); ?></th>
		<th><?php echo __('Onerror'); ?></th>
		<th><?php echo __('Regex'); ?></th>
		<th><?php echo __('Type Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($form['Field'] as $field): ?>
		<tr>
			<td><?php echo $field['id']; ?></td>
			<td><?php echo $field['name']; ?></td>
			<td><?php echo $field['domid']; ?></td>
			<td><?php echo $field['label']; ?></td>
			<td><?php echo $field['placeholder']; ?></td>
			<td><?php echo $field['required']; ?></td>
			<td><?php echo $field['onempty']; ?></td>
			<td><?php echo $field['onerror']; ?></td>
			<td><?php echo $field['regex']; ?></td>
			<td><?php echo $field['type_id']; ?></td>
			<td><?php echo $field['status']; ?></td>
			<td><?php echo $field['order']; ?></td>
			<td><?php echo $field['user_id']; ?></td>
			<td><?php echo $field['created']; ?></td>
			<td><?php echo $field['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'fields', 'action' => 'view', $field['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'fields', 'action' => 'edit', $field['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'fields', 'action' => 'delete', $field['id']), array(), __('Are you sure you want to delete # %s?', $field['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Field'), array('controller' => 'fields', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Groups'); ?></h3>
	<?php if (!empty($form['Group'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($form['Group'] as $group): ?>
		<tr>
			<td><?php echo $group['id']; ?></td>
			<td><?php echo $group['name']; ?></td>
			<td><?php echo $group['description']; ?></td>
			<td><?php echo $group['created']; ?></td>
			<td><?php echo $group['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'groups', 'action' => 'view', $group['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'groups', 'action' => 'edit', $group['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'groups', 'action' => 'delete', $group['id']), array(), __('Are you sure you want to delete # %s?', $group['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
