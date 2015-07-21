<?php
class EmailConfig {

  public $default = array(
    'transport' => 'Mail',
    'from' => 'contato@sitiodasabelhas.com.br',
    //'charset' => 'utf-8',
    //'headerCharset' => 'utf-8',
  );

  public $smtp = array(
    'transport' => 'Smtp',
    'from' => array('sitiodas@sitiodasabelhas.com.br' => 'My Site'),
    'host' => 'mail.sitiodasabelhas.com.br',
    'port' => 587,
    'timeout' => 30,
    'username' => 'sitiodas',
    'password' => 'd74P69Wzde'
  );
}