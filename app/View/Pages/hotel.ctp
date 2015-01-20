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
              <p>
                '.$cabana['Hotel']['description'].'
              </p>
            </blockquote>
          </td>
        </tr>';
    }else{
      return '<tr style="height: 275px; margin: 20px;">
    <td style="width: 50%; padding: 20px;">
      <blockquote class="blockquote-reverse">
        <p>
          '.$cabana['Hotel']['description'].'
        </p>
      </blockquote>
    </td>
    <td style="width: 50%;"><img src="'.$cabana['BrwImage']['main']['url'].'" class="img-responsive" alt="Responsive image"></td>
  </tr>';
    }
  }
?>
</table>