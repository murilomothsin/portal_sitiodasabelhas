<style type="text/css">
.caption-img {
  position: absolute;
  bottom: 5px;
}
</style>
<div class="container-fluid">
  <div class="row">

    <div class="col-md-4">
      <div class="fotorama" 
            data-nav="thumbs" 
            data-loop="true" 
            data-autoplay="false" 
            data-ratio="16/9" 
            data-width="100%" 
            data-minheight="350">
      <?php
      foreach ($capas as $key => $value) {
        //pr($value);
        echo '<div data-img="'.$value['BrwImage']['main']['url'].'" data-thumb="'.$value['BrwImage']['main']['url'].'"><center><div class="well col-md-6 col-md-offset-2 caption-img">'.$value['Capa']['description'].'</div></center></div>';
      } 
      ?>
      </div>
    </div>

    <div class="col-md-4">
      <div class="fotorama" 
            data-nav="thumbs" 
            data-loop="true" 
            data-autoplay="false" 
            data-ratio="16/9" 
            data-width="100%"
            data-minheight="350" >
      <?php
      foreach ($capas as $key => $value) {
        //pr($value);
        echo '<div data-img="'.$value['BrwImage']['main']['url'].'" data-thumb="'.$value['BrwImage']['main']['url'].'"><center><div class="well col-md-6 col-md-offset-2 caption-img">'.$value['Capa']['description'].'</div></center></div>';
      } 
      ?>
      </div>
    </div>

    <div class="col-md-4">
      <div class="fotorama" 
            data-nav="thumbs" 
            data-loop="true" 
            data-autoplay="false" 
            data-ratio="16/9" 
            data-width="100%" 
            data-minheight="350">
      <?php
      foreach ($capas as $key => $value) {
        //pr($value);
        echo '<div data-img="'.$value['BrwImage']['main']['url'].'" data-thumb="'.$value['BrwImage']['main']['url'].'"><center><div class="well col-md-6 col-md-offset-2 caption-img">'.$value['Capa']['description'].'</div></center></div>';
      } 
      ?>
      </div>
    </div>

  </div>
</div>
<br />