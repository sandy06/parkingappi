<?php
class Operator extends AppModel {
	public $name = 'Operator';
	

	
	public $validate = array(
		'name'=>array(
			'Please enter your equipment.'=>array(
				'rule'=>'notEmpty',
				'message'=>'Please enter your name.'
			)
		),
		
		'number'=>array(
			'temperature value.'=>array(
				'rule'=>'notEmpty',
				'message'=>'Please enter your number.'
			)
		),
		
		'email'=>array(
			'pressure value'=>array(
				'rule'=>'notEmpty',
				'message'=>'Please enter your email.'
			)
		),
		
		'address'=>array(
			'pressure value'=>array(
				'rule'=>'notEmpty',
				'message'=>'Please enter your address.'
			)
		),
		'comments'=>array(
			'pressure value'=>array(
				'rule'=>'notEmpty',
				'message'=>'provide some comment.'
			)
		)

	);
	

	
}
?>