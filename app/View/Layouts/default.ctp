<?php


$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>

<head>
	<?php echo $this->Html->charset(); ?>
	<title>

	</title>
	<?php
	

		echo $this->Html->css('cake.generic');

		echo $this->Html->css('semantic.css');
		echo $this->Html->script('ckeditor/ckeditor', array('inline' => false));


		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<?php echo $this->element('navbar'); ?>

			        
	 </div>	
		    <div id="content">

			<?php /*echo $this->Session->flash();*/ ?>
			<?php /*echo $this->Session->flash('auth');*/ ?>

			<?php echo $content_for_layout; ?>
			
			

		
</body>
</html>
