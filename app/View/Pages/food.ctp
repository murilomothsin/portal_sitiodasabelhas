<div class="row">
  <div class="col-md-4" align="center">
    <?php echo $this->Html->image('comida_3.jpg', array('alt' => 'Comida 3', 'style' => 'height: 225px')); ?>
  </div>
  <div class="col-md-4" align="center">
    <?php echo $this->Html->image('comida_1.jpg', array('alt' => 'Comida 1', 'style' => 'height: 225px')); ?>
  </div>
  <div class="col-md-4" align="center">
    <?php echo $this->Html->image('comida_2.jpg', array('alt' => 'Comida 2', 'style' => 'height: 225px')); ?>
  </div>
</div>
<br />

<div class="row">
  <div align="center">
    <span class="title">Alimentação</span>

    <button type="button" class="btn btn-primary btn-lg ver_mais" data-type="food" data-id="1" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
      Mais fotos
    </button>
  </div>
</div>

<hr>

<div class="row">
  <div align="center">
    <?php 
    echo nl2br($food[0]['Food']['description']);
    ?>
  </div>
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