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
 foreach ($hsrs as $hsr):
  $class = null;
  if ($i++ % 2 == 0) {
   $class = ' class="altrow"';
  }
?>

<tr<?php echo $class;?>>
<td><?php echo $u++; ?>&nbsp;</td>
<td style="width:20%"><?php echo $this->Html->link($hsr['Hsr']['address'], array('action' => 'view', $hsr['Hsr']['address']));?></td>
<td style="width:10%"><?php echo $hsr['Hsr']['space']?></td>
<td style="width:30%"><?php echo $hsr['Hsr']['parked']?></td>
<td style="width:30%"><?php echo $hsr['Hsr']['charges']?></td>



</tr>
<?php endforeach;?>
	<?php unset($hsr);?>
	
	
</table>
<?php echo $this->Html->link('Im coming', array('controller'=>'hsrs', 'action'=>'hs4'),array( 'class' => 'button')); ?>
<?php echo $this->Html->link('Im going', array('controller'=>'hsrs', 'action'=>'hs5'),array( 'class' => 'button')); ?>
</div>
