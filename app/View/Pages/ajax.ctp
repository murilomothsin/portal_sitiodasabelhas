<?php

echo $this->Html->css('fotorama');
echo $this->Html->script('vendor/jquery');
echo $this->Html->script('fotorama');

?>

<style type="text/css">
.removeBackground{
  background: none;
  width: 85px;
  padding-top: 5px;
  border: 1px solid #eee;
  background-color: #efe;
  opacity: 0.5;
}
</style>

<script type="text/javascript">
  var done = false;
    $('.fotorama').on('fotorama:showend', function (e, fotorama, extra) {
        $('.fotorama__arr fotorama__arr--prev').empty().append('Anterior').addClass('shadow').addClass('removeBackground');
      if(!done){
        console.log('Ahooy');
        $('.fotorama__fullscreen-icon').empty().append('Tela cheia <i class="fa fa-expand"></i>').addClass('shadow').addClass('removeBackground');
        done = true;
      }
    });
    $('.fotorama').on('fotorama:fullscreenenter', function (e, fotorama, extra) {
      $('.fotorama__fullscreen-icon').empty().append('Tela cheia <i class="fa fa-compress"></i>').addClass('shadow').addClass('removeBackground');
    });
    $('.fotorama').on('fotorama:fullscreenexit', function (e, fotorama, extra) {
      $('.fotorama__fullscreen-icon').empty().append('Tela cheia <i class="fa fa-expand"></i>').addClass('shadow').addClass('removeBackground');
    });
</script>
<center>
  <div class="fotorama" 
    data-nav="thumbs" 
    data-width="600" 
    data-loop="true"
    data-ratio="600/360" 
    data-max-width="100%"
    data-autoplay="true"
    data-allowfullscreen="true"
    data-stopautoplayontouch="true"
    data-allowfullscreen="true">
    <?php 
      echo '<a href="'.$evento['BrwImage']['main']['url'].'" data-caption="'.$evento['BrwImage']['main']['description'].'"></a>';
      foreach ($evento['BrwImage']['gallery'] as $key => $value) {
        //echo $this->Html->image($targetPath.$value);
        echo '<a href="'.$value['url'].'" data-caption="'.$value['description'].'"></a>';
        //echo $this->Html->link('', $targetPath.$value);
      }
    ?>
  </div>
</center>