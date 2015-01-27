<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {


/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Pages';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Capa', 'Hotel');

	public function home() {
		$this->set("title_for_layout","Home");
		$this->set( "capas", $this->Capa->find('all') );
	}

	public function hotel() {
		$this->set("title_for_layout","Pousada");
		$this->set( "cabanas", $this->Hotel->find('all') );
	}

	public function event() {
		$this->set("title_for_layout","Eventos");
	}

	public function contact() {
		$this->set("title_for_layout","Contato");

		if ($this->request->data) {
			$email = '<span style="border: 1px solid #CCC;width: 400px; padding: 10px; display: inline-block"><h3>Mensagem enviada pelo site</h3><hr>
<b>Nome: </b>'.$this->request->data['Email']['nome'].'<br />
<b>Telefone: </b>'.$this->request->data['Email']['telefone'].'<br />
<b>E-mail: </b>'.$this->request->data['Email']['email'].'<br />
<b>Endereço: </b>'.$this->request->data['Email']['endereco'].'<br />
<b>Assunto: </b>'.$this->request->data['Email']['evento'].'<br />
<b>Mensagem: </b><p>'.nl2br($this->request->data['Email']['Mensagem']).'</p><br />
			';
			$Email = new CakeEmail();
			$Email->config('default');
			$Email->from(array('me@example.com' => 'My Site'))
				->emailFormat('html')
				->to('mothsin@hotmail.com')
				->subject('About')
				->send($email);
			$this->Session->setFlash(__('E-mail enviado com sucesso'));
			$this->redirect(array('action' => 'contato'));
		}

	}
}
