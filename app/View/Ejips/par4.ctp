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
 foreach ($ejips as $ejip):
  $class = null;
  if ($i++ % 2 == 0) {
   $class = ' class="altrow"';
  }
?>

<tr<?php echo $class;?>>
<td><?php echo $u++; ?>&nbsp;</td>
<td style="width:20%"><?php echo $this->Html->link($ejip['Ejip']['address'], array('action' => 'view', $ejip['Ejip']['address']));?></td>
<td style="width:10%"><?php echo $ejip['Ejip']['space']?></td>
<td style="width:30%"><?php echo $ejip['Ejip']['parked']?></td>
<td style="width:30%"><?php echo $ejip['Ejip']['charges']?></td>



</tr>
<?php endforeach;?>
	<?php unset($egip);?>
	
	
</table>
<?php echo $this->Html->link('Im coming', array('controller'=>'ejips', 'action'=>'par4'),array( 'class' => 'button')); ?>
<?php echo $this->Html->link('Im going', array('controller'=>'ejips', 'action'=>'par5'),array( 'class' => 'button')); ?>
</div>
