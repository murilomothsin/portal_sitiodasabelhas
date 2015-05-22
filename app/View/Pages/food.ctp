<div class="row">
  <?php
    foreach ($food as $key => $value) {
      echo '
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="'.$value['BrwImage']['main']['url'].'" alt="'.$value['BrwImage']['main']['model'].'">
          <div class="caption" style="position: relative;">
            <center><h3><strong>'.$value['Food']['title'].'</strong></h3></center>
            <p>'.nl2br($value['Food']['description']).'</p>
            <button type="button" class="btn btn-primary btn-lg ver_mais" data-type="food" data-id="'.$value['Food']['id'].'" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
              Mais fotos
            </button>
          </div>
        </div>
      </div>
      ';
    }
  ?>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width: 850px; height: 500px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Fechar&nbsp; &times;</span></button>
      </div>
      <div class="modal-body" style="width: 850px; height: 500px; overflow: y;">
        <div id="contentView"></div>
      </div>
    </div>
  </div>
</div>