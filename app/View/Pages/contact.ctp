
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>

<script>
  var map;
  function initialize() {
    var mapOptions = {
      zoom: 12,
      center: new google.maps.LatLng(-29.6699343, -50.7402065),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
    mapOptions);
    var endereco = 'Rua Pedro Alfredo Breyer, Taquara - RS';
    var latlng = new google.maps.LatLng(-29.6699343, -50.7402065);
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

  <div class="col-md-6" style="padding-right: 20px;">
    <?php echo $this->Form->create('Email', array('class' => 'form-horizontal')); ?>
    <h3>Contato</h3>
    <div class="col-md-6">
      <?php
        echo $this->Form->input('nome', 
                            array('div' => 'form-group', 
                                  'class' => 'form-control', 
                                  'placeholder' => 'Nome',
                                  'label' => array('text' => 'Nome: ')
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

    <div class="col-md-6" style="padding-left: 25px;">
      <?php
      echo $this->Form->input('telefone', 
                            array('div' => 'form-group',
                                  'class' => 'form-control', 
                                  'placeholder' => 'Telefone',
                                  'label' => array('text' => 'Telefone: ')
                                  )
                              );
      echo $this->Form->input('endereco', 
                            array('div' => 'form-group',
                                  'class' => 'form-control',
                                  'placeholder' => 'Endereço',
                                  'label' => array('text' => 'Endereço: ')
                                  )
                              );
      ?>
    </div>
    <div class="col-md-12">
      <?php
      $events = array(
                          'duvida' => 'Dúvida',
                          'sugestao' => 'Sugestão',
                          'reclamacao' => 'Reclamação',
                          );
      echo $this->Form->input('evento', 
                              array('div' => 'form-group',
                                    'class' => 'form-control',
                                    'options' => $events,
                                    'default' => '0',
                                    'label' => array('text' => 'Assunto: ')
                                    )
                                );
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
    <div class="row" style="padding-left: 10px;">
      <div class="col-md-6" style="padding-top: 20px;">
        <h3>Endereço</h3>
        <p><span style="font-size: 14px"> Rua Pedro Alfredo Breyer <br>
          Bairro Padre Tome <br>
          Taquara - RS <br>
          95600-000 <br></span></p>
      </div>

      <div class="col-md-6"  style="padding-top: 20px;">
        <h3>Telefones</h3>
        <p><span style="font-size: 14px">Geraldo (51)9981-7601 <br>
          Leonardo (51)9777-9658 <br>
          Eduardo (51)9796-9721 <br>
        </span></p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <center><div id="map-canvas"></div></center>
      </div>
    </div>

  </div>

</div>
