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
    data-allowfullscreen="true"
    data-stopautoplayontouch="true"
    data-allowfullscreen="true">
    <?php 
      echo '<a href="'.$evento['BrwImage']['main']['url'].'"></a>';
      foreach ($evento['BrwImage']['gallery'] as $key => $value) {
        //echo $this->Html->image($targetPath.$value);
        echo '<a href="'.$value['url'].'"></a>';
        //echo $this->Html->link('', $targetPath.$value);
      }
    ?>
  </div>
</center>