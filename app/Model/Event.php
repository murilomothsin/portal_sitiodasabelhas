<?php

  class Event extends AppModel {

    public $useTable = 'event';

    public $name = 'Event';

    var $belongsTo = array('EventStatus');

    public $validate = array(
      'title' => array(
        'required' => array(
           'rule' => array('notEmpty'),
           'message' => 'Digite um titulo para o evento!'
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