<?php
class EventStatus extends AppModel {

  var $hasMany = array('Event');

  var $brwConfig = array(
    'actions' => array(
      'add' => false,
      'delete' => false,
      'edit' => false,
    ),
  );
}