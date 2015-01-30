<div class="row">
  <?php 
    foreach ($eventos as $key => $value) {
      echo '
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="'.$value['BrwImage']['main']['sizes']['1050_500'].'" alt="'.$value['BrwImage']['main']['model'].'">
          <div class="caption">
            <center><h3>'.$value['Event']['title'].'</h3></center>
            <p>'.$value['Event']['description'].'</p>
            <button type="button" class="btn btn-primary btn-lg ver_mais" data-id="'.$value['Event']['id'].'">
              Ver mais!
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
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <div id="contentView"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>