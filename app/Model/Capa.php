<?php

  class Capa extends AppModel {

    public $useTable = 'capa';

    public $name = 'Capa';

    public $validate = array(
      'title' => array(
        'required' => array(
           'rule' => array('notEmpty'),
           'message' => 'Digite um titulo para a imagem!'
        )
      )
    );

  var $brwConfig = array(
    'images' => array(
      'main' => array(
        'name_category' => 'Main image',
        'sizes' => array('150x100', '1050_500'),
        'index' => true,
        'description' => false,
      ),
    ),
  );

  }

?>