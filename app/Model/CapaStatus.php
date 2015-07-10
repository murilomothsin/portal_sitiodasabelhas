<?php
class CapaStatus extends AppModel {

  var $hasMany = array('Capa');

  var $brwConfig = array(
    'actions' => array(
      'add' => false,
      'delete' => false,
      'edit' => false,
    ),
  );
}