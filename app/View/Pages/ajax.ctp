<?php

echo $this->Html->css('fotorama');
echo $this->Html->script('vendor/jquery');
echo $this->Html->script('fotorama');

?>
<center>
  <div class="fotorama" 
    data-nav="thumbs" 
    data-width="600" 
    data-ratio="600/360" 
    data-max-width="100%"
    data-autoplay="true"
    data-stopautoplayontouch="false"
    data-allowfullscreen="true">
    <?php 
      echo '<a href="'.$evento['BrwImage']['main']['sizes']['1024_1024'].'"></a>';
      foreach ($evento['BrwImage']['gallery'] as $key => $value) {
        //echo $this->Html->image($targetPath.$value);
        echo '<a href="'.$value['sizes']['1024_1024'].'"></a>';
        //echo $this->Html->link('', $targetPath.$value);
      }
    ?>
  </div>
</center>