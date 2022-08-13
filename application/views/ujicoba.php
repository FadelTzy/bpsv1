<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sistem Informasi</title>
<script src="<?php echo base_url() ?>aset/jquery/jquery-3.4.1.min.js" ></script>
<!-- Tell the browser to be responsive to screen width -->
      <script src="<?php echo base_url()?>aset/lte/plugins/chart.js/Chart.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>aset/css/cssmap.css">
<style type="text/css">
</style>
<link rel="stylesheet" href="<?php echo base_url()?>aset/lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="<?php echo base_url()?>aset/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="<?php echo base_url()?>aset/lte/plugins/jqvmap/jqvmap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>aset/lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>aset/lte/plugins/toastr/toastr.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>aset/lte/plugins/pace-progress/themes/black/pace-theme-flat-top.css">

<!-- overlayScrollbars -->
<link rel="stylesheet" href="<?php echo base_url()?>aset/lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<!-- summernote -->
<link rel="stylesheet" href="<?php echo base_url()?>aset/lte/plugins/summernote/summernote-bs4.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url()?>aset/lte/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url()?>aset/lte/dist/css/adminlte.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>aset/lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> 

<script type="text/javascript" src="<?php echo base_url()?>aset/lte/plugins/pdfmake/pdfmake.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>aset/lte/plugins/datatables/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>aset/lte/plugins/pdfmake/vfs_fonts.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>aset/lte/plugins/jszip/jszip.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>aset/lte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>aset/leaflet/leaflet.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>aset/leaflet/label/leaflet.label.css">
<script  src="<?php echo base_url() ?>aset/leaflet/label/leaflet.label.js"></script>
<script  src="<?php echo base_url() ?>aset/leaflet/label/leaflet.label-src.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>aset/lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

<script src="<?php echo base_url() ?>aset/leaflet/leaflet.js"></script>
<script src="<?php echo base_url() ?>aset/leaflet/leaflet-src.js"></script>
<script src="<?php echo base_url() ?>aset/map/sulselbps.geojson"></script>
<script src="<?php echo base_url()?>aset/leaflet/plug/control/Permalink.js"></script>
<script src="<?php echo base_url()?>aset/leaflet/plug/control/Permalink.Marker.js"></script>
<script src="<?php echo base_url()?>aset/leaflet/plug/control/Permalink.Layer.js"></script>
<script src="<?php echo base_url()?>aset/leaflet/plug/control/Permalink.Overlay.js"></script>
<script src="<?php echo base_url()?>aset/leaflet/leaflet-button-master/L.Control.Button.js"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light omaewa">
    <!-- Left navbar links -->
    <ul style="background-color: rgba(255,255,255,0.1);" class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
 
  </nav>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" ">
    <!-- Brand Logo -->
   
    <a href="<?php echo base_url()?>" class="brand-link elevation-4 " style="">
      <div class="row">
        <div class="col-3"> 
          <img src="<?php echo base_url()?>aset/bps.png"
           alt="bps"
           class="brand-image mt-1 img-circle ml-1 elevation-5"
           style="opacity: .9; ">
         </div>
           <div class=" col-9 brand-text font-weight-light my-auto" style="font-size: 16px;"><i><span style="letter-spacing: 1px;">Badan Pusat Statistik</span> <div>Provinsi Sulawesi Selatan</div></i> </div>
      </div>
        
    </a>

 
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-12 d-flex" style="justify-content: center;">
        <div class="image" style="" >
          <img src="<?php echo base_url()?>aset/iconadmin.png" class="img-circle elevation-4" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><strong> <i> Welcome</i>,</strong> <span><?php if (isset($_SESSION['otentikasi'])) {
        echo $_SESSION['nama'];        
   }else{ echo "Guest";}  ?></span> </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 indikatormenu">
        <ul class="nav nav-pills nav-sidebar flex-column"   data-widget="treeview" role="menu" data-accordion="false"   >
                   
          <li class="nav-header">Data Informasi</li>

          <div class="" > 

            <?php foreach ($pertama->result() as $key) : ?>
          <li class="nav-item indikatormenu nav-link "   id="<?php echo $key->id ?>" menu="<?php echo $key->menuindikator ?>" >
            <a  class="" >
              <i class="nav-icon fas fa-home"></i>
              <p class="p" style="color: white; font-size: 15px; font-family: sans-serif;">
               <b><?php echo $key->menuindikator ?></b>
              </p>
            </a>
          </li>
            <?php endforeach; ?>
          </div>
          <hr>

            <?php if (isset($_SESSION['otentikasi'])) { ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Edit Menu 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item  tambahindikator nav-link  " data-toggle="modal" data-target="#modal-tambah-sm">
                <a  class="" >
                  <i class="nav-icon fas fa-plus"></i>
                  <p class="p" style="color: white; font-size: 15px;">
                    Tambah Data Informasi
                  </p>
                </a>
              </li>
                <li class="nav-item  editindikator nav-link  " data-toggle="modal" data-target="#modal-edit-sm">
                <a  class="" >
                  <i class="nav-icon fas fa-edit"></i>
                  <p class="p" style="color: white; font-size: 15px;">
                    Edit Data Informasi
                  </p>
                </a>
              </li>
                <li class="nav-item  hapusindikator nav-link  " data-toggle="modal" data-target="#modal-hapus-sm">
                <a  class="" >
                  <i class="nav-icon fas fa-trash"></i>
                  <p class="p" style="color: white; font-size: 15px;">
                    Hapus Data Informasi
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li  class="nav-item has-treeview" id="kelolaakun">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Admin
              </p>
            </a>
          </li>      
        
             <?php } ?>
          <?php 
          if (!isset($_SESSION['otentikasi'])) { ?>
          
          <li class="nav-item has-treeview nav-link" style="text-align: center;">
                  <button class="btn btn-light" data-toggle="modal" data-target="#modal-tanggap">
                  <i class="nav-icon fas fa-envelope"></i> 
                </button>
          </li>
           <li class="nav-item has-treeview nav-link" style="text-align: center;">
            
              <button type="button" style="margin-left: -9px;" class="btn btn-light" data-toggle="modal" data-target="#modal-sm">

            <i class="nav-icon fas fa-user"></i>
                           
                           Login                      
            </button>    
          

          </li>
        <?php }else{ ?>
  
           <li class="nav-item has-treeview nav-link" style="text-align: center;">


          
                          <button type="button" style="margin-left: -9px;" class="btn btn-light logout" >
                           
                            <i class=" nav-icon fas fa-power-off"></i> Log-Out                      
                          </button>    
            </li>
        <?php } ?>
     
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
            <div class="card" id="leaderboard" style="display: none;">
              <div class="card-header" style="text-align: center;">
                <h1 class="" align="" style="font-size: 50px">Sistem Informasi Geografis<h3 style="font-size: 35px"><span class="judulindikatormenu" > </span> Sulawesi Selatan</h3></h1>
                
              </div>
              <!-- /.card-body -->
              <!-- /.card-footer-->
            </div>
            <div class="card" id="bcutama"  style="background-color: darkblue; display: none;" >
              <div class="card-body" >
                <?php foreach ($resultgambarpeta->result() as $keypeta ) : ?>
                <img src="<?php echo base_url().'aset/imagesbc/'.$keypeta->namag ?>" style="width: 100%; height: 100%">
              <?php endforeach; ?>
              </div>
              
            </div>
            <!-- /.card -->
        </div>
      </div>
    </section>
<!--/* MODALS PLIS */

/* MODALS PLIS */
/* MODALS PLIS */
/* MODALS PLIS *//* MODALS PLIS */
/* MODALS PLIS *//* MODALS PLIS */-->
      <div class="modal fade" id="modal-overlay">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="overlay d-flex justify-content-center align-items-center">
                <i class="fas fa-2x fa-sync fa-spin" style="position: fixed; top: 3%; right: 3%; color: white !important"></i>
            </div>
              <button type="button" style="display: none" class="btn btn-default" id="closeoverlay" data-dismiss="modal"></button>
 
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
   <!-- MODAL update 3 -->
      <div class="modal fade" id="modal-update3btndata-sm">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-body btn-default" >
              <form  role="form">
                <div class="card-body text-center">
                
                  <div class="form-group">
                    <label >Edit Data <span></span> </label>
                  </div>
                  <div class="form-group" id="judulupdate3">

                  </div>
                  <div class="form-group" id="listupdate3" style="overflow-y: auto; height: 400px;">
                  </div>
                    <div class="form-group " style="float: right;">
                        <input type="checkbox" id="checkboxPrimary1" class="checkboxtp3" style="background-color: white">
                        <label for="checkboxPrimary1"> Tanpa Persen(%)
                        </label>
                         <input type="checkbox" id="checkboxPrimary1" class="checkboxtt3" style="background-color: white">
                        <label for="checkboxPrimary1"> Tanpa Total
                        </label>
                    </div>
                 <div class="form-group" id="boxtotalsendiri">
                    <input class="form-control" type="text" name="" value="" id="boxtotalsendiriupdate3" placeholder="Sulawesi Selatan" style="display: none;">
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3%; ">
              <button type="button" class="btn btn-default" data-dismiss="modal"> <div class="fa fa-times"></div></button>
              <button type="button" class="btn btn-primary" no ="" id="update_button_data3"><div class="fa fa-edit"></div></button>
              <button type="button" class="btn btn-info" id="done_button1">Done</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    <!-- MODAL update 2 -->
      <div class="modal fade" id="modal-update2btndata-sm">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-body btn-default" >
              <form  role="form">
                <div class="card-body text-center">
                
                  <div class="form-group">
                    <label >Edit Data <span></span> </label>
                  </div>
                  <div class="form-group" id="judulupdate2">

                  </div>
                  <div class="form-group" id="listupdate2" style="overflow-y: auto; height: 400px;">
                  </div>
                    <div class="form-group " style="float: right;">
                        <input type="checkbox" id="checkboxPrimary1" class="checkboxtp2" style="background-color: white">
                        <label for="checkboxPrimary1"> Tanpa Persen(%)
                        </label>
                        <input type="checkbox" id="checkboxPrimary1" class="checkboxtt2" style="background-color: white">
                        <label for="checkboxPrimary1"> Tanpa Total
                        </label>
                    </div>
                 <div class="form-group" id="boxtotalsendiri">
                    <input class="form-control" type="text" name="" value="" id="boxtotalsendiriupdate2" placeholder="Sulawesi Selatan" style="display: none;">
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3%; ">
              <button type="button" class="btn btn-default" data-dismiss="modal"> <div class="fa fa-times"></div></button>
              <button type="button" class="btn btn-primary" no ="" id="update_button_data2"><div class="fa fa-edit"></div></button>
              <button type="button" class="btn btn-info" id="done_button1">Done</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    <!-- MODAL update -->
      <div class="modal fade" id="modal-update1btndata-sm">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-body btn-default" >
              <form  role="form">
                <div class="card-body text-center">
                
                  <div class="form-group">
                    <label >Edit Data <span></span> </label>
                  </div>
                  <div class="form-group" id="judulupdate1">

                  </div>
                  <div class="form-group" id="listupdate" style="overflow-y: auto; height: 400px;">
              
                  </div>
                    <div class="form-group " style="float: right;">
                        <input type="checkbox" id="checkboxPrimary1" class="checkboxtp1" style="background-color: white">
                        <label for="checkboxPrimary1"> Tanpa Persen(%)
                        </label>
                        <input type="checkbox" id="checkboxPrimary1" class="checkboxtt" style="background-color: white">
                        <label for="checkboxPrimary1"> Tanpa Total
                        </label>
                    </div>
                  <div class="form-group" id="boxtotalsendiri">
                    <input class="form-control" type="text" name="" value="" id="boxtotalsendiriupdate1" placeholder="Sulawesi Selatan" style="display: none;">
                  </div>

                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3%; ">
              <button type="button" class="btn btn-default" data-dismiss="modal"> <div class="fa fa-times"></div></button>
              <button type="button" class="btn btn-primary" no ="" id="update_button_data1"><div class="fa fa-edit"></div></button>
              <button type="button" class="btn btn-info" id="done_button1">Done</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- MODAL create 3 -->
      <div class="modal fade" id="modal-create3btndata-sm">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-body btn-default" >
              <form role="form">
                <div class="card-body text-center" >
                  <div class="form-group">
                    <label for="exampleInputEmail1">Input Data Spasial</label>
                    <input type="text" class="form-control" name="judulpeta3" id="judulpeta3" placeholder="JUDUL PETA">
                  </div>
                  <div class="form-group" style="overflow-y: auto; height: 400px;">
              <?php foreach ($indikator->result() as $key ) :  ?>

                    <input type="text" class="form-control" name="judulpeta3" id="<?php echo str_replace(' ', '', $key->kabkot)."crt3";?>" placeholder="<?php echo $key->kabkot ?>">
             <?php endforeach; ?>       
                  </div>
                    <div class="form-group clearfix" style="float: right;">
                        <input type="checkbox" id="checkboxPrimary1" class="checkbox3tp" style="background-color: white">
                        <label for="checkboxPrimary1"> Tanpa Persen(%)
                        </label>
                        <input type="checkbox" id="checkboxPrimary2" class="checkboxtt3" style="background-color: white">
                        <label for="checkboxPrimary1"> Tanpa Total
                        </label>
                    </div>
                <div class="form-group" id="boxtotalsendiri">
                    <input class="form-control" type="text" name="" value="" id="boxtotalsendiritambah3" placeholder="Sulawesi Selatan" style="display: none;">
                  </div>

                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3%; ">
              <button type="button" class="btn btn-default" data-dismiss="modal"> <div class="fa fa-times"></div></button>
              <button type="button" class="btn btn-primary" no ="" id="tambah_button_data3"><div class="fa fa-plus"></div></button>
              <button type="button" class="btn btn-info" id="done_button1">Done</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
      <!-- MODAL create 2 -->
      <div class="modal fade" id="modal-create2btndata-sm">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-body btn-default" >
              <form role="form">
                <div class="card-body text-center" >
                  <div class="form-group">
                    <label for="exampleInputEmail1">Input Data Spasial</label>
                    <input type="text" class="form-control" name="judulpeta2" id="judulpeta2" placeholder="JUDUL PETA">
                  </div>
                  <div class="form-group" style="overflow-y: auto; height: 400px;">
              <?php foreach ($indikator->result() as $key ) :  ?>

                    <input type="text" class="form-control" name="judulpeta2" id="<?php echo str_replace(' ', '', $key->kabkot)."crt2";?>" placeholder="<?php echo $key->kabkot ?>">
             <?php endforeach; ?>       
                  </div>
                    <div class="form-group clearfix" style="float: right;">
                        <input type="checkbox" id="checkboxPrimary1" class="checkbox2tp" style="background-color: white">
                        <label for="checkboxPrimary1"> Tanpa Persen(%)
                        </label>
                        <input type="checkbox" id="checkboxPrimary2" class="checkboxtt2" style="background-color: white">
                        <label for="checkboxPrimary1"> Tanpa Total
                        </label>
                    </div>
                  <div class="form-group" id="boxtotalsendiri">
                    <input class="form-control" type="text" name="" value="" id="boxtotalsendiritambah2" placeholder="Sulawesi Selatan" style="display: none;">
                  </div>

                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3%; ">
              <button type="button" class="btn btn-default" data-dismiss="modal"> <div class="fa fa-times"></div></button>
              <button type="button" class="btn btn-primary" no ="" id="tambah_button_data2"><div class="fa fa-plus"></div></button>
              <button type="button" class="btn btn-info" id="done_button1">Done</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- MODAL create 1 -->
      <div class="modal fade" id="modal-create1btndata-sm">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-body btn-default" >
              <form role="form">
                <div class="card-body text-center" >
                  <div class="form-group">
                    <label for="exampleInputEmail1">Input Data Spasial</label>
                    <input type="text" class="form-control" name="judulpeta1" id="judulpeta1" placeholder="JUDUL PETA">
                  </div>
                  <div class="form-group" style="overflow-y: auto; height: 400px;">
              <?php foreach ($indikator->result() as $key ) :  ?>

                    <input type="text" class="form-control" name="judulpeta1" id="<?php echo str_replace(' ', '', $key->kabkot)."crt1";?>" placeholder="<?php echo $key->kabkot ?>">
             <?php endforeach; ?>       
                  </div>
                    <div class="form-group " style="float: right;">
                        <input type="checkbox" id="checkboxPrimary2" class="checkboxtp" style="background-color: white">
                        <label for="checkboxPrimary1"> Tanpa Persen(%)
                        </label>
                        <input type="checkbox" id="checkboxPrimary2" class="checkboxtt" style="background-color: white">
                        <label for="checkboxPrimary1"> Tanpa Total
                        </label>
                    </div>
                  <div class="form-group" id="boxtotalsendiri">
                    <input class="form-control" type="text" name="" value="" id="boxtotalsendiritambah1" placeholder="Sulawesi Selatan" style="display: none;">
                  </div>

                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3%; ">
              <button type="button" class="btn btn-default" data-dismiss="modal"> <div class="fa fa-times"></div></button>
              <button type="button" class="btn btn-primary" no ="" id="tambah_button_data1"><div class="fa fa-plus"></div></button>
              <button type="button" class="btn btn-info" id="done_button1">Done</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- MODAL DANGER create 3-->
     <div class="modal fade" id="modal-create3btn-sm">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-body btn-default text-center">
              <div>Klik ya untuk melanjutkan</div>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3% ">
              <button type="button" class="btn btn-default" id="dis3btn" data-dismiss="modal"> Tutup </button>
              <button type="button" class="btn btn-info" no="" id="create3btn_button">Ya </button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>           
<!-- MODAL DANGER create 2-->
     <div class="modal fade" id="modal-create2btn-sm">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-body btn-default text-center">
              <div>Klik ya untuk melanjutkan</div>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3% ">
              <button type="button" class="btn btn-default" id="dis2btn" data-dismiss="modal"> Tutup </button>
              <button type="button" class="btn btn-info" no="" id="create2btn_button">Ya </button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>      
<!-- MODAL DANGER create 1-->
     <div class="modal fade" id="modal-create1btn-sm">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-body btn-default text-center">
              <div>Klik ya untuk melanjutkan</div>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3% ">
              <button type="button" class="btn btn-default" id="dis1btn" data-dismiss="modal"> Tutup </button>
              <button type="button" class="btn btn-info" no="" id="create1btn_button">Ya </button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

 <!-- MODAL HAPUS 3 btn-->
      <div class="modal fade" id="modal-hapus3btn-sm">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-body btn-default">
              <div>Apakah Anda Yakin..?</div>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3% ">
              <button type="button" class="btn btn-default" data-dismiss="modal"> Tutup </button>
              <button type="button" class="btn btn-info" no="" id="hapus3btn_button">Ya</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
 <!-- MODAL EDIT 3 btn-->
      <div class="modal fade" id="modal-edit3btn-sm">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-body btn-default">
              <form role="form">
                <div class="card-body text-center">
                <label for="exampleInputEmail1" class="text-center">Edit</label><br>


                  <div class="form-group" style="text-align: left;">

                  <select name="edit3btnindikator" id="edit3btnindikator" class="edit3btnindikator form-control custom-select">
                    <option value="null" class="text-center"> -- Pilih Indikator -- </option>
                  </select>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control editindikator3btntext" style="display: none;" name="editindikator3btntext" id="editindikator3btntext" placeholder="....">
                    <input type="hidden" class="form-control" name="editindikator3btntext2" id="editindikator3btntext2" placeholder="....">

                  </div>
              
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3% ">
              <button type="button" class="btn btn-default" data-dismiss="modal"> <div class="fa fa-times"></div></button>
              <button type="button" class="btn btn-success edit3btn" menu="" no="" id="edit3btn_button"><div class="fa fa-edit"></div></button>
              <button type="button" class="btn btn-info" id="done_button">Done</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- MODAL TAMBAH 3 BTN -->
      <div class="modal fade" id="modal-tambah3btn-sm">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-body btn-default">
              <form role="form">
                <div class="card-body" style="height: 100px;">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tambah Indikator</label>
                    <input type="text" class="form-control" name="tambah3btnindikator" id="tambah3btnindikator" placeholder="Indikator Baru">
                  </div>

                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3% ">
              <button type="button" class="btn btn-default" data-dismiss="modal"> <div class="fa fa-times"></div></button>
              <button type="button" class="btn btn-primary tambah3btn" menu="" no="" id="tambah3btn_button"><div class="fa fa-plus"></div></button>
              <button type="button" class="btn btn-info" id="done_button1btn">Done</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

 <!-- MODAL HAPUS 2 btn-->
      <div class="modal fade" id="modal-hapus2btn-sm">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-body btn-default">
              <div>Apakah Anda Yakin..?</div>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3% ">
              <button type="button" class="btn btn-default" data-dismiss="modal"> Tutup </button>
              <button type="button" class="btn btn-info" no="" id="hapus2btn_button">Ya</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
 <!-- MODAL EDIT 2 btn-->
      <div class="modal fade" id="modal-edit2btn-sm">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-body btn-default">
              <form role="form">
                <div class="card-body text-center">
                <label for="exampleInputEmail1" class="text-center">Edit</label><br>


                  <div class="form-group" style="text-align: left;">

                  <select name="edit2btnindikator" id="edit2btnindikator" class="edit2btnindikator form-control custom-select">
                    <option value="null" class="text-center"> -- Pilih Indikator -- </option>
                  </select>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control editindikator2btntext" style="display: none;" name="editindikator2btntext" id="editindikator2btntext" placeholder="....">
                    <input type="hidden" class="form-control" name="editindikator2btntext2" id="editindikator2btntext2" placeholder="....">

                  </div>
              
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3% ">
              <button type="button" class="btn btn-default" data-dismiss="modal"> <div class="fa fa-times"></div></button>
              <button type="button" class="btn btn-success edit2btn" menu="" no="" id="edit2btn_button"><div class="fa fa-edit"></div></button>
              <button type="button" class="btn btn-info" id="done_button">Done</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- MODAL TAMBAH 2 BTN -->
      <div class="modal fade" id="modal-tambah2btn-sm">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-body btn-default">
              <form role="form">
                <div class="card-body" style="height: 100px;">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tambah Indikator</label>
                    <input type="text" class="form-control" name="tambah2btnindikator" id="tambah2btnindikator" placeholder="Indikator Baru">
                  </div>

                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3% ">
              <button type="button" class="btn btn-default" data-dismiss="modal"> <div class="fa fa-times"></div></button>
              <button type="button" class="btn btn-primary tambah2btn" menu="" no="" id="tambah2btn_button"><div class="fa fa-plus"></div></button>
              <button type="button" class="btn btn-info" id="done_button1btn">Done</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  


 <!-- MODAL HAPUS 1 btn-->
      <div class="modal fade" id="modal-hapus1btn-sm">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-body btn-default">
              <div>Apakah Anda Yakin..?</div>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3% ">
              <button type="button" class="btn btn-default" data-dismiss="modal"> Tutup </button>
              <button type="button" class="btn btn-info" no="" id="hapus1btn_button">Ya</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
 <!-- MODAL EDIT 1 btn-->
      <div class="modal fade" id="modal-edit1btn-sm">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-body btn-default">
              <form role="form">
                <div class="card-body text-center">
                <label for="exampleInputEmail1" class="text-center">Edit</label><br>


                  <div class="form-group" style="text-align: left;">

                  <select name="edit1btnindikator" id="edit1btnindikator" class="edit1btnindikator form-control custom-select">
                    <option value="null" class="text-center"> -- Pilih Indikator -- </option>
                  </select>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control editindikator1btntext" style="display: none;" name="editindikator1btntext" id="editindikator1btntext" placeholder="....">
                    <input type="hidden" class="form-control" name="editindikator1btntext2" id="editindikator1btntext2" placeholder="....">

                  </div>
              
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3% ">
              <button type="button" class="btn btn-default" data-dismiss="modal"> <div class="fa fa-times"></div></button>
              <button type="button" class="btn btn-success edit1btn" menu="" no="" id="edit1btn_button"><div class="fa fa-edit"></div></button>
              <button type="button" class="btn btn-info" id="done_button">Done</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- MODAL TAMBAH 1 BTN -->
      <div class="modal fade" id="modal-tambah1btn-sm">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-body btn-default">
              <form role="form">
                <div class="card-body" style="height: 100px;">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tambah Indikator</label>
                    <input type="text" class="form-control" id="tambah1btnindikator" placeholder="Indikator Baru">
                  </div>

                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3% ">
              <button type="button" class="btn btn-default" data-dismiss="modal"> <div class="fa fa-times"></div></button>
              <button type="button" class="btn btn-primary tambah1btn" menu="" no="" id="tambah1btn_button"><div class="fa fa-plus"></div></button>
              <button type="button" class="btn btn-info" id="done_button1btn">Done</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>



      <!-- MODAL EDIT -->
      <div class="modal fade" id="modal-edit-sm">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-body btn-default">
              <form role="form">
                <div class="card-body text-center">
                <label for="exampleInputEmail1" class="text-center">Edit Indikator</label><br>


                  <div class="form-group" style="text-align: left;">

                  <select name="editindikator" id="editindikator" class="editindikator form-control custom-select">
                    <option disabled="true" selected="true" class="text-center"> -- Pilih Indikator -- </option>
                      <?php foreach ($pertama->result() as $key) : ?>
                    <option  id="<?php echo $key->id ?>" value="<?php echo $key->menuindikator ?>"><?php echo $key->menuindikator ?></option>
                      <?php endforeach; ?>
                  </select>
                                    </div>

                  <div class="form-group">
                    <input type="text" class="form-control editindikatortext" style="display: none;" name="editindikatortext" id="editindikatortext" placeholder="....">
                    <input type="hidden" class="form-control" name="editindikatortext2" id="editindikatortext2" placeholder="....">

                  </div>
              
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3% ">
              <button type="button" class="btn btn-default" data-dismiss="modal"> <div class="fa fa-times"></div></button>
              <button type="button" class="btn btn-success" id="edit_button"><div class="fa fa-edit"></div></button>
              <button type="button" class="btn btn-info" id="done_button">Done</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <!-- MODAL TAMBAH -->
      <div class="modal fade" id="modal-tambah-sm">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-body btn-default">
              <form role="form">
                <div class="card-body" style="height: 100px;">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tambah Indikator</label>
                    <input type="text" class="form-control" name="tambahindikator" id="tambahindikator" placeholder="Indikator Baru">
                  </div>

                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3% ">
              <button type="button" class="btn btn-default" data-dismiss="modal"> <div class="fa fa-times"></div></button>
              <button type="button" class="btn btn-primary" id="tambah_button"><div class="fa fa-plus"></div></button>
              <button type="button" class="btn btn-info" id="done_button1">Done</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


            <!-- MODAL HAPUS -->
      <div class="modal fade" id="modal-hapus-sm">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-body btn-default">
              <form role="form">
                <div class="card-body" >
                  <div class="form-group text-center" >
                    <label for="exampleInputEmail1">Hapus Indikator</label>
                    <br><br>
                    <?php foreach ($pertama->result() as $key ) :  ?>
                      
                    
                    <input type="text" style="display: inline-block;" disabled="true" class="form-control  col-md-10" name="<?php echo $key->id ?>" id="<?php echo str_replace(' ', '', $key->menuindikator) ?>" value="<?php echo $key->menuindikator ?>">
                    <span type="button" class="btn btn-danger hapus_button" name="<?php echo str_replace(' ', '', $key->menuindikator) ?>" id="<?php echo $key->id ?>"><span class="fa fa-times"></span></span><br>


                   <?php endforeach; ?>

                  </div>

                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3% ">
              <button type="button" class="btn btn-default" data-dismiss="modal"> <div class="fa fa-times"></div></button>
              <button type="button" class="btn btn-info" id="done_button2">Done</button>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <div class="modal fade" id="modal-tanggap">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tanggapan Pengunjung</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form">
                <div class="form-group">
                        <label>Comment Area</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
              </div>
              <div style="line-height: 2vh">
                <i>! <b style="font-size: 1.5vh">Segera laporkan masalah jika terdapat data yang invalid</b></i><br>
                <i>! <b style="font-size: 1.5vh">Data yang tidak update</b></i><br>
                <i>! <b style="font-size: 1.5vh">Data tidak dapat diakses</b></i>

              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Kirim</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->





      <div class="modal fade" id="modal-sm">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header " style="border-top: 4px solid blue; border-radius: 3% ">
               <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo base_url()?>aset/admin.png"
                       alt="User profile picture">
                </div>
              </div>

           
            </div>
            <div class="modal-body btn-default">
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                  </div>

                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <div class="modal-footer justify-content-between"  style="border-bottom: 3px solid blue; border-radius: 3% ">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="login_button">Login</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

          <!-- row kecamatan -->
        <div class="col-md-12 hideindis" style="display: none">
                     <div class="card card-primary card-outline">
              <div class="card-header animatesampaisini">
                <div class="row">
 
              <div class="col-md-4" style="text-align: center;">
              <div class="form-grup" >
                <div class="col-md-12">
                  <div>

                                  <div class="editing1 label-control" style="float: left;"> 
<button data-toggle="modal" data-target="#modal-edit1btn-sm" class="btn btn-success btn-sm"><div class="fa fa-edit"></div></button>
<button data-toggle="modal" data-target="#modal-tambah1btn-sm" class="btn btn-primary btn-sm"><div class="fa fa-plus"></div></button>
<button data-toggle="modal" data-target="#modal-hapus1btn-sm"  class="btn btn-danger btn-sm" ><div class="fa fa-trash"></div></button>
<button data-toggle="modal" style="display: none;" data-target="#modal-create1btndata-sm" id="modalcreatedata"></button>

                                   </div> 

                                   <div style="float: right;">
<button data-toggle="modal" data-target="#modal-create1btn-sm" id="tambahmap_button" style="display: none" no="" class="btn btn-warning btn-sm" style="float: right;"> Create </button>
<button data-toggle="modal" data-target="#modal-update1btndata-sm" id="updatemap_button" style="display: none" no="" class="btn btn-info btn-sm"  style="float: right;"> Update </button>
                                   </div>

                                 </div>

                </div>
           <div class="" <?php if (isset($_SESSION['otentikasi'])) {    ?>  style="padding-top: 38px;"  <?php } ?>>


                  <select name="subkategori" class="subkategori form-control custom-select">
                    <option value="gkada">PILIH</option>
                  </select>
                </div>
              </div>
              <div>
                                <label class="loader label-control"  id="loading"></label>

                </div>
                  </div>
                  <div class="col-md-4" style="text-align: center;">
              <div class="form-grup">
               <div class="col-md-12">
<div class="editing2 label-control"  style="float: left;">
 <button data-toggle="modal" data-target="#modal-edit2btn-sm" class="btn btn-success btn-sm" id=""><div class="fa fa-edit"></div></button>
 <button data-toggle="modal" data-target="#modal-tambah2btn-sm" class="btn btn-primary btn-sm" id=""><div class="fa fa-plus"></div></button>
 <button data-toggle="modal" data-target="#modal-hapus2btn-sm" class="btn btn-danger btn-sm" id=""><div class="fa fa-trash"></div></button> 
 <button data-toggle="modal" style="display: none;" data-target="#modal-create2btndata-sm" id="modalcreatedata2"></button>

</div>
                                   <div style="float: right;">
<button data-toggle="modal" data-target="#modal-create2btn-sm" id="tambah2map_button" style="display: none" no="" class="btn btn-warning btn-sm" style="float: right;"> Create </button>
<button data-toggle="modal" data-target="#modal-update2btndata-sm" id="update2map_button" style="display: none" no="" class="btn btn-info btn-sm"  style="float: right;"> Update </button>
                                   </div>

              </div>
                <div class="" <?php if (isset($_SESSION['otentikasi'])) {    ?>  style="padding-top: 38px;"  <?php } ?>>
                  <select name="subsubkategori" class="subsubkategori form-control custom-select">
                    <option value="0">PILIH</option>
                  </select>
                </div>
              </div>
                                <label class="loader  label-control" id="loading2"></label>

                  </div>


                  <div class="col-md-4" style="text-align: center;">
              <div class="form-grup">
               <div class="col-md-12">
                               <div class="editing3 label-control"  style="float: left;">
 <button data-toggle="modal" data-target="#modal-edit3btn-sm" class="btn btn-success btn-sm" id=""><div class="fa fa-edit"></div></button>
 <button data-toggle="modal" data-target="#modal-tambah3btn-sm" class="btn btn-primary btn-sm" id=""><div class="fa fa-plus"></div></button>
 <button data-toggle="modal" data-target="#modal-hapus3btn-sm" class="btn btn-danger btn-sm" id=""><div class="fa fa-trash"></div></button>
 <button data-toggle="modal" style="display: none;" data-target="#modal-create3btndata-sm" id="modalcreatedata3"></button>

                               </div>
                                   <div style="float: right;">
<button data-toggle="modal" data-target="#modal-create3btn-sm" id="tambah3map_button" style="display: none" no="" class="btn btn-warning btn-sm" style="float: right;"> Create </button>
<button data-toggle="modal" data-target="#modal-update3btndata-sm" id="update3map_button" style="display: none" no="" class="btn btn-info btn-sm"  style="float: right;"> Update </button>
                                   </div>                               


              </div>
                <div class="" <?php if (isset($_SESSION['otentikasi'])) {    ?>  style="padding-top: 38px;"  <?php } ?>>
                  <select name="subsubsubkategori" class="subsubsubkategori form-control custom-select">
                    <option value="0">PILIH</option>
                  </select>
                </div>
              </div>
                                <label class="loader" id="loading4"></label>

                  </div>
                </div><!-- <--class row-->
              </div>

            </div>
        </div>  
<div class="col-md-12" style="text-align: center; justify-content: center;">
        <p class="" id="loading3"></p>
</div>
        <div class="row" id="switch">

        </div>
        <div class="row" id="akun"></div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card podeshome">

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

  <footer class="main-footer" style="background-color: darkblue; text-align: center; align-content: center;">
    <img src="<?php echo base_url()?>aset/bps.png" style="width: 3%">  
  </footer>

        <div class="btnefek">
                 <button  class="swalDefaultError"></button>
                <button    class=" swalDefaultWarning"></button>
                <button   class=" swalDefaultSuccess"></button>
                <button   class="swalDefaultQuestion"></button>
                  <button  class="toastrDefaultSuccess"></button>
                <button class="toastrDefaultError"> </button>
                 <button data-toggle="modal" data-target="#modal-overlay" id="loaderoverlay">    </button>
        </div>
        <div class="modal fade" id="modal-peta">
        <div class="modal-dialog modal-sm modal-dialog-centered">
          <div class="modal-content">
  
            <div class="modal-body text-center">
                <div class="fa fa-check fa-4x" style="color: green"></div>
                <div class="modal-title">Berhasil Memuat Map</div>
                <div class="modal-title">Silahkan Masukkan Data</div>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-success" data-dismiss="modal"><b>ok</b></button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->



  <script type="text/javascript"> 

  $(document).ready(function () {
  $("#bcutama").show( "fold", {horizFirst: true}, 2000 );



/* Penambahan sintak input sendiri*/
$('input[type="checkbox"].checkboxtt').click(function () {
  if ($(this).prop("checked") == true) {
    $("#boxtotalsendiriupdate1").show();
        $("#boxtotalsendiritambah1").show();

}
if ($(this).prop("checked") == false) {
  $("#boxtotalsendiriupdate1").hide();
  $("#boxtotalsendiritambah1").hide();

  $("#boxtotalsendiriupdate1").val(null);
  $("#boxtotalsendiritambah1").val(null);

}
});

/* Penambahan sintak input sendiri*/
$('input[type="checkbox"].checkboxtt2').click(function () {
  if ($(this).prop("checked") == true) {
    $("#boxtotalsendiriupdate2").show();
        $("#boxtotalsendiritambah2").show();

}
if ($(this).prop("checked") == false) {
  $("#boxtotalsendiriupdate2").hide();
  $("#boxtotalsendiritambah2").hide();

  $("#boxtotalsendiriupdate2").val(null);
  $("#boxtotalsendiritambah2").val(null);

}
});
/* Penambahan sintak input sendiri*/
$('input[type="checkbox"].checkboxtt3').click(function () {
  if ($(this).prop("checked") == true) {
    $("#boxtotalsendiriupdate3").show();
        $("#boxtotalsendiritambah3").show();

}
if ($(this).prop("checked") == false) {
  $("#boxtotalsendiriupdate3").hide();
  $("#boxtotalsendiritambah3").hide();

  $("#boxtotalsendiriupdate3").val(null);
  $("#boxtotalsendiritambah3").val(null);

}
});


    /* update map btn 3 */
$("#update_button_data3").click(function () {
  $("#loaderoverlay").trigger('click');
  var no = $(this).attr('no');
  var judul = $("#judulpeta3update").val();
  if ($(".checkboxtp3").is(':checked')) {
  var cbtp = "tanpapersen";
  }else{var cbtp = "persen" ; }
  var p = [];
  for (var i = 0; i < 24; i++) {
      p[i] = $('#updatelist3'+(i+1)+'').val();
  }

  $.ajax({
    url : "<?php echo base_url()?>index.php/Tambahdata/creates3",
    method : "POST",
    data  : {che : p, judul : judul, no : no, cbtp : cbtp},
    success : function (data) {
         $("#closeoverlay").trigger('click');
         $(".toastrDefaultSuccess").click();
    },
    error : function (data) {
           $(".toastrDefaultError").click();

    }
  });

});
  /* update map btn 2 */
$("#update_button_data2").click(function () {
   $("#loaderoverlay").trigger('click');
  var no = $(this).attr('no');
  var judul = $("#judulpeta2update").val();
  var boxtots = $("#boxtotalsendiriupdate2").val();
    if ($(".checkboxtp2").is(':checked')) {
    var cbtp = "tanpapersen"
  }else{var cbtp = "persen" ; }
  var p = [];
  for (var i = 0; i < 24; i++) {
      p[i] = $('#updatelist2'+(i+1)+'').val();
  }

  $.ajax({
    url : "<?php echo base_url()?>index.php/Tambahdata/creates2",
    method : "POST",
    data  : {che : p, judul : judul, no : no , cbtp : cbtp, bxt : boxtots},
    success : function (data) {
         $("#closeoverlay").trigger('click');
         $(".toastrDefaultSuccess").click();
    },
    error : function (data) {
           $(".toastrDefaultError").click();

    }
  });

});
/* update map btn 1 */

$("#update_button_data1").click(function () {
  var no = $(this).attr('no');
  $("#loaderoverlay").trigger('click');
  var judul = $("#judulpeta1update").val();
var boxtots =   $("#boxtotalsendiriupdate1").val();

  if ($(".checkboxtp1").is(':checked')) {
    var cbtp = "tanpapersen"
  }else{var cbtp = "persen" ; }
  var p = [];
  for (var i = 0; i < 24; i++) {
      p[i] = $('#updatelist1'+(i+1)+'').val();
  }

  $.ajax({
    url : "<?php echo base_url()?>index.php/Tambahdata/creates1",
    method : "POST",
    data  : {che : p, judul : judul, no : no, cbtp : cbtp , bxt : boxtots},
    success : function (data) {
         $("#closeoverlay").trigger('click');
         $(".toastrDefaultSuccess").click();
    },
    error : function (data) {
           $(".toastrDefaultError").click();

    }
  });

});
/* penanganan data 3 */
$("#update3map_button").click(function () {
  var no = $(this).attr("no");
  $.ajax({
    url : "<?php echo base_url()?>index.php/Updatedata/update3",
    method : "POST",
    data : {no : no},
    async: false,
    dataType: 'json',
    success : function (data) {
      var listupdate = '';
      for (var i = 0; i < data.length; i++) {
      
       listupdate += '<label>'+[data[i].kabkot]+'</label> <input  class="form-control" type="text" name="" id="updatelist3'+[data[i].nomor]+'" value="'+[data[i].no]+'">';

      }
      $("#listupdate3").html(listupdate);

    },
    error : function (data) {
                 $(".toastrDefaultError").click();
    }
  });
});
/* penanganan data 2 */
$("#update2map_button").click(function () {
  var no = $(this).attr("no");
  $.ajax({
    url : "<?php echo base_url()?>index.php/Updatedata/update2",
    method : "POST",
    data : {no : no},
    async: false,
    dataType: 'json',
    success : function (data) {
      var listupdate = '';
      for (var i = 0; i < data.length; i++) {
      
       listupdate += '<label>'+[data[i].kabkot]+'</label> <input  class="form-control" type="text" name="" id="updatelist2'+[data[i].nomor]+'" value="'+[data[i].no]+'">';

      }
      $("#listupdate2").html(listupdate);

    }
  });
});
/* penanganan data */
$("#updatemap_button").click(function () {
  var no = $(this).attr("no");
  $.ajax({
    url : "<?php echo base_url()?>index.php/Updatedata/update1",
    method : "POST",
    data : {no : no},
    async: false,
    dataType: 'json',
    success : function (data) {
      var listupdate = '';
      for (var i = 0; i < data.length; i++) {
      
       listupdate += '<label>'+[data[i].kabkot]+'</label> <input  class="form-control" type="text" name="" id="updatelist1'+[data[i].nomor]+'" value="'+[data[i].no]+'">';

      }
      $("#listupdate").html(listupdate);

    }
  });
});
/* penanganan judul 3 */
$("#update3map_button").click(function () {
  var no = $(this).attr("no");
  $.ajax({
    url : "<?php echo base_url()?>index.php/Updatedata/update3judul",
    method : "POST",
    data : {no : no},
    dataType : 'json',
    async : false,
    success : function (data) {
        if (data.coba3 == "persen") {
        $(".checkboxtp3").attr('checked',false);
        }
        if (data.coba3 == "tanpapersen") {
        $(".checkboxtp3").attr('checked',true);
        }   
                if (data.totalsendiri !== 'none') {
    $(".checkboxtt3").attr('checked',true);
        $("#boxtotalsendiriupdate3").show();
        $("#boxtotalsendiriupdate3").val(data.totalsendiri);
        }else{
            $(".checkboxtt3").attr('checked',false);
        $("#boxtotalsendiriupdate3").hide();
        $("#boxtotalsendiriupdate3").val(null);

        }  
       var html = '<input class="form-control" type="text" name="" id="judulpeta3update" value="'+data.coba1+'">'; 
       $("#judulupdate3").html(html);
    }
  });
});
/* penanganan judul 2 */
$("#update2map_button").click(function () {
  var no = $(this).attr("no");
  $.ajax({
    url : "<?php echo base_url()?>index.php/Updatedata/update2judul",
    method : "POST",
    data : {no : no},
    async : false,
    dataType : 'json',
    success : function (data) {
        if (data.coba3 == "persen") {
        $(".checkboxtp2").attr('checked',false);
        }
        if (data.coba3 == "tanpapersen") {
        $(".checkboxtp2").attr('checked',true);
        }    
        if (data.totalsendiri !== 'none') {
    $(".checkboxtt2").attr('checked',true);
        $("#boxtotalsendiriupdate2").show();
        $("#boxtotalsendiriupdate2").val(data.totalsendiri);
        }else{
            $(".checkboxtt2").attr('checked',false);
        $("#boxtotalsendiriupdate2").hide();
        $("#boxtotalsendiriupdate2").val(null);

        }  
       var html = '<input class="form-control" type="text" name="" id="judulpeta2update" value="'+data.coba1+'">'; 
       $("#judulupdate2").html(html);
    }
  });
});
/* penanganan judul */
$("#updatemap_button").click(function () {
  var no = $(this).attr("no");

  $.ajax({
    url : "<?php echo base_url()?>index.php/Updatedata/update1judul",
    method : "POST",
    data : {no : no},
    async: false,
    dataType: 'json',
    success : function (data) {
        if (data.coba3 == "persen") {
        $(".checkboxtp1").attr('checked',false);
        }
        if (data.coba3 == "tanpapersen") {
        $(".checkboxtp1").attr('checked',true);
        }
        if (data.totalsendiri !== 'none') {
    $(".checkboxtt").attr('checked',true);
        $("#boxtotalsendiriupdate1").show();
        $("#boxtotalsendiriupdate1").val(data.totalsendiri);
        }else{
            $(".checkboxtt").attr('checked',false);
        $("#boxtotalsendiriupdate1").hide();
        $("#boxtotalsendiriupdate1").val(null);

        }
       var html = '<input  class="form-control" type="text" name="" id="judulpeta1update" value="'+data.coba1+'">'; 
       $("#judulupdate1").html(html);

    }
  });
});


 /* create maps btn 1-2-3 */
  $("#tambah_button_data3").click(function () {
  $("#loaderoverlay").trigger('click');
  var boxtots = $("#boxtotalsendiritambah3").val();
  var no = $("#tambah_button_data3").attr("no");
  var judulpeta3 = $("#judulpeta3").val();
  if ($(".checkbox3tp").is(':checked')) {
  var cbtp = "tanpapersen";
  }else{var cbtp = "persen" ; }

   var che = [];
   var i = 0;
                 <?php foreach ($indikator->result() as $key ) :  ?>

    che[i] = $("#<?php echo str_replace(' ', '', $key->kabkot)."crt3" ?>").val();
    i = 1 + i;
                    <?php endforeach; ?>
    $.ajax({
      url : "<?php echo base_url()?>index.php/Tambahdata/creates3",
      method : "POST",
      data : {che : che, judul : judulpeta3, no : no, cbtp : cbtp, bxt :boxtots },
      success : function (data) {
         $("#closeoverlay").trigger('click');
        alert("berhasil input data");
      },
        error : function (xhr , ajaxOptions ,thrownError) {
        $(".toastrDefaultError").click();
        alert("error");

    }
    });

 });
 $("#tambah_button_data2").click(function () {
  $("#loaderoverlay").trigger('click');
  var boxtots = $("#boxtotalsendiritambah2").val();
  var no = $("#tambah_button_data2").attr("no");
  var judulpeta2 = $("#judulpeta2").val();
  if ($(".checkbox2tp").is(':checked')) {
  var cbtp = "tanpapersen";
  }else{var cbtp = "persen" ; }

   var che = [];
   var i = 0;
                 <?php foreach ($indikator->result() as $key ) :  ?>

    che[i] = $("#<?php echo str_replace(' ', '', $key->kabkot)."crt2" ?>").val();
    i = 1 + i;
    
                    <?php endforeach; ?>
    $.ajax({
      url : "<?php echo base_url()?>index.php/Tambahdata/creates2",
      method : "POST",
      data : {che : che, judul : judulpeta2, no : no , cbtp : cbtp, bxt : boxtots},
      success : function (data) {
         $("#closeoverlay").trigger('click');

        alert("berhasil input data");
      },
        error : function (xhr , ajaxOptions ,thrownError) {
        $(".toastrDefaultError").click();
        alert("error");

    }
    });

 });
 $("#tambah_button_data1").click(function () {
  $("#loaderoverlay").trigger('click');
  var boxtots = $("#boxtotalsendiritambah1").val();
  var no = $("#tambah_button_data1").attr("no");
  var judulpeta1 = $("#judulpeta1").val();
  if ($(".checkboxtp").is(':checked')) {
    var cbtp = "tanpapersen"
  }else{var cbtp = "persen" ; }

   var che = [];
   var i = 0;
                 <?php foreach ($indikator->result() as $key ) :  ?>

    che[i] = $("#<?php echo str_replace(' ', '', $key->kabkot)."crt1" ?>").val();
    i = 1 + i;
                 <?php endforeach; ?>
    $.ajax({
      url : "<?php echo base_url()?>index.php/Tambahdata/creates1",
      method : "POST",
      data : {che : che, judul : judulpeta1, no : no , cbtp : cbtp, bxt : boxtots},
      success : function (data) {
            $("#closeoverlay").trigger('click');
             $(".toastrDefaultSuccess").click();

      },
        error : function (xhr , ajaxOptions ,thrownError) {
        $(".toastrDefaultError").click();

    }
    });

 });
     $("#create3btn_button").click(function () {
      $("#loaderoverlay").trigger('click');

      var no = $(this).attr("no");
      $.ajax({
        url : "<?php echo base_url()?>index.php/Tambahdata/create3",
        method : "POST",
        data :  {no : no},
        success : function (data) {
         $("#modalcreatedata3").trigger('click'); 
            $("#closeoverlay").trigger('click');

         $("#dis3btn").trigger('click');
          $("#tambah_button_data3").attr("no", no);
          $("#modal-peta").modal(); 
        },
        error : function (xhr , ajaxOptions ,thrownError) {
         $(".toastrDefaultError").click();
         alert("error");
        }
      });
    });
    $("#create2btn_button").click(function () {
      $("#loaderoverlay").trigger('click');

      var no = $(this).attr("no");
      $.ajax({
        url : "<?php echo base_url()?>index.php/Tambahdata/create2",
        method : "POST",
        data :  {no : no},
        success : function (data) {
            $("#closeoverlay").trigger('click');
         $("#modalcreatedata2").trigger('click'); 
         $("#dis2btn").trigger('click');
          $("#tambah_button_data2").attr("no", no);
         $("#modal-peta").modal();
        },
        error : function (xhr , ajaxOptions ,thrownError) {
         $(".toastrDefaultError").click();
         alert("error");
        }
      });
    });

    $("#create1btn_button").click(function () {
      $("#loaderoverlay").trigger('click');

      var no = $(this).attr("no");
      $.ajax({
        url : "<?php echo base_url()?>index.php/Tambahdata/create1",
        method : "POST",
        data : {no : no},
        success : function (data) {
                $("#closeoverlay").trigger('click');

          if (data == 'yes') {
                  $("#modalcreatedata").trigger('click'); 
      $("#dis1btn").trigger('click');
      $("#tambah_button_data1").attr("no", no);
      $("#modal-peta").modal();
          }

        },
            error : function (xhr , ajaxOptions ,thrownError) {
         $(".toastrDefaultError").click();
    }
      });
      

    });
/* hapus indikator 1-2-3*/
$("#hapus3btn_button").click(function () {
  $("#loaderoverlay").trigger('click');
  var no = $(this).attr("no");
  if (no != 0) {
  $.ajax({
    url : "<?php echo base_url()?>index.php/Editindikator1/hapus3",
    method : "POST",
    data : {nonya : no},
    success : function (data) {
         $("#closeoverlay").trigger('click');

      location.reload();
         $(".toastrDefaultSuccess").click();
    },
    error : function (xhr , ajaxOptions ,thrownError) {
         $(".toastrDefaultError").click();

    }
  });
}
});
$("#hapus2btn_button").click(function () {
  $("#loaderoverlay").trigger('click');
  var no = $(this).attr("no");
  if (no != 0) {
  $.ajax({
    url : "<?php echo base_url()?>index.php/Editindikator1/hapus2",
    method : "POST",
    data : {nonya : no},
    success : function (data) {
      location.reload();
         $("#closeoverlay").trigger('click');
         $(".toastrDefaultSuccess").click();
    },
    error : function (xhr , ajaxOptions ,thrownError) {
         $(".toastrDefaultError").click();

    }
  });
}
});
$("#hapus1btn_button").click(function () {
  $("#loaderoverlay").trigger('click');
  var no = $(this).attr("no");
  if (no != 0) {
  $.ajax({
    url : "<?php echo base_url()?>index.php/Editindikator1/hapus",
    method : "POST",
    data : {nonya : no},
    success : function (data) {
      location.reload();
         $("#closeoverlay").trigger('click');
         $(".toastrDefaultSuccess").click();
    },
    error : function (xhr , ajaxOptions ,thrownError) {
         $(".toastrDefaultError").click();

    }
  });
}
});

/* edit indikator 1-2 */
$("#edit3btn_button").click(function () {
        var indikatoredit = $("#editindikator3btntext").val();
       var indikatorasli = $("#editindikator3btntext2").val();

       if (indikatoredit != '' && indikatorasli != null) {
       $.ajax({
          url : "<?php echo base_url()?>index.php/Editindikator1/editindikator3",
          method : "POST",
          data : {indedit : indikatoredit, indasli : indikatorasli},
          success : function (data) {
                          var x = null;
        $("#editindikator3btntext").val(x);
         $(".toastrDefaultSuccess").click();

          }
       });
     }else{
                       $(".toastrDefaultError").click();

     }
});
$(".edit3btnindikator").change(function () {
  var nama = $(this).val();
        $(".editindikator3btntext").show();
        $("#editindikator3btntext").val(nama);
        $("#editindikator3btntext2").val(nama);
});
$("#edit2btn_button").click(function () {
        var indikatoredit = $("#editindikator2btntext").val();
       var indikatorasli = $("#editindikator2btntext2").val();

       if (indikatoredit != '' && indikatorasli != null) {
       $.ajax({
          url : "<?php echo base_url()?>index.php/Editindikator1/editindikator2",
          method : "POST",
          data : {indedit : indikatoredit, indasli : indikatorasli},
          success : function (data) {
                          var x = null;
        $("#editindikator2btntext").val(x);
         $(".toastrDefaultSuccess").click();

          }
       });
     }else{
                       $(".toastrDefaultError").click();

     }
});
$(".edit2btnindikator").change(function () {
  var nama = $(this).val();
        $(".editindikator2btntext").show();
        $("#editindikator2btntext").val(nama);
        $("#editindikator2btntext2").val(nama);
});
$("#edit1btn_button").click(function () {
       var indikatoredit = $("#editindikator1btntext").val();
       var indikatorasli = $("#editindikator1btntext2").val();

       if (indikatoredit != '' && indikatorasli != null) {
       $.ajax({
          url : "<?php echo base_url()?>index.php/Editindikator1/editindikator",
          method : "POST",
          data : {indedit : indikatoredit, indasli : indikatorasli},
          success : function (data) {
                          var x = null;
        $("#editindikator1btntext").val(x);
         $(".toastrDefaultSuccess").click();

          }
       });
     }else{
                       $(".toastrDefaultError").click();

     }
});
$(".edit1btnindikator").change(function () {
  var nama = $(this).val();
        $(".editindikator1btntext").show();
        $("#editindikator1btntext").val(nama);
        $("#editindikator1btntext2").val(nama);
});

/* tambah indikator 1-2-3 */
$("#tambah3btn_button").click(function () {
    var indikatorbaru = $("#tambah3btnindikator").val();
    var nomenu = $(this).attr("no");
    if (indikatorbaru != '' && indikatorbaru != null) {
    $.ajax({
      url : "<?php echo base_url()?>index.php/Editindikator1/tambahindikator3",
      method : "POST",
      data : {parentno : nomenu , indikator : indikatorbaru },
      success : function (data) {
                      var x = null;
              $("#tambah3btnindikator").val(x);
                       $(".toastrDefaultSuccess").click();
      }
    });
  }else{
                       $(".toastrDefaultError").click();

     }
});
$("#tambah2btn_button").click(function () {
    var indikatorbaru = $("#tambah2btnindikator").val();
    var nomenu = $(this).attr("no");
    if (indikatorbaru != '' && indikatorbaru != null) {
    $.ajax({
      url : "<?php echo base_url()?>index.php/Editindikator1/tambahindikator2",
      method : "POST",
      data : {parentno : nomenu , indikator : indikatorbaru },
      success : function (data) {
                      var x = null;
              $("#tambah2btnindikator").val(x);
                       $(".toastrDefaultSuccess").click();
      }
    });
  }else{
                       $(".toastrDefaultError").click();

     }
});
$("#tambah1btn_button").click(function () {
    var indikatorbaru = $("#tambah1btnindikator").val();
    var nomenu = $(this).attr("no");
    if (indikatorbaru != '' && indikatorbaru != null) {
    $.ajax({
      url : "<?php echo base_url()?>index.php/Editindikator1/tambahindikator",
      method : "POST",
      data : {parentno : nomenu , indikator : indikatorbaru },
      success : function (data) {
                      var x = null;
              $("#tambah1btnindikator").val(x);
                       $(".toastrDefaultSuccess").click();
      }
    });
  }else{
                       $(".toastrDefaultError").click();

     }
});


 /* tombol edit indikator menu */
     $(".editindikator").change(function () {
        var nama = $(this).val();
        $(".editindikatortext").show();
        $("#editindikatortext").val(nama);
        $("#editindikatortext2").val(nama);

     });
     $("#edit_button").click(function () {
       var indikatoredit = $("#editindikatortext").val();
       var indikatorasli = $("#editindikatortext2").val();
       if (indikatoredit != '' && indikatorasli != "null") {
       $.ajax({
          url : "<?php echo base_url()?>index.php/Editindikatormenu/editindikator",
          method : "POST",
          data : {indedit : indikatoredit, indasli : indikatorasli},
          success : function (data) {
                          var x = null;
        $("#editindikatortext").val(x);
         $(".toastrDefaultSuccess").click();

          }
       });
     }else{
                       $(".toastrDefaultError").click();

     }
    

     });

/*tombol tambah indikator menu */
    $("#tambah_button").click(function () {
      var indikatorbaru = $("#tambahindikator").val();
      $("#loaderoverlay").trigger('click');
      if (indikatorbaru != '' && indikatorbaru != null) {
      $.ajax({
        url : "<?php echo base_url()?>index.php/Editindikatormenu/tambahindikator",
        method : "POST",
        data : {indikatormenu : indikatorbaru},
        success : function (data) {
          $("#closeoverlay").trigger('click');
              var x = null;
              $("#tambahindikator").val(x);
              $(".toastrDefaultSuccess").click();

        }
      });
    }else{
                       $(".toastrDefaultError").click();

     }
    });
    $("#done_button,#done_button1,#done_button2,#done_button1btn").click(function () {
      location.reload();
    });

    /* Hapus Indikator BTN */
    $(".hapus_button").click(function () {
         $("#loaderoverlay").trigger('click');

        var hapus = $(this).attr("id");
        var name = $(this).attr("name");
        
        $('input#'+name+'').hide().attr("name");

       
        $(this).hide().attr("id");
        $.ajax({
          url : "<?php echo base_url()?>index.php/Editindikatormenu/hapus",
          method : "POST",
          data : {hapusindikator : hapus},
          success : function (data) {
               $("#closeoverlay").trigger('click');

                 $(".toastrDefaultSuccess").click();

          }
        });
    });
    /* Login */

    $("#login_button").click(function () {
    var usernamee = $("#username").val();
    var passwordd = $("#password").val();
    if (usernamee != '' && passwordd != '' ) {
      $.ajax({
        url : "<?php echo base_url()?>index.php/login/action",
        method : "POST",
        data : {username : usernamee , password : passwordd},
        success : function (data) {
       
          if (data == 'no') {
            $(".swalDefaultError").click();
          }
          if (data == 'hm') {
          $(".swalDefaultWarning").click();
          }
          if (data == 'yes') {
         $(".swalDefaultSuccess").click();
         location.reload();

          }
        }
      });
    }else{
         $(".swalDefaultQuestion").click();

    }   
    });


    /* /login */

    /*logout*/
    $(".logout").click(function () {
      $.ajax({
        url : "<?php echo base_url()?>index.php/login/logout",
        success : function () {
          location.reload();
        }
      });
    })


          $("html,body").animate({scrollTop: $("body").offset().top},500);

      $("#loading").hide();
      $("#loading2").hide();
      $("#loading4").hide();
            '<?php if (!isset($_SESSION['otentikasi'])) { ?>'  
      $(".editing1").hide();
      $(".editing2").hide();
      $(".editing3").hide();

         '<?php }   ?>'





    
/* Indikator Utamnya */
    $('li.indikatormenu').click(function () {
      $("#bcutama").hide( "fold", {horizFirst: true }, 2000 );
      $("#akun").hide();
      $("#leaderboard").show();
                                            '<?php if (isset($_SESSION['otentikasi'])) { ?>'  
      $("#updatemap_button").hide();
      $("#tambahmap_button").hide();
      $("#tambah2map_button").hide();
      $("#update2map_button").hide();
      $("#tambah3map_button").hide();
      $("#update3map_button").hide();
         $("#switch").hide();       
                                            '<?php } ?>'

                                                            $("div.hideindis").slideDown("slow");
                                                            $(".subsubkategori").hide();
                                                            $(".subsubsubkategori").hide();
      $(".editing2").hide();
      $(".editing3").hide();

                                                            $("#loading").show();
                                                        
                                                          var id = $(this).attr("id");
                                                          var menu = $(this).attr("menu");
                                                          $(".tambah1btn").attr("no",id);
                                                          $("span.judulindikatormenu").html(menu);

                                                                    $("li").removeClass("active");

                                                            $("li[id="+id+"]").addClass("active");



                                                          $.ajax({
                                                            url: "<?php echo base_url(); ?>index.php/Welcome/get_subget2",
                                                            method: "POST",
                                                            data: {id:id},
                                                            async: false,
                                                            dataType: 'json',
                                                            success: function (data) {
                                                                    $("#loading").hide();
                                                                  var html = '<option disabled="true" selected="true"> Pilih Indikator </option>';
                                                                  var edit1btn =  '<option disabled="true" selected="true"> Pilih Indikator </option>';
                                                                  var i;
                                                                  for ( i = 0; i < data.length; i++) {
                                                                    html += '<option value="'+data[i].no+'">'+data[i].indikator+'</option>';
                                                                    edit1btn += '<option value="'+data[i].indikator+'">'+data[i].indikator+'</option>';
                                                                  
                                                                     
                                                                  }
                                 
                                                                  $('.subkategori').html(html).show();
                                                                  $('.edit1btnindikator').html(edit1btn);

                                                            }
                                                          });
    });

/* Indikator PErtama */
    $(".subkategori").change(function () {
      $("#tambah2map_button").hide();
      $("#update2map_button").hide();
      $("#tambah3map_button").hide();
      $("#update3map_button").hide();
      $(".editing3").hide();

      $(".subsubsubkategori").hide();


                                      $("#loading2").show();
                                    var no = $(this).val();
                                                          $(".tambah2btn").attr("no",no);
                          '<?php if (!isset($_SESSION['otentikasi'])) { ?>'  
                                    $.ajax({
                                        url : "<?php echo base_url()?>index.php/Check/subkategori",
                                        method : "POST",
                                        data : {no : no},
                                        success : function (data) {
               
                                          if (data == 'x') {
                                      $(".subsubkategori").hide();
                                      $("#switch").show();

                                          }
                                          if (data == 'y') {

                                      $(".subsubkategori").show();
                                           
                                          }
                                          if (data == 'z') {
                                      $(".subsubkategori").hide();   

                                          }
                                        }
                    
                                    });
                                  '<?php } ?>'  

                        '<?php if (isset($_SESSION['otentikasi'])) { ?>'  
                                    $.ajax({
                                        url : "<?php echo base_url()?>index.php/Check/subkategori",
                                        method : "POST",
                                        data : {no : no},
                                        success : function (data) {
               
                                          if (data == 'x') {
                                      $(".editing2").hide();
                                      $(".subsubkategori").hide();
                                      $("#tambahmap_button").hide();
                                      $("#updatemap_button").show();
                                      $("#update_button_data1").attr("no",no);
                                      $("#updatemap_button").attr("no", no); 
                                      $("#switch").show();

                                          }
                                          if (data == 'y') {
                                            $(".editing2").show();

                                             $("#updatemap_button").hide();
                                      $(".subsubkategori").show();

                                            $("#tambahmap_button").hide();
                                                                             $("#switch").hide();
                                           
                                          }
                                          if (data == 'z') {
                                            $(".editing2").show();
                                      $(".subsubkategori").hide();

                                            $("#tambahmap_button").show();
                                            $("#updatemap_button").hide();
                                            $("#create1btn_button").attr("no",no);



                                                                             $("#switch").hide();

                                          }
                                        }
                    
                                    });
                                  '<?php } ?>'  

                                    $("#hapus1btn_button").attr("no",no)
                                            $.ajax({
                                                url : "<?php echo base_url() ?>index.php/Welcome/get_subget3",
                                                method : "POST",
                                                data : {no : no},
                                                async : false,
                                                dataType: 'json',
                                                success : function (data) {

                                                  if (Array.isArray(data)) {


                                                  $("#loading2").hide();
                                                  var edit2btn ='<option disabled="true" selected="true"> Pilih Indikator </option>';
                                                  var htmll = '<option disabled="true" selected="true"> Pilih Indikator </option>';
                                                  var j;
                                                  for (j = 0; j < data.length; j++) {
                                                    htmll += '<option value="'+data[j].idsubindikator+'">'+data[j].subindikatorlist+'</option>';
                                                    edit2btn += '<option value="'+data[j].subindikatorlist+'">'+data[j].subindikatorlist+'</option>';
                                                  }
                                                  $('.subsubkategori').html(htmll);
                                                  $('.edit2btnindikator').html(edit2btn);


                                                  

                                                  }
                             


                                                },
                                                error : function (xhr , ajaxOptions ,thrownError) {


                                                }
                         
                                            });
    });


    $(".subsubkategori").change(function () {
            $("#tambah3map_button").hide();
      $("#update3map_button").hide();
                                $(".subsubsubkategori").hide();
                                $("#loading4").show();


          var idsubindikator = $(this).val();
          $("#hapus2btn_button").attr("no",idsubindikator)
          $(".tambah3btn").attr("no",idsubindikator);
          $("#create2btn_button").attr("no",idsubindikator);
          $("#update2map_button").attr("no", idsubindikator);
          $("#update_button_data2").attr("no",idsubindikator);


                        '<?php if (!isset($_SESSION['otentikasi'])) { ?>'  
                                    $.ajax({
                                        url : "<?php echo base_url()?>index.php/Check/subsubkategori",
                                        method : "POST",
                                        data : {no : idsubindikator},
                                        success : function (data) {
                                          if (data == 'x') {
                                          $(".subsubsubkategori").hide();    
                                          $("#switch").show();

                                          }
                                          if (data == 'y') {
                                          $(".subsubsubkategori").show();    
  
                                           
                                          }
                                          if (data == 'z') {
                                          $(".subsubsubkategori").hide();    

                                          }
                                        }
                                    });
                                  '<?php } ?>' 
                        '<?php if (isset($_SESSION['otentikasi'])) { ?>'  
                                    $.ajax({
                                        url : "<?php echo base_url()?>index.php/Check/subsubkategori",
                                        method : "POST",
                                        data : {no : idsubindikator},
                                        success : function (data) {
                                           if (data == 'x') {
                                            $(".editing3").hide();
                                            $(".subsubsubkategori").hide();    
                                            $("#tambah2map_button").hide();
                                            $("#update2map_button").show();
                                            $("#switch").show();

                                          }
                                          if (data == 'y') {
                                            $(".editing3").show();
                                            $("#update2map_button").hide();
                                            $(".subsubsubkategori").show();    
                                            $("#tambah2map_button").hide();
                                            $("#switch").hide();
                                           
                                          }

                                          if (data == 'z') {
                                            $(".editing3").show();
                                            $(".subsubsubkategori").hide();    
                                            $("#tambah2map_button").show();
                                            $("#update2map_button").hide();
                                            $("#tambah2map_button").attr("no",idsubindikator);
                                            $("#switch").hide();

                                          }
                                        }
                                    });
                                  '<?php } ?>'  

                                            $.ajax({
                                                url : "<?php echo base_url() ?>index.php/Welcome/get_subget4",
                                                method : "POST",
                                                data : {no : idsubindikator},
                                                async : false,
                                                dataType: 'json',
                                                success : function (data) {

                                                  if (Array.isArray(data)) {

                                                  $("#loading4").hide();
                                                  var edit3btn = '<option disabled="true" selected="true"> Pilih Indikator </option>';
                                                  var htmll = '<option  disabled="true" selected="true"> Pilih Indikator</option>';
                                                  var j;
                                                  for (j = 0; j < data.length; j++) {
                                                    htmll += '<option value="'+data[j].nosubsubindikator+'">'+data[j].subsubindikatorlist+'</option>';
                                                    edit3btn += '<option value="'+data[j].subsubindikatorlist+'">'+data[j].subsubindikatorlist+'</option>';
                                                  }
                                                  $('.subsubsubkategori').html(htmll);
                                                  $('.edit3btnindikator').html(edit3btn);
                                                }
  
                                                 


                                                }              
                                            });

    });


  

    $(".subkategori").change(function () {
       var subkategori = $(this).val();
      $("#switch").load("<?php echo base_url() ?>index.php/Welcome/maps", {"names" : subkategori} );

                    $(document).ajaxStart(function(){
                       $("#loading3").addClass("bigloader");

            });
            /* Gets called when request complete */
            $(document).ajaxComplete(function(event,request,set){
                     $("#loading3").removeClass("bigloader");


            });



     });

    $(".subsubkategori").change(function () {
      
      var subsubkategori = $(this).val();
      $("#switch").load("<?php echo base_url() ?>index.php/Welcome/map", {"name" : subsubkategori} );
            $(document).ajaxStart(function(){
                       $("#loading3").addClass("bigloader");

            });
        
            /* Gets called when request complete */
            $(document).ajaxComplete(function(event,request,set){
                     $("#loading3").removeClass("bigloader");

            });


    });




    $(".subsubsubkategori").change(function () {
      
      var nosubsubindikator = $(this).val();
          $("#hapus3btn_button").attr("no",nosubsubindikator);
          $("#create3btn_button").attr("no",nosubsubindikator);
           $("#update_button_data3").attr("no",nosubsubindikator);
          $("#update3map_button").attr("no", nosubsubindikator);




       '<?php if (isset($_SESSION['otentikasi'])) { ?>'  
                                    $.ajax({
                                        url : "<?php echo base_url()?>index.php/Check/subsubsubkategori",
                                        method : "POST",
                                        data : {no : nosubsubindikator},
                                        success : function (data) {
                                          if (data == 'x') {
                                                  $("#tambah3map_button").show();
                                                  $("#update3map_button").hide();
                                                  $("#switch").hide();
                                          }

                                          if (data == 'y') {

                                            $("#tambah3map_button").hide();
                                            $("#update3map_button").show();
                                            /* mas plis lah */  

                                          }
                                        }
                                    });
                                  '<?php } ?>'  



      $("#switch").load("<?php echo base_url() ?>index.php/Welcome/mapss", {"no" : nosubsubindikator} );
            $(document).ajaxStart(function(){
                       $("#loading3").addClass("bigloader");

            });
        
            /* Gets called when request complete */
            $(document).ajaxComplete(function(event,request,set){
                     $("#loading3").removeClass("bigloader");

            });
                                 $("#switch").show();


    });



    $("nav.omaewa").mouseenter(function () {
      $(this).css("box-shadow","0 0 5px black");
    });
    $("nav.omaewa").mouseleave(function () {
      $(this).css("box-shadow","0 0 0 white");
    });
    
    $("#kelolaakun").click(function () {
      $("#switch").hide();
      $("#bcutama").hide( "fold", {horizFirst: true }, 2000 );
      $(".hideindis").hide();
      $("#akun").load("<?php echo base_url() ?>index.php/Login/kelolaakun");
      $("#akun").show();
       $("#leaderboard").show();
    });
   

  
  });


  </script>

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>aset/lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>aset/lte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>aset/lte/dist/js/demo.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>aset/lte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);

</script>
<!-- Bootstrap 4 -->
<!-- ChartJS -->
<script src="<?php echo base_url() ?>aset/lte/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>aset/lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script src="<?php echo base_url() ?>aset/lte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<!-- JQVMap -->
<script src="<?php echo base_url() ?>aset/lte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url() ?>aset/lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>aset/lte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>aset/lte/plugins/moment/moment.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() ?>aset/lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url() ?>aset/lte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() ?>aset/lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>aset/lte/dist/js/pages/dashboard.js"></script>
<script src="<?php echo base_url() ?>aset/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>aset/lte/plugins/pace-progress/pace.min.js"></script>

<script src="<?php echo base_url() ?>aset/lte/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url() ?>aset/lte/plugins/toastr/toastr.min.js"></script>


<script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        type: 'success',
        title: 'Berhasil Log-in.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        type: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        type: 'error',
        title: 'Maaf. Password yang anda masukkan salah'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        type: 'warning',
        title: 'Username anda tidak terdaftar.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        type: 'question',
        title: 'Isi username dan password anda.'
      })
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Data berhasil tersimpan')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Gagal menyimpan data');
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

    $('.toastsDefaultFull').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        icon: 'fas fa-envelope fa-lg',
      })
    });
    $('.toastsDefaultFullImage').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        image: '../../dist/img/user3-128x128.jpg',
        imageAlt: 'User Picture',
      })
    });
    $('.toastsDefaultSuccess').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success', 
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Data berhasil tersimpan.'
      })
    });

  });

</script>
<!-- AdminLTE for demo purposes -->
</body>
</html>
