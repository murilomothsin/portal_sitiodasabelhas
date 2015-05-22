<?php

  class Food extends AppModel {

    public $useTable = 'food';

    public $name = 'Food';

  var $brwConfig = array(
    'images' => array(
      'main' => array(
        'name_category' => 'Main image',
        'sizes' => array('150x100', '1024_1024'),
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