<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url() ?>aset/gan/images/favicon.ico" type="image/ico" />

    <title>SIDAK</title>

    <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>aset/lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>aset/lte/dist/css/adminlte.min.css">
    <link href="<?php echo base_url() ?>aset/gan/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>aset/gan/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url() ?>aset/gan/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url() ?>aset/gan/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url() ?>aset/gan/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url() ?>aset/gan/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url() ?>aset/gan/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>aset/gan/build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>aset/leaflet/leaflet.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>aset/leaflet/label/leaflet.label.css">
    <script  src="<?php echo base_url() ?>aset/leaflet/label/leaflet.label.js"></script>
        <script  src="<?php echo base_url() ?>aset/leaflet/label/leaflet.label-src.js"></script>

<script src="<?php echo base_url() ?>aset/leaflet/leaflet.js"></script>
<script src="<?php echo base_url() ?>aset/leaflet/leaflet-src.js"></script>
<script src="<?php echo base_url() ?>aset/map/sulselbps.geojson"></script>

<style type="text/css">
  .info{
    padding: 6px, 8px;
    font: Arial;
  }
</style>
  </head>

  <body class="nav-md layout-top-nav">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-bar-chart-o"></i> <span>Badan Pusat Statistik</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url() ?>aset/gan/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                      <li><a href="form_advanced.html">Advanced Components</a></li>
                      <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">General Elements</a></li>
                      <li><a href="media_gallery.html">Media Gallery</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="icons.html">Icons</a></li>
                      <li><a href="glyphicons.html">Glyphicons</a></li>
                      <li><a href="widgets.html">Widgets</a></li>
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Tables</a></li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
          

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url() ?>aset/gan/images/img.jpg" alt="">John Doe
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="<?php echo base_url() ?>aset/gan/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="<?php echo base_url() ?>aset/gan/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="<?php echo base_url() ?>aset/gan/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="<?php echo base_url() ?>aset/gan/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          
          <div class="row" style="display: inline-block;" >
          <div class="">
            <div class="col-md-6 col-sm-4 ">
              <li class="nav-item dropdown btn btn-xs btn-primary">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" style="color: white">Indikator</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
          
              <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                  </li>

                  <!-- Level three dropdown-->
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>

                  </li>
                  <!-- End Level three -->

                  <li><a href="#" class="dropdown-item">level 2</a></li>
                  <li><a href="#" class="dropdown-item">level 2</a></li>
                </ul>
              </li>
              <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li>
                    <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                  </li>

                  <!-- Level three dropdown-->
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                      <li><a href="#" class="dropdown-item">3rd level</a></li>
                    </ul>

                  </li>
                  <!-- End Level three -->

                  <li><a href="#" class="dropdown-item">level 2</a></li>
                  <li><a href="#" class="dropdown-item">level 2</a></li>
                </ul>
              </li>
              <!-- End Level two -->
            </ul>
          </li>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">

            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">

            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">

            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              
            </div>
          </div>
        </div>
          <!-- /top tiles -->

          

        

  



              <div class="row">

                <div class="col-md-12 col-sm-12 ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Visitors location <small>geo-presentation</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Settings 1</a>
                              <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="dashboard-widget-content">
                        <div class="col-md-5 ">
                          <h2 class="line_30">125.7k Views from 60 countries</h2>

                          <table class="countries_list">
                            <tbody>
                              <tr>
                                <td>Bulukumba</td>
                                <td class="fs15 fw700 text-right">33%</td>
                              </tr>
                              <tr>
                                <td>France</td>
                                <td class="fs15 fw700 text-right">27%</td>
                              </tr>
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
                          </table>
                        </div>
                        
                            <div id="map" class="col-md-7 col-sm-20 " style="height:550px;" ></div>
						    <script type="text/javascript">
						    	var countriesLayer ;
						    	function highlightFeature(e) {
						    		var layer = e.target;
						    		layer.setStyle(
						    			{weight : 1,
						    			color :'black',
						    			fillColor :'white',
						    			fillOpacity: 0.2
						    			});
						    		if (!L.Browser.ie && !L.Browser.opera) {
						    			layer.bringToFront();
						    		}
                    info.update(layer.feature.properties);
						    	}
						    	function getkabkot(kabkot) {
						    		if ( kabkot == 'TORAJA UTARA' ) {
						    			return 'blue';
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
						    		return {
						    			fillColor:getkabkot(feature.properties.KABKOT),
                      fillColor: 'green',
                      weight: 0.3,
                      opacity: 10,
                      color: 'green',
                      dashArray: 3
						    		}
						    	}

						    	function countriesOnEachFeature(feature, layer) {
                    <?php foreach ($data as $k): ?> 
                   
                    $po = '<?php echo $k['populasi'] ?>';
                    $d = feature.properties.KABKOT;
                    var x = layer.bindTooltip($d.toString(),{hide : true});
                    if ($d == 'LUWU TIMUR') {
                      layer.bindTooltip(feature.properties.KABKOTNO.toString(),{hide : true});
                    }
                    if ($d == 'LUWU UTARA') {
                      layer.bindTooltip('<?php echo $k['kabkot'] ?>'.toString(),{hide : true});
                    }
                  <?php endforeach; ?>
						    		layer.on(
						    				{	
						    					mouseover: highlightFeature, 
						    					mouseout: resetHighlight,
						    					click : zoomToFeature
						    				}
						    			);
						    		// body...
						    	}
						        var map = L.map('map').setView([-4.2,120 ], 6.5);
						        countriesLayer = L.geoJson(countries,{
                      style: countriesStyle,
						        	onEachFeature: countriesOnEachFeature}).addTo(map);
						        //map.fitBounds(countriesLayer.getBounds());
						   
						       

						        	// body...
                      var info = L.control({position: 'topright'});
                      info.onAdd = function(map) {

                        this._div = L.DomUtil.create('div','info');
                        this.update();
                        return this._div;
                      }
                      info.update = function(props) {
                        this._div.innerHTML = '<h2>PROVINSI SULAWESI SELATAN</h2><h3>Kabupaten</h3>' + (props? '<b>' + props.KABKOT + '</b>':' '); 
                      }
                      info.addTo(map);
						        
						       
						    </script>
                      </div>
                    </div>
                  </div>
         

              
              <div class="row">
          


                <!-- Start to do list -->
             
                <!-- End to do list -->
                
                <!-- start of weather widget -->
             
                <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>aset/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>aset/lte/dist/js/adminlte.min.js"></script>
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>aset/gan/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>aset/gan/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>aset/gan/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url() ?>aset/gan/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url() ?>aset/gan/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url() ?>aset/gan/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url() ?>aset/gan/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url() ?>aset/gan/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url() ?>aset/gan/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url() ?>aset/gan/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>aset/gan/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url() ?>aset/gan/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url() ?>aset/gan/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url() ?>aset/gan/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url() ?>aset/gan/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url() ?>aset/gan/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url() ?>aset/gan/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url() ?>aset/gan/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url() ?>aset/gan/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url() ?>aset/gan/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url() ?>aset/gan/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url() ?>aset/gan/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url() ?>aset/gan/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url() ?>aset/gan/build/js/custom.min.js"></script>
    <script src="<?php echo base_url() ?>aset/lte/plugins/jquery/jquery.min.js"></script>

	
  </body>
</html>
