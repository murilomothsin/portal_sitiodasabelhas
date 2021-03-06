<?php

  class Galery extends AppModel {

    public $useTable = 'galery';

    public $name = 'Galery';

    public $validate = array(
      'title' => array(
        'required' => array(
           'rule' => array('notEmpty'),
           'message' => 'Digite um titulo para a galeria!'
        )
      )
    );
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
            'sizes' => array('275x175', '1024_1024'),
            'index' => false,
            'description' => true,
          ),
      ),
    );
  }

?>