
<script type="text/javascript" src="<?php echo base_url()?>aset/print/printThis-master/printThis.js"></script>

          <div class="col-md-12">
            <div class="card" style="" >
              <div class="card-header">
                <h5 class="card-title" class="tempatjudulgaes"> <?php echo $judulnya; ?> </h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>

                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5">
                    <div class="card-body table-responsive p-0 tabelko" id="example222" style="height: 570px; ">
                      <table id="example22" class="table table-head-fixed table-hover">
                        <thead>
                          <tr>
                            <th class="no-sort normal" style="min-width: 80px;">Kabupaten/Kota</th>
                            <th>Jumlah</th>
<?php if ($check == "persen") { ?>   <th>(%)</th> <?php } ?>
                            <th style="width: 1px;"><span style="display: none;">no</span></th>
                          </tr>
                        </thead>
                        <tbody class="norms">
                          <?php foreach ($wilad as $des ):  
                                    
                                $wilads[] = $des[$indikatornya];
                                $kabkots[] = $des['kabkot']; 
                                if ($total != 0) {  $ndata[] = number_format(($des[$indikatornya]/$totals)*100,2);  
                                }else{
                                  $ndata[] = 0;
                                }
                                  

                                ?>
                          <tr>
                            <td><?php echo $des['kabkot']; ?></td>
                            <td><?php echo $des[$indikatornya]; ?></td>
<?php if ($check == "persen") { ?><td><?php if ($total != 0) {echo number_format(($des[$indikatornya]/$totals)*100,2)."%"; }?></td> <?php } ?>
                            <td ><span style="display: none;"><?php echo $des['no']?></span> </td>

                          </tr>
                        <?php endforeach; ?>
                        </tbody>
                       <tfoot>
                        <tr>
                          <th>Sulawesi Selatan</th>
                          <th><?php if ($ts == null) { echo $total; }else{ echo $ts; }  ?></th>
            <?php if ($check == "persen") { ?> <th><?php echo round(array_sum($ndata))."%" ; ?></th> <?php } ?>
                          <th><span style="display: none"></span></th>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    <div></div>
                    
                  </div>
                  <!-- /.col -->
                  <div id="petap" class="col-md-7">
                 


                <div id="map" style="height:570px;" ></div>

                <script type="text/javascript">
                  var warna1 = '#6D5800';
                  var warna2 = '#A78700';
                  var warna3 = '#D2AA00';
                  var warna4 = '#ECBF00';
                  var warna5 = '#FFD522';
                  var warna6 = '#FEFFCB';
                  var kabspie = [<?php echo '"'.implode('","', $kabkots).'"'?>];
                  var wildspie = [<?php echo '"'.implode('","', $wilads).'"'?>];
                 var countriesLayer ;
                  function highlightFeature(e) {
                    var layer = e.target;
                    layer.setStyle(
                      {weight : 5,
                      color :'darkblue',
                      dashArray:'',
                      fillOpacity: 1
                      });
                    if (!L.Browser.ie && !L.Browser.opera) {
                      layer.bringToFront();
                    }
                    info.update(layer.feature.properties);
                  }
                  function warnawilad(w) {
                 

                          return w >= <?php echo $data5x ?> && w <= <?php echo $data6 ?> ? warna1:
                          w >= <?php echo $data4x ?> && w <= <?php echo $data5 ?> ? warna2:
                          w >= <?php echo $data3x ?> && w <= <?php echo $data4 ?> ? warna3:
                          w >= <?php echo $data2x ?> && w <= <?php echo $data3 ?> ? warna4:
                          w >= <?php echo $data1 ?> && w <= <?php echo $data2 ?> ? warna5:
                          w == 0 ? warna6 :
                                                            warna6; 
                    
          
                  }
                 function peringkat(w) {
                 

                          return w >= <?php echo $data5x ?> && w <= <?php echo $data6 ?> ? "5":
                          w >= <?php echo $data4x ?> && w <= <?php echo $data5 ?> ? "4":
                          w >= <?php echo $data3x ?> && w <= <?php echo $data4 ?> ? "3":
                          w >= <?php echo $data2x ?> && w <= <?php echo $data3 ?> ? "2":
                          w >= <?php echo $data1 ?> && w <= <?php echo $data2 ?> ? "1":
                          w == 0 ? 6 :
                                                            6; 
                    
          
                  }
                  var apie = 0;
                  var bpie = 0;
                  var cpie = 0;
                  var dpie = 0;
                  var epie = 0;
                  var fpie = 0;
                  for (var i = 0; i < kabspie.length; i++) {
                      
                      var nilaipie = peringkat(wildspie[i]);
                      if (nilaipie == 1) {
                        apie = apie + 1;
                      }
                      if (nilaipie == 2) {
                        bpie = bpie + 1;
                      }
                      if (nilaipie == 3) {
                        cpie = cpie + 1;
                      }
                      if (nilaipie == 4) {
                        dpie = dpie + 1;
                      }
                      if (nilaipie == 5) {
                        epie = epie + 1;
                      }
                      if (nilaipie == 6) {
                        fpie = fpie + 1;
                      }

                    
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
                      color: 'blue',
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
                      layer.bindTooltip( '<b>' + kabs[i]+'</b>' + " : " + wilds[i] + " <br> ".toString(),   {hide : true});

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
                    var map = L.map('map',{ zoomControl: false}).setView([-4.2,120 ], 6.5);
                     //legend
                      var legend = L.control({position: 'bottomright'});
                      legend.onAdd = function (map) {
                        var div = L.DomUtil.create('div','info legend'),
                            grades = ['<?php echo $data1 ?>' , '<?php echo $data2 ?>' , '<?php echo $data2x ?>' , '<?php echo $data3 ?>' , '<?php echo $data3x ?>' , '<?php echo $data4; ?>' , '<?php echo $data4x?>' , '<?php echo $data5 ?>' , '<?php echo $data5x?>' , '<?php echo $data6 ?>' ],
                            labels = ['<strong>       -Kategori- </strong> <br><br>'];
                               div.innerHTML += labels.push( '<i class="pewarnaan" style="background :' +  warnawilad(0) +'" > </i>' + '&nbsp;' + '0' + '<br>');
                            for (var i = 0; i < ( grades.length)/2; i++) {
                              
                              var x = (i*<?php echo $k; ?>+<?php echo $data1; ?>)+<?php echo $k; ?> ;
                             
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

    opacity: 0.5
  });
  var hydda = L.tileLayer('https://{s}.tile.openstreetmap.se/hydda/full/{z}/{x}/{y}.png', {
    attribution: 'Tiles courtesy of <a href="https://openstreetmap.se/" target="_blank">OpenStreetMap Sweden</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  });
  var layerss = L.control.layers({'OSM':osm, 'Hydda':hydda},{'Pressure':pressure},{position:'bottomright'});
  map.addLayer(osm);
  map.addControl(layerss);
  map.addControl(new L.Control.Permalink({text: '', layers: layerss}));
                    countriesLayer = L.geoJson(countries,{
                      style: countriesStyle, 
                      onEachFeature: countriesOnEachFeature}).addTo(map);
                    L.control.zoom({position: 'bottomleft'}).addTo(map);
                    //map.fitBounds(countriesLayer.getBounds());
               
                   /*
                  

                   */
                      //chartcanvas
                      var cv = L.control({position: 'bottomleft'});
                      cv.onAdd = function(map) {

                        this._div = L.DomUtil.create('div','cvs');

                        this.update();
                        return this._div;
                      }
                      cv.update = function(props) {
                        this._div.innerHTML = '<div class="monospaces font-weight-bold" ><h6><small><b>Distribusi Kategori</b></small></h6></div>'+'<div class=""><canvas style="border: 0 white; background-color: rgba(255,255,255,0.5);border-radius: 5px;" id="donutChart" class=""  height="200vw" width="200vw"></canvas></div>';
                      }
                      cv.addTo(map);



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
                  var button = new L.Control.Button('<div class="fa fa-globe" ></div>',{position: 'topright'});
                   button.addTo(map);
                   button.on('click', function () {
                     map.setView([-4.2,120 ], 6.5);
                   });
                  var button2 = new L.Control.Button('<div class="fa fa-print" id="mapprint"></div>',{position: 'topright'});
                   button2.addTo(map);
                   
                </script>

                    <!-- /.progress-group -->
                    
                    <!-- /.progress-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
                <a id="printThis"  class="btn btn-default"><i class="fas fa-print"></i> Print</a>

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
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.4.0/dist/chartjs-plugin-datalabels.min.js"></script>
      <script src="<?php echo base_url()?>aset/lte/plugins/chart.js/Chart.min.js"></script>
      <script>
  $(function () {

    var donutChartCanvas = $('#donutChart').get(0).getContext('2d');
    var data = [{
       data: [apie,bpie,cpie,dpie,epie,fpie],
           
                backgroundColor : [ '#FFD522',  '#ECBF00', '#D2AA00','#A78700','#6D5800', '#FEFFCB'],
    }];
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }

    var donutChart = new Chart(donutChartCanvas, {
      type: 'pie',
      data: {datasets: data,
              labels: [
          '<?php echo $data1.' -- '.$data2 ?>', 
          '<?php echo $data2x.' -- '.$data3 ?>',
          '<?php echo $data3x.' -- '.$data4 ?>', 
          '<?php echo $data4x.' -- '.$data5 ?>', 
          '<?php echo $data5x.' -- '.$data6 ?>', 
          '0', 
   
      ],
            },
     
      options: {
        layout: {
          padding: {
            top: 5,
            right: 15,
            bottom: 5,
            left: 15,
          }
        },
        tooltips: {
          enabled: true,
        },
        plugins: {
          datalabels:{
            formatter: (value, ctx) => {
                
                  let sum = 0;
                  let dataArr = ctx.chart.data.datasets[0].data;
                  dataArr.map(data => {
                      sum += data;
                  });
                  let percentage = (value*100 / sum).toFixed(1)+"%";
                  return percentage;

              
                },
                color: '#000',
                anchor: 'end',
          },
        },

        maintainAspectRatio : false,
        aspectRatio: 1,
        responsive : true,
        legend:{
          display : false,
          position: 'left',
          labels:{
            fontColor: "white"
          }
        }
      }     
    })



  

  })
</script>
      <script type="text/javascript">

        $(document).ready(function () {
          $("#mapprint").click(function () {
                        var textjudul = '<?php echo $judulnya; ?>'; 

            $("#petap").printThis({
    debug: true,               // show the iframe for debugging
    importCSS: true,            // import parent page css
    importStyle: true,         // import style tags
    printContainer: true,       // print outer container/$.selector
    header: textjudul, 
    canvas: false, 
    pageTitle: "MapSIG_"+textjudul,  
            });
          });
          $("#printThis").click(function () {
            var textjudul = '<?php echo $judulnya; ?>'; 
            $("#example22").printThis({
              debug: false,               // show the iframe for debugging
    importCSS: true,            // import parent page css
    importStyle: true,         // import style tags
    printContainer: true,       // print outer container/$.selector
    header: textjudul, 
    pageTitle: "TabelSIG_"+textjudul,  
            });

          });

      $("html,body").animate({scrollTop: $("div.animatesampaisini").offset().top},2000);

            
        $('#example22').DataTable({

        "order" : [],
        columnDefs : [
        {"orderable" : false,
          "targets" : 0}

        ],
   
  

   
    });
                  



        });
      </script>