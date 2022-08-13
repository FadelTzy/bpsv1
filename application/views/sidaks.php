          <div class="col-md-12">
            <div class="card" style="" >
              <div class="card-header">
                <h5 class="card-title">BANYAK WILAYAH ADMINISTRASI DI KECAMATAN</h5>

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
                              <?php foreach ($wilad as $des ):  
                                    
                                $wilads[] = $des['wilad'];
                                $kabkots[] = $des['kabkot']; 
                                $ndata[] = number_format(($des['wilad']/$total)*100,2);?>
                            
                              <tr>

                                <span><?php echo $des['kabkot']; ?></span>
                                <span class="text-right" style="float: right;"><?php echo number_format(($des['wilad']/$total)*100,2)."%"; ?>&nbsp;  </span>
                               <span class="text-right" style="float: right;"><?php echo $des['wilad']; ?> &nbsp;&nbsp;&nbsp; </span>
                              </tr>
                                <li class="dropdown-divider"></li>
                              <?php endforeach; ?>
                            </tbody>

                          </div>

                                                      <tfoot>
                              <span><b>Sulawesi Selatan</b></span>
                             <span class="text-right" style="float: right;"><?php echo ceil(array_sum($ndata))."%" ; ?>&nbsp;&nbsp;&nbsp; &nbsp; </span>
                             <span class="text-right" style="float: right;"><?php echo $total ?>&nbsp;&nbsp;&nbsp; &nbsp; </span>

  
                            </tfoot>

                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-8">
                 

                   
                    <!-- /.progress-group -->



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

                   return w == 0 ? 'blue' :
                          w >= '<?php echo $data3+1 ?>' && w <= '<?php echo "$data4" ?>' ? '#BD0026':
                          w >= '<?php echo $data2+1 ?>' && w <= '<?php echo "$data3" ?>' ? '#FC4E2A':
                          w >= '<?php echo "$data1" ?>' && w <= '<?php echo "$data2" ?>' ? '#FED976':
                                                            '#FED976';
                  }

                  function getinfo(kabkot , feature) {
                      var kabs = [<?php echo '"'.implode('","', $kabkots).'"'?>];
                      var wilds = [<?php echo '"'.implode('","', $wilads).'"'?>];


                      for (var i = 0; i < kabs.length; i++) {
                    if (kabkot == kabs[i] ) {
                       return warnawilad(wilds[i]);
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
                  function warnapeta(argument) {
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
                    var wilds = [<?php echo '"'.implode('","', $wilads).'"'?>];
      
              for (var i = 0; i < kabs.length; i++) {
                    if ($d == kabs[i]) {
                      layer.bindTooltip( '<b>' + kabs[i]+'</b>' + " : " + wilds[i] .toString(),   {hide : true});

                    }
                  }
                 


                                         // layer.bindTooltip(feature.properties.KABKOTNO.toString(),{hide : true});

                    layer.on(
                        { 
                          mouseover: highlightFeature, 
                          mouseout: resetHighlight,
                          click : zoomToFeature
                        }
                      );
                    // body... 
                  }
                  function fadel(kota) {
                     
                    return kota;
                  }
                    var map = L.map('map',{ zoomControl: false}).setView([-4.2,120 ], 6.5);
                     //legend
                      var legend = L.control({position: 'bottomright'});
                      legend.onAdd = function (map) {
                        var div = L.DomUtil.create('div','info legend'),
                            grades = ['<?php echo $data1 ?>' , '<?php echo $data2 ?>' , '<?php echo $data2+1 ?>' , '<?php echo $data3 ?>' , '<?php echo $data3+1 ?>' , '<?php echo $data4 ?>' ],
                            labels = ['<strong> -Kategori- </strong> <br><br>'];
                            for (var i = 0; i < ( grades.length)/2; i++) {
                              var x = (i*<?php echo floor($k); ?>+<?php echo $data1 ?>)+<?php echo floor($k); ?> ;
               
                             
                              div.innerHTML += labels.push( '<i class="pewarnaan" style="background :' +  warnawilad(x) +'" > </i>' + grades[(i * 1) + i] +' &ndash; ' + grades[i + i + 1] +'<br>'  );
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
    opacity: 0.5
  });
  var hydda = L.tileLayer('https://{s}.tile.openstreetmap.se/hydda/full/{z}/{x}/{y}.png', {
    attribution: 'Tiles courtesy of <a href="https://openstreetmap.se/" target="_blank">OpenStreetMap Sweden</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  });
  var layerss = L.control.layers({'OSM':osm, 'Hydda':hydda},{'Pressure':pressure},{position:'bottomright'});
  map.addLayer(osm);
  map.addControl(layerss);
  map.addControl(new L.Control.Permalink({text: 'Permalink', layers: layerss}));
                    countriesLayer = L.geoJson(countries,{
                      style: countriesStyle, 
                      onEachFeature: countriesOnEachFeature}).addTo(map);
                    L.control.zoom({position: 'bottomleft'}).addTo(map);
                    //map.fitBounds(countriesLayer.getBounds());
               
                   /*
                  

                   */




                      // body...
                      var info = L.control({position: 'topleft'});
                      info.onAdd = function(map) {

                        this._div = L.DomUtil.create('div','infos');

                        this.update();
                        return this._div;
                      }
                      info.update = function(props) {
                        this._div.innerHTML = '<h2>SULAWESI SELATAN</h2> <br>';
                        //this._diiv.innerHTML = ' <h3 class="kab">Kabupaten</h3>' + (props? '<b>' + props.KABKOT + '</b>':' ');  
                      }
                      info.addTo(map);
                      var imgarah = '<?php echo base_url() ?>aset/leaflet/fot/arahangin.png', imgbounds = [[-2.2,118.5],[-3.2,117.5]];
                     L.imageOverlay(imgarah , imgbounds).addTo(map);
                     
              
                    $(document).ready(function () {
                      $(".infos").fadeIn(3000);
                    })
                  var button = new L.Control.Button('<div class="fa fa-globe" ></div>',{position: 'bottomleft'});
                   button.addTo(map);
                   button.on('click', function () {
                     map.setView([-4.2,120 ], 6.5);
                   });

                   
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