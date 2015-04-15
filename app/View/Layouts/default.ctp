<?php

$cakeDescription = __d('cake_dev', 'Sitio das abelhas');
$cakeVersion = __d('cake_dev', 'Sitio das abelhas - 2014')
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
			<!-- <div class="row">
				<div class="col-md-2">
					<h4 class="link-footer"><?php echo $this->Html->link('O Sitio', '/'); ?></h4>
				</div>
				<div class="col-md-2">
					<h4 class="link-footer"><?php echo $this->Html->link('Pousada', '/pousada'); ?></h4>
				</div>
				<div class="col-md-2">
					<h4 class="link-footer"><?php echo $this->Html->link('Eventos', '/eventos'); ?></h4>
				</div>
				<div class="col-md-2">
					<h4 class="link-footer"><?php echo $this->Html->link('Lazer', '/lazer'); ?></h4>
				</div>
				<div class="col-md-2">
					<h4 class="link-footer"><?php echo $this->Html->link('Galeria', '/galeria'); ?></h4>
				</div>
				<div class="col-md-2">
					<h4 class="link-footer"><?php echo $this->Html->link('Contato', '/contato'); ?></h4>
				</div>
			</div>
			<hr> -->
			<div class="row">
				<div class="col-md-3">
					<div align="center">
						<?php echo $this->Html->link($this->Html->image('logo.jpg', array('alt' => 'Sitio das abelhas', 'height' => '100')), '/', array('escape' => false)); ?>
					</div>
				</div>
				<div class="col-md-2" style="border-left: 1px solid #eee; border-right: 1px solid #eee" align="center">
					<ul style="list-style: none; margin: 0px; padding: 0px;">
						<li class="link-footer"><?php echo $this->Html->link('O Sitio', '/'); ?></li>
						<li class="link-footer"><?php echo $this->Html->link('Pousada', '/pousada'); ?></li>
						<li class="link-footer"><?php echo $this->Html->link('Eventos', '/eventos'); ?></li>
						<li class="link-footer"><?php echo $this->Html->link('Lazer', '/lazer'); ?></li>
						<li class="link-footer"><?php echo $this->Html->link('Galeria', '/galeria'); ?></li>
						<li class="link-footer"><?php echo $this->Html->link('Contato', '/contato'); ?></li>
					</ul>
				</div>
				<div class="col-md-6 col-md-offset-1">
					<div class="col-md-6">
						<div align="center">
							<h4>Telefone:</h4>
		          <p>
		            Fixo Vivo (51)3179-4100<br />
		            Geraldo (51)9981-7601 <br />
		            Leonardo (51)9777-9658<br />
		          </p>
						</div>
					</div>
					<div class="col-md-6">
						<address align="center">
							<h4>Endereço</h4>
			        <p>
			          Rua Pedro Alfredo Breyer <br />
			          Bairro Padre Tomé <br />
			          Taquara - RS <br />
			          95600-000
			        </p>
			      </address>
					</div>
					<div class="col-md-12" align="center">
						<?php echo $this->Html->link('Como chegar', '/contato', array('escape' => false, 'class' => 'btn btn-primary')); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-4 col-md-4">
					<div align="center">
						Sitio das abelhas - <?php echo date('Y'); ?> <br />
						contato@sitiodasabelhas.com.br
					</div>
				</div>
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
