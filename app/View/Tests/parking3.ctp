<div class="user index">
	<h2>DATA TABLE</h2>
	<table width="100%" id="tbl">
<tr>
        <th><?php echo 'ID'; ?></th>
        <th><?php echo 'address'; ?></th>
        <th><?php echo 'space'; ?></th>
		<th><?php echo 'parked'; ?></th>
        <th><?php echo 'Charges'; ?></th>
</tr>
<?php
 $i = 0;
 $u=1;
 foreach ($tests as $test):
  $class = null;
  if ($i++ % 2 == 0) {
   $class = ' class="altrow"';
  }
?>

<tr<?php echo $class;?>>
<td><?php echo $u++; ?>&nbsp;</td> 

<td>
<?php echo $this->Html->link('View', array('action' => 'view', $test['Test']['id']), array('class' => 'OpenDialog')); ?></td>
<td style="width:10%"><?php echo $test['Test']['space']?></td>
<td style="width:30%"><?php echo $test['Test']['parked']?></td>
<td style="width:30%"><?php echo $test['Test']['charges']?></td>



</tr>
<?php endforeach;?>
	<?php unset($test);?>
	
	
</table>
<?php echo $this->Html->link('Im coming', array('controller'=>'tests', 'action'=>'parking3'),array( 'class' => 'button')); ?>
<?php echo $this->Html->link('Im going', array('controller'=>'tests', 'action'=>'parking7'),array( 'class' => 'button')); ?>

</div>




