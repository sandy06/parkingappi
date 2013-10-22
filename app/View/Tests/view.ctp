<div class="users index">
	<h2>DATA TABLE</h2>
	<table width="50%" id="tbl">
<tr>
        <th><?php echo 'address'; ?></th>

</tr>
<?php
 $i = 0;
 $u=1;
 $k = 0;
 foreach ($tests as $test):
  $class = null;
  if ($i++ % 2 == 0) {
   $class = ' class="altrow"';
  }
  if ($k++ == 6) break;
?>



<td style="width:5%"><?php echo $test['Test']['address'];?></td>




</tr>
<?php endforeach;?>
	<?php unset($test);?>
	
	
</table>

</div>

