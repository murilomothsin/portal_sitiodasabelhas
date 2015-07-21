<?php
	class Post extends AppModel {

		public $useTable = 'posts';

		public $name = 'Post';

		public $validate = array(
		  'title' => array(
				'required' => array(
					 'rule' => array('notEmpty'),
					 'message' => 'Digite um titulo para a noticia!'
				)
		  )
		);
	}

?>