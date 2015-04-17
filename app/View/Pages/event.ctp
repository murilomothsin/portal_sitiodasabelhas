<div class="row">
  <?php 
    foreach ($eventos as $key => $value) {
      if($value['Event']['event_status_id'] == 1)
        $text = 'Salão com Refeitório';
      else
        $text = 'Salão com Auditório';
      echo '
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="'.$value['BrwImage']['main']['url'].'" alt="'.$value['BrwImage']['main']['model'].'">
          <div class="caption" style="position: relative;">
            <center><h3>'.$value['Event']['title'].'</h3></center>
            <p>'.nl2br($value['Event']['description']).'</p>
            <button type="button" class="btn btn-primary btn-lg ver_mais" data-type="event" data-id="'.$value['Event']['id'].'" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
              Mais fotos
            </button>
            <span style="position: absolute; bottom: 20px; right: 5px; color: #1FA440;">
            <b>'.$text.'</b>
            </span>
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Fechar &times;</span></button>
      </div>
      <div class="modal-body" style="width: 850px; height: 500px; overflow: y;">
        <div id="contentView"></div>
      </div>
    </div>
  </div>
</div>