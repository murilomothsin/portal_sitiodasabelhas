
      <div class="fotorama" >
        <img src="<?php echo $evento['BrwImage']['main']['sizes']['1024_1024']; ?>">
      <?php
      foreach ($evento['BrwImage']['gallery'] as $key => $value) {
        //pr($value);
        echo '<img src="'.$value['sizes']['1024_1024'].'">';
      } 
      ?>
      </div>