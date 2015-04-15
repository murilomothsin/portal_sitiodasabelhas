<style type="text/css">
.caption-img {
  position: absolute;
  bottom: 5px;
}
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4" style="padding-left: 5px; padding-right: 5px;">
      <div class="fotorama" 
            data-loop="true" 
            data-autoplay="true" 
            data-ratio="16/9" 
            data-width="100%" 
            data-minheight="300">
      <?php
      foreach ($capasPousada as $key => $value) {
        //pr($value);
        echo '<a href="'.$value['BrwImage']['main']['url'].'"></a>';
      } 
      ?>
      </div>
      <center>
        <?php echo $this->Html->link('Pousada', '/pousada', array('escape' => false, 'class' => 'btn btn-primary btn-lg')); ?>
      </center>
    </div>

    <div class="col-md-4" style="padding-left: 5px; padding-right: 5px;">
      <div class="fotorama" 
            data-loop="true" 
            data-autoplay="true" 
            data-ratio="16/9" 
            data-width="100%"
            data-minheight="300" >
      <?php
      foreach ($capasLazer as $key => $value) {
        //pr($value);
        echo '<a href="'.$value['BrwImage']['main']['url'].'"></a>';
      } 
      ?>
      </div>
      <center>
        <?php echo $this->Html->link('Lazer', '/lazer', array('escape' => false, 'class' => 'btn btn-primary btn-lg')); ?>
      </center>
    </div>

    <div class="col-md-4" style="padding-left: 5px; padding-right: 5px;">
      <div class="fotorama" 
            data-loop="true" 
            data-autoplay="true" 
            data-ratio="16/9" 
            data-width="100%" 
            data-minheight="300">
      <?php
      foreach ($capasEventos as $key => $value) {
        //pr($value);
        echo '<a href="'.$value['BrwImage']['main']['url'].'"></a>';
      } 
      ?>
      </div>
      <center>
        <?php echo $this->Html->link('Eventos', '/eventos', array('escape' => false, 'class' => 'btn btn-primary btn-lg')); ?>
      </center>
    </div>

  </div>
</div>
<br />