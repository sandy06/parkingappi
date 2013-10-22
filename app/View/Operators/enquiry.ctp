
<?php echo $this->Html->script('ckeditor/ckeditor', array('inline' => false));?>
<?php
echo $this->Form->create("Operator");
echo $this->Form->input("name",array('placeholder'=>'Full Name'));
echo $this->Form->input("number",array('placeholder'=>'Contact Number'));
echo $this->Form->input("email",array('placeholder'=>'email'));
echo $this->Form->input("address",array('placeholder'=>'address'));
echo $this->Form->textarea("comments",array('class'=>'ckeditor'));
for($i=1; $i<4; $i++)
{
?>
         <div  id="attachment<?php echo $i;?>" <?php if($i !=1) echo "style='display:none;'";?> >
         	<div>
                  <?php echo $this->Form->input('image'.$i,array('type'=>'file','label' => false,'div' => false));?>
            </div>
            <div  id="attachmentlink<?php echo $i;?>"  <?php if($i==3) echo "style='display:none;'";?>><a href="javascript:void(0);" onclick="show('attachment<?php echo $i+1;?>'); hide('attachmentlink<?php echo $i;?>');">Add Another Attachment</a></div>
            </div>
            <?php } ?>
<?php 
echo $this->Form->end('Save Post');
?>
<script>
function show(target){
	document.getElementById(target).style.display = 'block';
}
function hide(target){
	document.getElementById(target).style.display = 'none';
}
</script>

