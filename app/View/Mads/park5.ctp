<div class="users index">
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
 foreach ($mads as $mad):
  $class = null;
  if ($i++ % 2 == 0) {
   $class = ' class="altrow"';
  }
?>

<tr<?php echo $class;?>>
<td><?php echo $u++; ?>&nbsp;</td>
<td style="width:20%"><?php echo $this->Html->link($mad['Mad']['address'], array('action' => 'view', $mad['Mad']['address']));?></td>
<td style="width:10%"><?php echo $mad['Mad']['space']?></td>
<td style="width:30%"><?php echo $mad['Mad']['parked']?></td>
<td style="width:30%"><?php echo $mad['Mad']['charges']?></td>



</tr>
<?php endforeach;?>
	<?php unset($mad);?>
	
	
</table>
<?php echo $this->Html->link('Im coming', array('controller'=>'mads', 'action'=>'park1'),array( 'class' => 'button')); ?>
<?php echo $this->Html->link('Im going', array('controller'=>'mads', 'action'=>'parking7'),array( 'class' => 'button')); ?>

</div>
