<?php
class Category extends AppModel {
	
	public $belongsTo = array('University');
	public $hasMany = array('Post');
	
	public $validate = array(

	);
	
	
}