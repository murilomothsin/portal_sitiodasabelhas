<?php

$cakeDescription = __d('cake_dev', 'Sítio das abelhas');
$cakeVersion = __d('cake_dev', 'Sítio das abelhas - 2014')
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap');
		echo $this->Html->css('fotorama');
		echo $this->Html->css('default');

		echo $this->fetch('meta');
		echo $this->fetch('css');

		echo $this->fetch('script');

	?>
</head>
<body>
	<div id="container" class="container-fluid">

		<div id="header" class="row" style="background-color: #FFF;">
			<div class="col-md-4 logo">
				<center><?php echo $this->Html->link($this->Html->image('logo.jpg', array('alt' => 'Sitio das abelhas', 'height' => '75')), '/', array('escape' => false)); ?></center>
			</div>
			<div class="col-md-6 menu-superior">
				<ul class="nav nav-pills nav-justified" role="tablist">
				  <li role="presentation" class="<?php echo (!empty($this->params['action']) && ($this->params['action'] == 'home') )? 'active' : 'inactive'?>"><?php echo $this->Html->link('O Sitio', '/'); ?></li>
				  <li role="presentation" class="<?php echo (!empty($this->params['action']) && ($this->params['action'] == 'hotel') )? 'active' : 'inactive'?>"><?php echo $this->Html->link('Pousada', '/pousada'); ?></li>
				  <li role="presentation" class="<?php echo (!empty($this->params['action']) && ($this->params['action'] == 'event') )? 'active' : 'inactive'?>"><?php echo $this->Html->link('Eventos', '/eventos'); ?></li>
				  <li role="presentation" class="<?php echo (!empty($this->params['action']) && ($this->params['action'] == 'leisure') )? 'active' : 'inactive'?>"><?php echo $this->Html->link('Lazer', '/lazer'); ?></li>
				  <li role="presentation" class="<?php echo (!empty($this->params['action']) && ($this->params['action'] == 'galery') )? 'active' : 'inactive'?>"><?php echo $this->Html->link('Galeria', '/galeria'); ?></li>
				  <li role="presentation" class="<?php echo (!empty($this->params['action']) && ($this->params['action'] == 'contact') )? 'active' : 'inactive'?>"><?php echo $this->Html->link('Contato', '/contato'); ?></li>
				</ul>
			</div>
		</div>

		<div id="content" class="row"  style="background-color: #FFF;">
			<?php echo $this->Session->flash(); ?>
			<div class="col-md-12">
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>

		<div id="footer" class="row"  style="background-color: #FFF;">
			<hr>
			<div class="col-md-offset-4 col-md-4">
				<p>
					Sítio das abelhas - 2014
				</p>
			</div>
		</div>

	</div>

	<?php
		echo $this->Html->script('vendor/jquery');
		echo $this->Html->script('bootstrap/bootstrap-dropdown');
		echo $this->Html->script('bootstrap/bootstrap-modal');
		echo $this->Html->script('fotorama');
		echo $this->Html->script('geral');
	?>
</body>
</html>
