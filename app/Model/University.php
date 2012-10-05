<?php
class University extends AppModel {
	
	public $hasMany = array('Category');
	
	public $validate = array(
		
	);
}