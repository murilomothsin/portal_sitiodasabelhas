<?php

  class DescriptionCapa extends AppModel {

    public $useTable = 'description_capa';

    public $name = 'DescriptionCapa';

    public $validate = array(
      'title' => array(
        'required' => array(
           'rule' => array('notEmpty'),
           'message' => 'Digite uma descricao.'
        )
      )
    );

    var $brwConfig = array(
      'actions' => array(
        'add' => false,
        'delete' => false,
        'edit' => true,
      ),
    );

  }

?>