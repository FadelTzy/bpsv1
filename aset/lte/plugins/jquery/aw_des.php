<div class="row" id="desa">
          <div class="col-md-12">
            <div class="card" style="" >
              

              <!--card-header -->
                    <div class="card-header">
                      <h5 class="card-title">Wilayah Administrasi per Desa/Kelurahan</h5>

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

              <!-- card-body -->
              <div class="card-body">
                <div class="row">

                  <div class="col-md-4">
                    <p class="text-center">
                      <strong>Kabupaten/Kota Sul-Sel</strong>

                    </p>
                    <tbody>
                      <tr>
                        <span>Bulukumba</span>
                        <span class="text-right" style="float: right;">33%</span>
                      </tr>
                                    <li class="dropdown-divider"></li>

                      <tr>
                        <td>France</td>
                        <td class="fs15 fw700 text-right">27%</td>
                      </tr>
                                    <li class="dropdown-divider"></li>

                      <tr>
                        <td>Germany</td>
                        <td class="fs15 fw700 text-right">16%</td>
                      </tr>
                      <tr>
                        <td>Spain</td>
                        <td class="fs15 fw700 text-right">11%</td>
                      </tr>
                      <tr>
                        <td>Britain</td>
                        <td class="fs15 fw700 text-right">10%</td>
                      </tr>
                    </tbody>
                    <!-- /.chart-responsive -->
                  </div>

                  <!-- /.col -->
                  <div class="col-md-8">
                    <!-- /.progress-group -->
    <?php $wilads = array();
    foreach ($wilad as $key ) {
       $wilads[] = $key['wilad'];
       $kabkots[] = $key['kabkot'];
     }     
    ?>
                <div id="map" style="height:550px;" ></div>
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
                          w >= '<?php echo "$data3" ?>' && w <= '<?php echo "$data4" ?>' ? '#BD0026':
                          w >= '<?php echo "$data2" ?>' && w < '<?php echo "$data3" ?>' ? '#FC4E2A':
                          w >= '<?php echo "$data1" ?>' && w < '<?php echo "$data2" ?>' ? '#FED976':
                                                            '#FEB24C';
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
                            grades = ['<?php echo $data1 ?>' , '<?php echo $data2-1 ?>' , '<?php echo $data2 ?>' , '<?php echo $data3-1 ?>' , '<?php echo $data3 ?>' , '<?php echo $data4-1 ?>' ],
                            labels = ['<strong> -Kategori- </strong> <br><br>'];
                            for (var i = 0; i < ( grades.length)/2; i++) {
                              var x = i + '<?php echo $k ?>' ;
                             
                              div.innerHTML += labels.push( '<i class="pewarnaan" style="background :' +  warnawilad(x) +'" > </i>' + grades[(i * 1) + i] +' &ndash; ' + grades[i + i + 1] + '<br>');
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
  var layerss = L.control.layers({'OSM':osm, 'Hydda':hydda},{'Pressure':pressure});
  map.addLayer(osm);
  map.addControl(layerss);
  map.addControl(new L.Control.Permalink({text: 'Permalink', layers: layerss}));
                    countriesLayer = L.geoJson(countries,{
                      style: countriesStyle, 
                      onEachFeature: countriesOnEachFeature}).addTo(map);
                    L.control.zoom({position: 'bottomleft'}).addTo(map);
                    //map.fitBounds(countriesLayer.getBounds());
               
                   

                      // body...
                      var info = L.control({position: 'topleft'});
                      info.onAdd = function(map) {

                        this._div = L.DomUtil.create('div','info');

                        this.update();
                        return this._div;
                      }
                      info.update = function(props) {
                        this._div.innerHTML = '<h2 class="prov" >PROVINSI SULAWESI SELATAN</h2> <br>';
                        //this._diiv.innerHTML = ' <h3 class="kab">Kabupaten</h3>' + (props? '<b>' + props.KABKOT + '</b>':' ');  
                      }
                      info.addTo(map);
                </script>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->



              <!-- card-footer -->
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                      <h5 class="description-header">$35,210.43</h5>
                      <span class="description-text">TOTAL REVENUE </span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                      <h5 class="description-header">$10,390.90</h5>
                      <span class="description-text">TOTAL COST</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                      <h5 class="description-header">$24,813.53</h5>
                      <span class="description-text">TOTAL PROFIT</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block">
                      <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                      <h5 class="description-header">1200</h5>
                      <span class="description-text">GOAL COMPLETIONS</span>
                    </div>
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
        </div>