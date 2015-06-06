<div class="row">
  <?php
    $i = 1;
    foreach ($cabanas as $key => $value) {
      //pr($value);
      if($i == 3){
        echo '<div class="row">';
      }
      echo '
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="'.$value['BrwImage']['main']['url'].'" alt="'.$value['BrwImage']['main']['model'].'" style="max-height: 400px;">
          <div class="caption" style="position: relative; ">
            <center><h3><strong>'.$value['Hotel']['title'].'</strong></h3></center>
            <p style="min-height: 200px;"" >'.nl2br($value['Hotel']['description']).'</p>
            <button type="button" class="btn btn-primary btn-lg ver_mais" data-type="hotel" data-id="'.$value['Hotel']['id'].'" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
              Mais fotos
            </button>
            <span style="font-size: 14px; position: absolute; bottom: 20px; right: 15px; color: #1FA440;">
             <b>'.$value['Hotel']['type'].'</b>
            </span>
          </div>
        </div>
      </div>
      ';
      if($i == 3){
        echo '</div>';
        $i = 0;
      }
      $i++;
    }
  ?>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width: 850px; height: 500px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Fechar <span style="margin-left: 5px;">&times;</span></span></button>
      </div>
      <div class="modal-body" style="width: 850px; height: 500px; overflow: y;">
        <div id="contentView"></div>
      </div>
    </div>
  </div>
</div>