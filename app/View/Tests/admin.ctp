<?php
echo $this->Form->create("Test");
echo $this->Form->input("space",array('placeholder'=>'space'));
echo $this->Form->input("parked",array('placeholder'=>'parked'));
echo $this->Form->input("charges",array('placeholder'=>'charges'));
echo $this->Form->submit("Submit",array('class'=>'button',));
echo $this->Form->end();
?>