
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>

<script>
  var map;
  function initialize() {
    var mapOptions = {
      zoom: 9,
      center: new google.maps.LatLng(-29.6734521, -50.7398933),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapMaker: true
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
    mapOptions);
    var endereco = 'Rua Pedro Alfredo Breyer, Taquara - RS';
    var latlng = new google.maps.LatLng(-29.6734521, -50.7398933);
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
    <p><small>Para entrar em contato conosco por email, preencha os dados abaixo e clique em enviar.</small></p>

    <div class="col-md-6" style="padding-right: 20px;">
      <?php
        echo $this->Form->input('nome',
                            array('div' => 'form-group',
                                  'class' => 'form-control',
                                  'placeholder' => 'Nome',
                                  'label' => array('text' => 'Nome: ')
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
    <div class="col-md-6">
      <?php
      echo $this->Form->input('telefone',
                            array('div' => 'form-group',
                                  'class' => 'form-control',
                                  'placeholder' => 'Telefone',
                                  'label' => array('text' => 'Telefone: ')
                                  )
                              );
      echo $this->Form->input('email',
                          array('div' => 'form-group',
                                'class' => 'form-control',
                                'type' => 'email',
                                'placeholder' => 'E-mail',
                                'label' => array('text' => 'E-mail: ')
                                )
                            );
    ?>
    </div>
    <div class="col-md-8">
      <?php
        echo $this->Form->input('qual',
                          array('div' => 'form-group',
                                'class' => 'form-control',
                                'placeholder' => 'Nome da escola/igreja/empresa do grupo',
                                'label' => array('text' => 'Qual? ')
                                )
                            );
      ?>
    </div>
    <div style="padding-left: 20px; " class="col-md-4">
      <?php
        echo $this->Form->input('pessoas',
                          array('div' => 'form-group',
                                'class' => 'form-control',
                                'placeholder' => 'Número de pessoas',
                                'label' => array('text' => 'Número de pessoas: ')
                                )
                            );
      ?>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        <label class="label-control">Assunto:</label> <br>
        <label><input name="data[Email][assunto]" type="radio" id="EmailAssunto" name="EmailAssunto" value="Reserva">Reservas</label>&nbsp;&nbsp;&nbsp;
        <label><input name="data[Email][assunto]" type="radio" id="EmailAssunto" name="EmailAssunto" value="Informacoes">Informações</label>
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
        <label class="label-control">Você é:</label> <br>
        <label><input name="data[Email][remetente]" type="radio" id="EmailRemetente" name="EmailRemetente" value="Escola">Escola</label>&nbsp;&nbsp;
        <label><input name="data[Email][remetente]" type="radio" id="EmailRemetente" name="EmailRemetente" value="Igreja">Igreja</label>&nbsp;&nbsp;
        <label><input name="data[Email][remetente]" type="radio" id="EmailRemetente" name="EmailRemetente" value="Empresa">Empresa</label>&nbsp;&nbsp;
        <label><input name="data[Email][remetente]" type="radio" id="EmailRemetente" name="EmailRemetente" value="Escoteiros">Escoteiros</label>&nbsp;&nbsp;
        <label><input name="data[Email][remetente]" type="radio" id="EmailRemetente" name="EmailRemetente" value="Outros">Outros</label>
      </div>
    </div>
    
    <div class="col-md-4 col-md-offset-4">

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
        <center>
          <!-- <div id="map-canvas"></div> -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13866.361375836257!2d-50.74209144445801!3d-29.673659684041336!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95191e988c6effab%3A0xaa7f5fa356192f1f!2sR.+Pedro+Alfredo+Breyer%2C+Taquara+-+RS%2C+95600-000%2C+Brasil!5e0!3m2!1spt-BR!2sus!4v1433597663011" width="600" height="450" frameborder="0" style="border:0"></iframe>
         
        </center>
      </div>
    </div>

    <hr>

      <div class="col-md-6">
        <div class="col-md-12">
          <center>
            <h4>Telefone:</h4>
            <p>
              Fixo Vivo (51)3179-4100<br />
              Geraldo (51)9981-7601 <br />
              Leonardo (51)9777-9658<br />
            </p>
          </center>
        </div>
        <div class="col-md-12">
          <center>
            <h4>Endereço:</h4>
            <p>
              Rua Pedro Alfredo Breyer S/N <br />
              Bairro Padre Tomé <br />
              Taquara - RS <br />
              95600-000
            </p>
          </center>
          <center>
            <h4>E-mail:</h4>
            <p>contato@sitiodasabelhas.com.br</p>
          </center>
        </div>
      </div>

      <div class="col-md-6">
        <div class="col-md-12" align="center">
          <div class="fb-like-box" data-href="https://www.facebook.com/sitiodasabelhas" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
        </div>
      </div>

  </div>

</div>
