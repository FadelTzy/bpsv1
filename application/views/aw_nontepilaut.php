      <!-- row kecamatan -->
          <div class="col-md-12">
            <div class="card" style="" >
              <div class="card-header">
                <h5 class="card-title" style="align-content: center;">BANYAK DESA/KELURAHAN DI WILAYAH NON TEPI LAUT</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <p class="text-center">
                      <strong>Kabupaten/Kota Sul-Sel</strong>

                    </p>
                          <div style="overflow-y: scroll; height: 490px;">
                            <tbody >
                              <?php foreach ($nontepilaut as $des ): ?>
                            
                              <tr>
                                <span><?php echo $des['kabkot']; ?></span>
                                <span class="text-right" style="float: right;"><?php echo $des['AW_nontepilaut']; ?> &nbsp; </span>
                              </tr>
                                <li class="dropdown-divider"></li>
                              <?php endforeach; ?>
                            </tbody>

                          </div>
                                                      <tfoot>
                              <span><b>Sulawesi Selatan</b></span>
                             <span class="text-right" style="float: right;"><?php echo $total ?>&nbsp;&nbsp;&nbsp; &nbsp; </span>

                            </tfoot>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-8">
                 

                   
                    <!-- /.progress-group -->
    <?php 
    foreach ($nontepilaut as $key ) {
       $aw_nontepilaut[] = $key['AW_nontepilaut'];
       $kabkots[] = $key['kabkot'];

     }     
?>


                      <div id="map" style="height:570px;" ></div>


                <script type="text/javascript">



                  var countriesLayer ;
                  function highlightFeature(e) {
                    var layer = e.target;
                    layer.setStyle(
                      {weight : 5,
                      color :'pink',
                      dashArray:'',
                      fillOpacity: 1
                      });
                    if (!L.Browser.ie && !L.Browser.opera) {
                      layer.bringToFront();
                    }
                    info.update(layer.feature.properties);
                  }
                  function warnawilad(w) {

              
                      


                return w >= <?php echo $data3+1 ?> && w <= <?php echo "$data4" ?> ? '#800026':
                          w >= <?php echo $data2+1 ?> && w <= <?php echo "$data3" ?> ? '#BD0026':
                          w >= <?php echo $data1 ?> && w <= <?php echo $data2 ?> ? '#E31A1C':
                          w == 0 ? '#FED976' :
                                                            '#FED976';
                  }

                  function getinfo(kabkot , feature) {
                      var kabs = [<?php echo '"'.implode('","', $kabkots).'"'?>];
                      var awil_nontepilaut = [<?php echo '"'.implode('","', $aw_nontepilaut).'"'?>];


                      for (var i = 0; i < kabs.length; i++) {
                    if (kabkot == kabs[i] ) {
                       return warnawilad(awil_nontepilaut[i]);
                    }
                    
                      }
                  }
                  function resetHighlight(e) {
                    countriesLayer.resetStyle(e.target);
                    info.update();
                  }

                  function zoomToFeature(e) {

                    map.fitBounds(e.target.getBounds());
                    // body...
                  }

                  function countriesStyle(feature) {
                    var lay= feature.target;


                    
                    var obj = { 
                      fillColor:getinfo(feature.properties.KABKOT),
                      fillOpacity :1,
                      weight: 1,
                      color: 'white',
                      dashArray: 1,
                    }; 


                 return obj;

                  }

                  function countriesOnEachFeature(feature, layer) {
                   
                    $d = feature.properties.KABKOT;
                     var kabs = [<?php echo '"'.implode('","', $kabkots).'"'?>];
                    var awil_nontepilaut = [<?php echo '"'.implode('","', $aw_nontepilaut).'"'?>];
      
              for (var i = 0; i < kabs.length; i++) {
                    if ($d == kabs[i]) {
                      layer.bindTooltip( '<b>' + kabs[i]+'</b>' + " : " + awil_nontepilaut[i] .toString(),   {hide : true});

                    }
                  }
                    layer.on(
                        { 
                          mouseover: highlightFeature, 
                          mouseout: resetHighlight,
                          click : zoomToFeature
                        }
                      );
                    // body... 
                  }

                    var map = L.map('map',{ zoomControl: false}).setView([-4.3,120 ], 6.5);
                     //legend
                      var legend = L.control({position: 'bottomright'});
                      legend.onAdd = function (map) {
                        var div = L.DomUtil.create('div','info legend'),
                            grades = ['<?php echo $data1 ?>' , '<?php echo $data2 ?>' , '<?php echo $data2+1 ?>' , '<?php echo $data3 ?>' , '<?php echo $data3+1 ?>' , '<?php echo $data4 ?>' ],
                            labels = ['<strong>       -Kategori- </strong> <br><br>'];
                               div.innerHTML += labels.push( '<i class="pewarnaan" style="background :' +  warnawilad(0) +'" > </i>' + '&nbsp;' + '0' + '<br>');
                            for (var i = 0; i < ( grades.length)/2; i++) {
                              
                              var x = (i*<?php echo floor($k); ?>+<?php echo $data1 ?>)+<?php echo floor($k); ?> ;
                             
                              div.innerHTML += labels.push('<i class="pewarnaan" style="background :' +  warnawilad(x) +'" > </i>' + '&nbsp;' + grades[(i * 1) + i] +' &ndash; ' + grades[i + i + 1] + '<br>');
                            }

                                                        div.innerHTML = labels.join();
                            return div;

                      };
                      legend.addTo(map);
  var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
  var appid = '9de243494c0b295cca9337e1e96b00e2'; // demo id
  var pressure = L.tileLayer('https://{s}.tile.openweathermap.org/map/pressure_cntr/{z}/{x}/{y}.png?appid='+appid, {
    maxZoom: 19,
    attribution: 'Map data &copy; <a href="https://openweathermap.org">OpenWeatherMap</a>',
    opacity: 1,
  });

  var hydda = L.tileLayer('https://{s}.tile.openstreetmap.se/hydda/full/{z}/{x}/{y}.png');
  var layerss = L.control.layers({'OSM':osm, 'Hydda':hydda },{'Pressure':pressure});
  map.addLayer(osm);
  map.addControl(layerss);
  map.addControl(new L.Control.Permalink({text: 'Permalink', layers: layerss}));
                

                    countriesLayer = L.geoJson(countries,{
                      style: countriesStyle, 
                      onEachFeature: countriesOnEachFeature}).addTo(map);
                    L.control.zoom({position: 'bottomleft'}).addTo(map);
                    //map.fitBounds(countriesLayer.getBounds());
               
                   

                      // body...
                      var info = L.control();
                      info.onAdd = function(map) {

                        this._div = L.DomUtil.create('div','infos');

                        this.update();
                        return this._div;
                      }
                      info.update = function(props) {
                        this._div.innerHTML = '<h2>PROVINSI SULAWESI SELATAN</h2> <br>';
                        //this._diiv.innerHTML = ' <h3 class="kab">Kabupaten</h3>' + (props? '<b>' + props.KABKOT + '</b>':' ');  
                      }
                      info.addTo(map);
                     var imgarah = '<?php echo base_url() ?>aset/leaflet/fot/arahangin.png', imgbounds = [[-2.2,118.5],[-3.2,117.5]];
                     L.imageOverlay(imgarah , imgbounds).addTo(map);
              

                    $(document).ready(function () {
                      $(".infos").fadeIn(3000);
                    })
                   
                </script>

                    <!-- /.progress-group -->
                    
                    <!-- /.progress-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 col-6">

                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">

                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">

                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">

                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
      <!-- /.row kecamatan-->