<?php
echo 'Ola';

pr($evento);

?>

<style type="text/css">
.caption-img {
  position: absolute;
  bottom: 5px;
  background-color: #fff;
  display: block;
  min-width: 350px;
  max-width: 400px;
  margin: 10px auto;
  margin-left: 400px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}
</style>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="fotorama" 
            data-nav="thumbs" 
            data-loop="true" 
            data-autoplay="true" 
            data-ratio="16/9" 
            data-width="100%" 
            data-minwidth="600"
            data-maxwidth="1200%"
            data-minheight="300"
            data-maxheight="100%">
        <div data-img="<?php echo $evento['BrwImage']['main']['url']; ?>" data-thumb="<?php echo $value['BrwImage']['main']['url']; ?>"><center><span class="text-center caption-img"><h3>'.$value['Capa']['description'].'</h3></span></center></div>
      <?php
      foreach ($capas as $key => $value) {
        //pr($value);
        echo '<div data-img="'.$value['BrwImage']['main']['url'].'" data-thumb="'.$value['BrwImage']['main']['url'].'"><center><span class="text-center caption-img"><h3>'.$value['Capa']['description'].'</h3></span></center></div>';
      } 
      ?>
      </div>
    </div>
  </div>
</div>