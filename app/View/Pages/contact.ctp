
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>

<script>
  var map;
  function initialize() {
    var mapOptions = {
      zoom: 14,
      center: new google.maps.LatLng(-29.673000, -50.739972),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
    mapOptions);
    var endereco = 'Rua Pedro Alfredo Breyer, Taquara - RS';
    var latlng = new google.maps.LatLng(-29.673000, -50.739972);
    geocoder = new google.maps.Geocoder();
    geocoder.geocode({'latLng':latlng}, function(results, status){
      if( status = google.maps.GeocoderStatus.OK){
        latlng = results[0].geometry.location;
        markerInicio = new google.maps.Marker({position: latlng,map: map});
        map.setCenter(latlng);
      }
    });
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div class="row">

  <div class="col-md-6 form-contact" style="padding-right: 20px;">
    <?php echo $this->Form->create('Email', array('class' => 'form-horizontal')); ?>
    
    <h3>Contato</h3>
    <hr>
    <p><small>Para entrar em contato conosco por email, preencha os dados abaixo e clique em enviar. O preenchimento dos campos marcados com asterisco (*) e obrigatorio para envio da mensagem. Em breve retornamos o cantato. <strong>Obrigado</strong></small></p>

    <div class="col-md-6" style="padding-right: 20px;">
      <?php
        echo $this->Form->input('nome', 
                            array('div' => 'form-group', 
                                  'class' => 'form-control', 
                                  'placeholder' => 'Nome',
                                  'label' => array('text' => 'Nome: ')
                                  )
                              );
        echo $this->Form->input('telefone', 
                            array('div' => 'form-group',
                                  'class' => 'form-control', 
                                  'placeholder' => 'Telefone',
                                  'label' => array('text' => 'Telefone: ')
                                  )
                              );
        
      ?>
    </div>
    <div class="col-md-6">
      <?php
      echo $this->Form->input('email', 
                          array('div' => 'form-group',
                                'class' => 'form-control', 
                                'type' => 'email',
                                'placeholder' => 'E-mail',
                                'label' => array('text' => 'E-mail: ')
                                )
                            );
      echo $this->Form->input('endereco', 
                          array('div' => 'form-group',
                                'class' => 'form-control',
                                'placeholder' => 'Cidade',
                                'label' => array('text' => 'Cidade: ')
                                )
                            );
      
    ?>
    </div>

    <div class="col-md-4">
      <div class="form-group">
        <label class="label-control">Assunto:</label> <br>
        <label><input name="data[Email][assunto]" type="radio" id="EmailAssunto" name="EmailAssunto" value="Reserva">Reservas</label>
        <label><input name="data[Email][assunto]" type="radio" id="EmailAssunto" name="EmailAssunto" value="Informacoes">Informaçoes</label>
      </div>
    </div>
    <div class="col-md-7 col-md-offset-1">
      <div class="form-group">
        <label class="label-control">Voce e:</label> <br>
        <label><input name="data[Email][remetente]" type="radio" id="EmailRemetente" name="EmailRemetente" value="Escola">Escola</label>
        <label><input name="data[Email][remetente]" type="radio" id="EmailRemetente" name="EmailRemetente" value="Igreja">Igreja</label>
        <label><input name="data[Email][remetente]" type="radio" id="EmailRemetente" name="EmailRemetente" value="Empresa">Empresa</label>
        <label><input name="data[Email][remetente]" type="radio" id="EmailRemetente" name="EmailRemetente" value="Escoteiros">Escoteiros</label>
        <label><input name="data[Email][remetente]" type="radio" id="EmailRemetente" name="EmailRemetente" value="Outros">Outros</label>
      </div>
    </div>

    <div class="col-md-4">
      <?php
        echo $this->Form->input('pessoas', 
                          array('div' => 'form-group',
                                'class' => 'form-control',
                                'placeholder' => 'Numero de pessoas',
                                'label' => array('text' => 'Numero de pessoas: ')
                                )
                            );
      ?>
    </div>
    <div class="col-md-4 col-md-offset-4">
      <div class="form-group">
        <label class="label-control">Alimentaçao:</label> <br>
        <label><input name="data[Email][alimentacao]" type="radio" id="EmailAlimentacao" name="EmailAlimentacao" value="Sim">Sim</label>
        <label><input name="data[Email][remetente]" type="radio" id="EmailAlimentacao" name="EmailAlimentacao" value="Nao">Nao</label>
      </div>
    </div>

    <div class="col-md-12">
      <?php
      
      echo $this->Form->input('Mensagem', 
                              array('div' => 'form-group',
                                    'type' => 'textarea',
                                    'rows' => '5',
                                    'class' => 'form-control',
                                    'placeholder' => 'Digite sua mensagem...',
                                    'label' => array('text' => 'Mensagem: ')
                                    )
                                );
      $options = array( 'label' => 'Enviar',
                        'class' => 'btn'
      );
      echo $this->Form->end($options); ?>
    </div>
  </div>

  <div class="col-md-6">

    <div class="row">
      <div class="col-md-12">
        <center><div id="map-canvas"></div></center>
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col-md-6">
        <center>
          <h4>Telefone:</h4>
          <p>
            Fixo Vivo (51)3179-4100<br />
            Geraldo (51)9981-7601 <br />
            Leonardo (51)9777-9658<br />
          </p>
        </center>
      </div>

      <div class="col-md-6">
        <center>
          <h4>Endereço</h4>
          <p>
            Rua Pedro Alfredo Breyer <br />
            Bairro Padre Tome <br />
            Taquara - RS <br />
            95600-00 
          </p>
        </center>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <center>
          <h4>E-mail</h4>
          <p>contato@sitiodasabelhas.com.br</p>
        </center>
      </div>
    </div>

  </div>

</div>
