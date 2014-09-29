<div class="forms form">
<?php echo $this->Form->create('Form'); ?>
	<fieldset>
		<legend><?php echo __('Edit Form'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('status');
		echo $this->Form->input('user_id');
		echo $this->Form->input('Field');
		echo $this->Form->input('Group');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Form.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Form.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Forms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Fields'), array('controller' => 'fields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Field'), array('controller' => 'fields', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
