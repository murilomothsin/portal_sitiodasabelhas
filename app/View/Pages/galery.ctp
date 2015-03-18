<div class="row">
  <?php 
    foreach ($galerias as $key => $value) {
      echo '
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="'.$value['BrwImage']['main']['sizes']['1024_1024'].'" alt="'.$value['BrwImage']['main']['model'].'">
          <div class="caption" style="position: relative; ">
            <center><h3>'.$value['Galery']['title'].'</h3></center>
            <p>'.$value['Galery']['description'].'</p>
            <button type="button" class="btn btn-primary btn-lg ver_mais" data-type="galery" data-id="'.$value['Galery']['id'].'" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
              Ver mais!
            </button>
            <span style="position: absolute; bottom: 10px; right: 5px; color: #1FA440;">
             <i>'.$this->Time->format($value['Galery']['when'], '%d/%m/%Y').'</i>
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body" style="width: 850px; height: 500px; overflow: y;">
        <div id="contentView"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="CloseModal" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>