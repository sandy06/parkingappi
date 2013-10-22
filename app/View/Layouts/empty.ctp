<?php


$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>

<head>
	<?php echo $this->Html->charset(); ?>

	<?php
	

		echo $this->Html->css('cake.generic2');
		
		echo $this->Html->css('semantic.css');




		echo $scripts_for_layout;
	?>
</head>
<body>


			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>

			<?php echo $content_for_layout; ?>

		
</body>
</html>
