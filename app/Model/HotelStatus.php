<?php
class HotelStatus extends AppModel {

  var $hasMany = array('Hotel');

  var $brwConfig = array(
    'actions' => array(
      'add' => false,
      'delete' => false,
      'edit' => false,
    ),
  );
}