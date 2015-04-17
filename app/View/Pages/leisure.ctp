<div class="row">

<?php
$i = 1;
foreach ($lazer as $key => $value) {
  if($i == 3){
    echo '<div class="row">';
  }
  echo '
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="'.$value['BrwImage']['main']['url'].'" alt="'.$value['BrwImage']['main']['model'].'" style="max-height: 400px;">
          <div class="caption" style="position: relative;">
            <center><h3>'.$value['Leisure']['title'].'</h3></center>
            <p>'.nl2br($value['Leisure']['description']).'</p>
            <div align="center">
              <button type="button" class="btn btn-primary btn-lg ver_mais" data-type="leisure" data-id="'.$value['Leisure']['id'].'" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
                Mais fotos
              </button>
            </div>
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Fechar&times;</span></button>
      </div>
      <div class="modal-body" style="width: 850px; height: 500px; overflow: y;">
        <div id="contentView"></div>
      </div>
      
    </div>
  </div>
</div>