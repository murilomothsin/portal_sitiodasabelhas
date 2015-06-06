
<div class="row">
  <?php
    $i = 1;
    foreach ($galerias as $key => $value) {
      if($i == 3){
        echo '<div class="row">';
      }
      echo '
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="'.$value['BrwImage']['main']['url'].'" alt="'.$value['BrwImage']['main']['model'].'" style="max-height: 400px;">
          <div class="caption" style="position: relative; ">
            <center><h3><strong>'.$value['Galery']['title'].'</strong></h3></center>
            <p>'.nl2br($value['Galery']['description']).'</p>
            <button type="button" class="btn btn-primary btn-lg ver_mais" data-type="galery" data-id="'.$value['Galery']['id'].'" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
              Mais fotos
            </button>
            <div class="fb-share-button" data-href="http://dev.sitiodasabelhas.com.br/galeria?album='.$value['Galery']['id'].'" data-layout="button"></div>
            <span style="position: absolute; bottom: 10px; right: 5px; color: #1FA440;">
             <i>'.$this->Time->format($value['Galery']['when'], '%d/%m/%Y').'</i>
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
      <!-- <div class="modal-footer" style="padding-top: 5px; padding-bottom: 5px;">
        <button type="button" class="btn btn-default" id="CloseModal" data-dismiss="modal">Fechar</button>
      </div> -->
    </div>
  </div>
</div>

<?php 
if(isset($request_album) && $request_album != 0){
  echo $this->Html->script('vendor/jquery');
  ?>

  <script type="text/javascript">
    $( document ).ready(function(){
      console.log("ALbum: <?php echo $request_album ?>");
      $('#myModal').modal('show');
      $("#contentView").html('<center><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Carregando...</center>');
      var id = <?php echo $request_album ?>;
      var type = "galery";
      $.get("/cakephp/pages/ajax/"+id+"/"+type,
        null,
        function(data) {
          $("#contentView").html(data);
        }
      );

    });
  </script>
  <?php
}
?>