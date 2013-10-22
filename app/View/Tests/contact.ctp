<!DOCTYPE html>
<html>
<head>
<style>
body
{
background-color:#d0e4fe;
} 
</style>
</head>
<body>
<?php echo $this->Html->script('ckeditor/ckeditor', array('inline' => false));?>
<?php
echo $this->Form->create("Test");
echo $this->Form->input("Full Name",array('class'=>'inputField', 'placeholder'=>'Full Name'));
echo $this->Form->input("Age",array('class'=>'inputField', 'name'=>'', 'placeholder'=>'Age'));
echo $this->Form->input("Contact Number",array('class'=>'inputField', 'placeholder'=>'Contact Number'));
echo $this->Form->input("Email",array('class'=>'inputField', 'name'=>'', 'placeholder'=>'email'));
echo 'Comments';
echo $this->Form->textarea("Comments",array('class'=>'ckeditor'));
echo $this->Form->submit("Submit",array('class'=>'button',));
echo $this->Form->end();
?>
</body>
