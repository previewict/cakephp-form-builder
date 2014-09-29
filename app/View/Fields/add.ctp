<div class="fields form">
<?php echo $this->Form->create('Field'); ?>
	<fieldset>
		<legend><?php echo __('Add Field'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('domid');
		echo $this->Form->input('label');
		echo $this->Form->input('placeholder');
		echo $this->Form->input('required');
		echo $this->Form->input('onempty');
		echo $this->Form->input('onerror');
		echo $this->Form->input('regex');
		echo $this->Form->input('type_id');
		echo $this->Form->input('status');
		echo $this->Form->input('order');
		echo $this->Form->input('user_id');
		echo $this->Form->input('Form');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Fields'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responses'), array('controller' => 'responses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Response'), array('controller' => 'responses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forms'), array('controller' => 'forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form'), array('controller' => 'forms', 'action' => 'add')); ?> </li>
	</ul>
</div>
