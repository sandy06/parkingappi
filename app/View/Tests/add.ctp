<div class="users form">
<?php echo $this->Form->create('Test');?>
	<fieldset>
 		<legend>details</legend>
<?php 

echo $this->Form->input('equipment1');
echo $this->Form->input('equipment2');
echo $this->Form->input('equipment3');
echo $this->Form->input('temperature');
echo $this->Form->input('pressure');
echo $this->Form->input('comments');

?>
	</fieldset>
<?php echo $this->Form->end('Submit');?>
</div>