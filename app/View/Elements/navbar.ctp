

<div class="ui inverted menu">
  <?php echo $this->Html->link('Home', array('controller'=>'tests', 'action'=>'equipment'),array( 'class' => 'item')); ?>
   <?php echo $this->Html->link('About Us', array('controller'=>'tests', 'action'=>'about'),array( 'class' => 'item')); ?>
    <?php echo $this->Html->link('Parking Operator', array('controller'=>'operators', 'action'=>'enquiry'),array( 'class' => 'item')); ?>
	 <?php echo $this->Html->link('Contact Us', array('controller'=>'tests', 'action'=>'contact'),array( 'class' => 'item')); ?>



  
					

</div>	
<h2 class="ui inverted  block header">	   

<?php echo $this->Session->flash(); ?>
<?php echo $this->Session->flash('auth'); ?>
</h2>


<?php /*echo $this->Html->link('Login', array('controller'=>'users', 'action'=>'login'),array( 'class' => 'item'));*/ ?>     	
