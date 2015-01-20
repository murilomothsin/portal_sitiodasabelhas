<?php

	class Hotel extends AppModel {

		public $useTable = 'hotel';

		public $name = 'Hotel';

		public $validate = array(
		  'title' => array(
				'required' => array(
					 'rule' => array('notEmpty'),
					 'message' => 'Digite um titulo para a cabana!'
				)
		  )
		);

	var $brwConfig = array(
    'images' => array(
      'main' => array(
        'name_category' => 'Main image',
        'sizes' => array('250x100'),
        'index' => true,
        'description' => false,
      ),
      'gallery' => array(
        'name_category' => 'Images for gallery',
        'sizes' => array('150x100', '1024_1024'),
        'index' => false,
        'description' => true,
      ),
    ),
  );

	}

?>