<?php

  class EventText extends AppModel {

    public $useTable = 'event_text';

    public $name = 'EventText';

    public $validate = array(
      'description' => array(
        'required' => array(
           'rule' => array('notEmpty'),
           'message' => 'Digite uma descriçao!'
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