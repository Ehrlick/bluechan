<?php
class Post extends AppModel {

	public $belongsTo = array('Category');
	public $hasMany = array('Reply');

	var $name = 'Post';
	var $actsAs = array(
			'Image'=>array(
					'fields'=>array(
							'image'=>array(
									'thumbnail'=>array('create'=>true),
									'resize'=>array(
											'width'=>'200',
											'height'=>'200',
											'aspect'=>true,
											'allow_enlarge'=>true,
									),
									'versions'=>array(
											array(
													'prefix'=>'small',
													'width'=>'70',
													'height'=>'70',
													'aspect'=>true,
													'allow_enlarge'=>true,
											),
									)
							)
					)
			)
	);
	
	public $validate = array(

	);


}