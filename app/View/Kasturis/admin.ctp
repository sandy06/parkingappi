<?php
echo $this->Form->create("Kasturi");
echo $this->Form->input("address",array('class'=>'inputField', 'placeholder'=>''));
echo $this->Form->input("space",array('class'=>'inputField', 'placeholder'=>''));
echo $this->Form->input("aspace",array('class'=>'inputField', 'placeholder'=>''));
echo $this->Form->input("charges",array('class'=>'inputField', 'placeholder'=>''));
echo $this->Form->submit("Submit",array('class'=>'button',));
echo $this->Form->end();
?>