<table>
<?php
  $flag = true;
  foreach ($cabanas as $key => $value) {
    echo print_img_pousada($value, $key);
    echo '<tr style="height: 30px;"><td colspan="2"></td></tr>';
  }

  function print_img_pousada($cabana, $index) {
    if($index % 2 == 0){
      return '<tr style="height: 275px; margin: 20px;">
          <td style="width: 50%;"><img src="'.$cabana['BrwImage']['main']['url'].'" class="img-responsive" alt="Responsive image"></td>
          <td style="width: 50%; padding: 20px;">
            <blockquote>
              <h3>'.$cabana['Hotel']['title'].'</h3>
              <p>
                '.$cabana['Hotel']['description'].'
              </p>
              <button type="button" class="btn btn-primary btn-lg ver_mais" data-type="hotel" data-id="'.$cabana['Hotel']['id'].'" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
                Ver mais!
              </button>
            </blockquote>
          </td>
        </tr>';
    }else{
      return '<tr style="height: 275px; margin: 20px;">
    <td style="width: 50%; padding: 20px;">
      <blockquote class="blockquote-reverse">
        <h3>'.$cabana['Hotel']['title'].'</h3>
        <p>
          '.$cabana['Hotel']['description'].'
        </p>
        <button type="button" class="btn btn-primary btn-lg ver_mais" data-type="hotel" data-id="'.$cabana['Hotel']['id'].'" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">
              Ver mais!
        </button>
      </blockquote>
    </td>
    <td style="width: 50%;"><img src="'.$cabana['BrwImage']['main']['url'].'" class="img-responsive" alt="Responsive image"></td>
  </tr>';
    }
  }
?>
</table>

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