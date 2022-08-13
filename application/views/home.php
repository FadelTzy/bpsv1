<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Potensi Desa</title>
  <script src="<?php echo base_url() ?>aset/jquery/jquery-3.4.1.min.js" ></script>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>aset/css/cssmap.css">
  <style type="text/css">
  li.pointers{
    cursor: pointer;
  }
  .infos {
    padding: 6px 8px;
    font: 14px/16px Arial, Helvetica, sans-serif;
    background: white;
    background: rgba(255,255,255,0.8);
    box-shadow: 0 0 35px rgba(0,0,0,0.2);
    border-radius: 5px;
    height: 50px;
    display: none;
  }
  .infos h2{
    margin: 0 0 5px;
    color: #777;
  }
  .legend{
    background: rgba(255,255,255,0.8);
        border-radius: 15%;
        border: 2px solid grey;

        padding-bottom: 10px;
        width:  100px;
          text-align: center;
        padding-left: 5px;  
            box-shadow: 0 0 15px rgba(0,0,0,0.2);



  }
  div.centerprov {
  margin-right: 50px;

  }
  .kab {
    display: inline-block;
  }
  i.pewarnaan{
    width: 18px;
    height: 18px;
    float: left;
    opacity: 0.7;
    z-index: 3;


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
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>aset/lte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>aset/leaflet/leaflet.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>aset/leaflet/label/leaflet.label.css">
    <script  src="<?php echo base_url() ?>aset/leaflet/label/leaflet.label.js"></script>
        <script  src="<?php echo base_url() ?>aset/leaflet/label/leaflet.label-src.js"></script>

<script src="<?php echo base_url() ?>aset/leaflet/leaflet.js"></script>
<script src="<?php echo base_url() ?>aset/leaflet/leaflet-src.js"></script>
<script src="<?php echo base_url() ?>aset/map/sulselbps.geojson"></script>
  <script src="<?php echo base_url()?>aset/leaflet/plug/control/Permalink.js"></script>
  <script src="<?php echo base_url()?>aset/leaflet/plug/control/Permalink.Marker.js"></script>
  <script src="<?php echo base_url()?>aset/leaflet/plug/control/Permalink.Layer.js"></script>
  <script src="<?php echo base_url()?>aset/leaflet/plug/control/Permalink.Overlay.js"></script>
  <script src="<?php echo base_url()?>aset/leaflet/leaflet-button-master/L.Control.Button.js"></script>

</head>
     <nav class="kostum" style="position: absolute; top: 15px; right: -30px; z-index: 9999;background-color: rgba(255,255,255,0.8); box-shadow: 0 0 5px black">      
    <div class="nav-item " style="background-color: rgba(0,0,255,0.4);">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large" ></i>
        </a>
      </div>
    </nav>
<body class="hold-transition sidebar-mini ">

<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="position: absolute; background-color: rgba(255,255,255,0.5);">
    <!-- Left navbar links -->
    <ul style="" class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
        
        <li class="nav-item dropdown btn-sm btn-primary pointers indi" style="position: relative; top: 60px; left: 0px; background-color: rgba(0,204,255,0.4); ">
            <a id="dropdownSubMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" style="color: black;">INDIKATOR</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow" style="">

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Wilayah Administrasi</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li class="dropdown-submenu" >
                    <a id="dropdownSubMenu3" indikator="aw_kec" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-item pilih">Jumlah Kecamatan</a>

                  </li>
                  <li class="dropdown-submenu" >
                    <a id="dropdownSubMenu3"  role="button" indikator="aw_des" aria-haspopup="true"  aria-expanded="false" class="dropdown-item pilih">Jumlah Desa/Kelurahan</a>
                  </li>
                  <li class="dropdown-submenu" style="width: 285px;">
                    <a id="dropdownSubMenu3"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Jumlah Desa Menurut Topograpi</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a indikator="aw_lereng" class="dropdown-item pilih">Lereng/Puncak</a></li>
                      <li><a indikator="aw_lembah" class="dropdown-item pilih">Lembah</a></li>
                      <li><a indikator="aw_dataran" class="dropdown-item pilih">Dataran</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Jumlah Desa Menurut Lokasi Laut</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a indikator="aw_tepilaut" class="dropdown-item pilih">Tepi Laut</a></li>
                      <li><a indikator="aw_nontepilaut" class="dropdown-item pilih">Bukan Tepi Laut</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
                            <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Kependudukan dan Ketenagakerjaan</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a indikator="aw_penduduk" class="dropdown-item pilih">Kependudukan dan Ketenagakerjaan</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
                            <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Perumahan dan Lingkungan Hidup</a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a  class="dropdown-item">3rd level</a></li>
                      <li><a  class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
                            <li class="dropdown-divider"></li>

              <!-- Level two dropdown-->
              <li class="dropdown-submenu dropdown-hover">
                <a id="dropdownSubMenu2"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Antisipasi dan Kejadian Bencana Alam                                  </a>
                <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  <li class="dropdown-submenu">
                    <a id="dropdownSubMenu3"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                      <li><a  class="dropdown-item">3rd level</a></li>
                      <li><a  class="dropdown-item">3rd level</a></li>
                    </ul>
                  </li>
                </ul>
              </li>


              <!-- Level two dropdown-->
   
              <!-- End Level two -->               
            </ul>
          </li>
    </ul>

    <!-- SEARCH FORM -->
  

    <!-- Right navbar links -->
      <!-- Messages Dropdown Menu -->
     
      <!-- Notifications Dropdown Menu -->
      

 
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
            <a href="<?php echo base_url() ?>index.php/welcome/index" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Potensi Desa
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url() ?>index.php/Kemiskinan/index" class="nav-link">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                Kemiskinan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Kependudukan
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                Keterangan Harga
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
        <div class="col-15">
            <!-- Default box -->
            <div class="card">
              <div class="card-header" style="text-align: center;">
                <h1 class="" align="" style="font-size: 50px">Sistem Informasi Geografis<h3 style="font-size: 35px">Potensi Desa Sulawesi Selatan</h3></h1>
                
              </div>
              <!-- /.card-body -->
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </div>
      </div>
    </section>


          <!-- row kecamatan -->
        <div class="loader fa fa-clock fa-2x" style="display: none" ></div>  
        <div class="row" id="switch">
      
          <!-- /.col -->
        </div>
      <!-- /.row kecamatan-->
  



      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card podeshome">
              <div class="card-body" style="background-image: url(<?php echo base_url()?>aset/bc.png); text-align: center;">
              <h1 style="font-family: serif; color: #00004D" > STATISTIK POTENSI DESA </h1>
              <h1 style="font-family: serif; color: #00004D" > PROVINSI SULAWESI SELATAN </h1>
              <h4 style="font-family: serif; color: #00004D; line-height: 15px;" > 2018 </h4>
  
<hr>
  <br>
              <p style="font-family: serif; text-align: justify;" >Statistik Potensi Desa Indonesia 2018 merupakan seri publikasi BPS yang terbit tiga kali dalam sepuluh tahun yang menyajikan hasil Pendataan Potensi Desa (Podes) 2018. Bagi Provinsi Sulawesi Selatan, publikasi yang disusun adalah "Statistik Potensi Desa Provensi Sulawesi Selatan 2018". Publikasi ini memuat gambaran wilayah administrasi pemerintahan setingkat desa di seluruh indonesia menurut ketersediaan infrastruktur dan potensi yang dimiliki oleh setiap wilayah tersebut. </p>
              <br>
               <p style="font-family: serif; text-align: justify; width: 500px; display: inline-block;" >Statistik Potensi Desa Indonesia 2018 merupakan seri publikasi BPS yang terbit tiga kali dalam sepuluh tahun yang menyajikan hasil Pendataan Potensi Desa (Podes) 2018. Bagi Provinsi Sulawesi Selatan, publikasi yang disusun adalah "Statistik Potensi Desa Provensi Sulawesi Selatan 2018". Publikasi ini memuat gambaran wilayah administrasi pemerintahan setingkat desa di seluruh indonesia menurut ketersediaan infrastruktur dan potensi yang dimiliki oleh setiap wilayah tersebut. </p>
          <img src="<?php echo base_url()?>aset/sulsel.png" style="width: 400px; float: right; padding-right: 200px; margin-top: -50px;"> 
  
              <button id="helpbutton role="button" class="btn btn-primary">Learn More</button>
              <!-- /.card-body -->
            </div>
              <div class="card-footer" style="background-color: navy; border-radius: 0 0 10px 10px">

              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
   <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0-rc.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">f@del_af-AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>
  <script type="text/javascript"> 
  $(document).ready(function () {
    $("li.indi").mouseenter(function () {
      $(this).stop().animate({'left' : '250px'});
      $(this).css("background-color","rgb(0,128,255)");
      
    });
    $("li.indi").mouseleave(function () {
      $(this).stop().animate({'left' : '158px'});
      $(this).css("background-color","rgba(0,204,255,0.4)");

    });

    $("nav.kostum").mouseenter(function () {
      $(this).stop().animate({'right': '0px'},'fast');
    });
     $("nav.kostum").mouseleave(function () {
      $(this).stop().animate({'right': '-30px'},'fast');
    });
    $("li a.pilih").click(function () {
        
       var indikator = $(this).attr("indikator");
       if (indikator == "aw_des" ) {$("#switch").load("<?php echo base_url() ?>index.php/welcome/desa"); }
       if (indikator == "aw_kec") {$("#switch").load("<?php echo base_url() ?>index.php/welcome/kecamatan");}
       if (indikator == "aw_lereng") {$("#switch").load("<?php echo base_url() ?>index.php/welcome/lereng");}
       if (indikator == "aw_lembah") {$("#switch").load("<?php echo base_url() ?>index.php/welcome/lembah");}
       if (indikator == "aw_dataran") {$("#switch").load("<?php echo base_url() ?>index.php/welcome/dataran");}
       if (indikator == "aw_tepilaut") {$("#switch").load("<?php echo base_url() ?>index.php/welcome/tepilaut");}
       if (indikator == "aw_nontepilaut") {$("#switch").load("<?php echo base_url() ?>index.php/welcome/nontepilaut");}
        $("html,body").animate({scrollTop: $("div#switch").offset().top},2700);
    
  });

    $("li a.pilih").on('click', function (e) {
      e.preventDefault();

    var posting =  $.post('<?php echo base_url() ?>index.php/latihan/index',{name : $(this).attr("indikator")})
     posting.done(function (data) {
       $("#switch").load("<?php echo base_url() ?>index.php/welcome/nontepilaut");
     }) ;
      

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
