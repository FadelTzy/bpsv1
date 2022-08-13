<!DOCTYPE html>
<html><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Potensi Desa</title>
  <script src="<?php echo base_url() ?>aset/jquery/jquery-3.4.1.min.js" ></script>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">

  .legend{
    color: #555;
        z-index: 3;
        padding-right: 60px;
  }
  .prov {
    z-index: 2;
    display: inline-block;
  }
  .kab {
    display: inline-block;
  }
  .legend .pewarnaan{
    width: 18px;
    height: 18px;
    float: left;
    margin-right: 8px;
    opacity: 0.7;
    z-index: 3;
    background-color: blue;
  }

  </style>
  <!-- Ionicons -->

  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url()?>aset/lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>aset/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url()?>aset/lte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url()?>aset/lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>aset/lte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url()?>aset/lte/plugins/summernote/summernote-bs4.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>aset/lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>aset/lte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>aset/leaflet/leaflet.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>aset/leaflet/label/leaflet.label.css">
    <script  src="<?php echo base_url() ?>aset/leaflet/label/leaflet.label.js"></script>
        <script  src="<?php echo base_url() ?>aset/leaflet/label/leaflet.label-src.js"></script>

<script src="<?php echo base_url() ?>aset/leaflet/leaflet.js"></script>
<script src="<?php echo base_url() ?>aset/leaflet/leaflet-src.js"></script>
<script src="<?php echo base_url() ?>aset/map/sulselbps.geojson"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
  <script src="<?php echo base_url()?>aset/leaflet/plug/control/Permalink.js"></script>
  <script src="<?php echo base_url()?>aset/leaflet/plug/control/Permalink.Marker.js"></script>
  <script src="<?php echo base_url()?>aset/leaflet/plug/control/Permalink.Layer.js"></script>
  <script src="<?php echo base_url()?>aset/leaflet/plug/control/Permalink.Overlay.js"></script>

</head>
<body class="hold-transition sidebar-mini ">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
     
        <li class="nav-item dropdown btn-sm btn-primary ">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" style="color: white;">INDIKATOR</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="">
              <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Wilayah Administrasi</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li class="dropdown-submenu" >
                    <a id="dropdownSubMenu3" href="<?php echo base_url() ?>index.php/welcome/indes" role="button"   class="dropdown-item">Jumlah Kecamatan</a>

                  </li>
                  <li class="dropdown-submenu" >

                    <a id="dropdownSubMenu3" href="<?php echo base_url() ?>index.php/welcome/desa" role="button"  aria-expanded="false" class="dropdown-item desa_k">Jumlah Desa/Kelurahan</a>
                  </li>
                  <li class="dropdown-submenu" style="width: 280px;">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Jumlah Desa Menurut Topograpi</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">Lereng/Puncak</a></li>
                      <li><a href="#" class="dropdown-item">Lembah</a></li>
                      <li><a href="#" class="dropdown-item">Dataran</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
                            <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Kependudukan dan Ketenagakerjaan</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
                            <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Perumahan dan Lingkungan Hidup</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
                            <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Antisipasi dan Kejadian Bencana Alam                                  </a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
                            <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Pendidikan dan Kesehatan</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- End Level two -->
                            <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Sosial dan Budiya</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- End Level two -->
                            <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hiburan dan Olahraga</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- End Level two --> 
                            <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Angkutan, Informasi dan Komunikasi</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- End Level two -->
                                          <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Ekonomi</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- End Level two -->                             
                                      <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Keamanan</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- End Level two --> 
                                      <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover" style="width: 440px;">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Otonomi Desa dan Program Pemberdayaan Masyarakat </a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- End Level two --> 
                                      <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Keterangan Pemerintahan Desa</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- End Level two -->               
            </ul>
          </li>
    </ul>

    <!-- SEARCH FORM -->
  

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
     
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   
    <a href="../../index3.html" class="brand-link elevation-4 " style="">
           <img src="<?php echo base_url()?>aset/bps.png"
           alt="bps"
           class="brand-image img-circle elevation-5"
           style="opacity: .9;">
            <div class="brand-text font-weight-light" style="font: italic; margin-top: -14px;"><i style="font-size: 15px; padding-top: -100px; letter-spacing: 1px;"> Badan Pusat Statistik <div style="padding-left: 65px; letter-spacing: 0px; margin-top: -5px;">Provinsi Sulawesi Selatan</div></i> </div>

       

    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><strong> <i> Welcome </i> </strong></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
    <section class="content">
      <div class="container-fluid">
        <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h1 class="card-title" align="text-center" style="font-size: 50px">Sistem Informasi Geografis</h1><br><br>
                <h3 class="card-title" align="text-center" style="font-size: 35px">Potensi Desa Sulawesi Selatan</h3>
              </div>
          
              <!-- /.card-body -->

              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </div>
      </div>
    </section>
        <div class="row mb-2">
          <div class="col-sm-6">

          </div>

        </div>

          <!-- row kecamatan -->
        <div class="row" id="kecamatan">
          <div class="col-md-12">
            <div class="card" style="" >
              <div class="card-header">
                <h5 class="card-title">Wilayah Administrasi per Desa</h5>

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
      <!-- /.row kecamatan-->
  



      </div><!-- /.container-fluid -->
    </section>

   <div class="badan"></div> 

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-rc.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">f@del_af-AdminLTE.io</a>.</strong> All rights
    reserved.
    <button>Remove Ki</button>
  </footer>
  <script type="text/javascript"> 
  $(document).ready(function () {
    $("button").click(function () {
      $("div").remove("#kecamatan");
      $(".badan").load("<?php echo base_url() ?>index.php/welcome/desa");

    
  });
  });
  </script>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>aset/lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>aset/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>aset/lte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>aset/lte/dist/js/demo.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>aset/lte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<!-- ChartJS -->
<script src="<?php echo base_url() ?>aset/lte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<!-- JQVMap -->
<script src="<?php echo base_url() ?>aset/lte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url() ?>aset/lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>aset/lte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>aset/lte/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>aset/lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?>aset/lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url() ?>aset/lte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() ?>aset/lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>aset/lte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
</body>
</html>
