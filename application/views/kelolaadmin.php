     <div class="modal fade" id="modal-peta">
        <div class="modal-dialog modal-sm modal-dialog-centered">
          <div class="modal-content">
  
            <div class="modal-body text-center">
                <div class="fa fa-check fa-4x" style="color: green"></div>
    
                <div class="modal-title">Upload Image Successful</div>
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

          <div class="col-sm-12 card-primary card-outline card">
            <div class="card-header">
                <h1 class="text-center text-monospaces text-secondary">Admin Config</h1>
            </div>
          </div>
  

         
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo base_url()?>aset/admin.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $nama ?></h3>

                <p class="text-muted text-center">ADMIN</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
      
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab"> Profil </a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab"> Admin Baru </a></li>
                  <li class="nav-item"><a class="nav-link" href="#setelanweb" data-toggle="tab"> Setelan Web </a></li>
                 <li class="nav-item"><a class="nav-link" href="#feedback" data-toggle="tab"> Feedback </a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
             
            <div class=" active tab-pane" id="timeline">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="namauser" value="<?php echo $nama ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="usernameuser" value="<?php echo $username ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Tanggal Gabung</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" readonly="readonly" value="<?php echo $tgl ?>">
                        </div>
                      </div>
                       <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="passuser" value="<?php echo $pass ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div style="display: none;">
                          <input type="hidden" name="" id="iduser" value="<?php echo $iduser ?>">
                      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                  
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success" id="edituser">Edit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="namareg" maxlength="30" placeholder="Name" required="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="usernamereg" placeholder="Username" maxlength="30" required="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="Password" class="form-control" id="passwordreg" maxlength="15" placeholder="Password" required="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Re-Password</label>
                        <div class="col-sm-10">
                          <input type="Password" class="form-control" id="password2reg" maxlength="15" placeholder="Re-Password" required="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Optional Input"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Optional Input">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" id="submitreg" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                    <div class="tab-pane" id="feedback">

       <!-- /.col -->
        <div class="col-md-12">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Inbox</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Search Mail">
                  <div class="input-group-append">
                    <div class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">5 mins ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check2">
                        <label for="check2"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                    <td class="mailbox-date">28 mins ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <input type="checkbox" value="" id="check3">
                        <label for="check3"></label>
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                    <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                    <td class="mailbox-date">11 hours ago</td>
                  </tr>      
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
                     </div>
                  <div class="tab-pane" id="setelanweb">
                  
                      <h3><p class="text-center text-secondary">Gambar Utama Web</p></h3>
                      <hr>
                      <div class="form-group form-row">
                        <form  class="col-4 form-horizontal" >
                        
                        <label>Ganti Tampilan</label>
                            <select class = "custom-select form-control" id="selectgambar">
                                <option disabled="true" selected="true" value="null" class="text-center"> Pilih Tampilan </option>
                                <?php foreach ($gambarutamavar->result() as $keygambar) : ?>
                                 <option><?php echo $keygambar->judulp; ?></option>
                                <?php endforeach; ?>  
                            </select>
                        
                        </form>
                      </div>

                    <div class="form-row">
                      <form enctype="multipart/form-data" class="col-8 form-horizontal form-row" id="submitin"> 
                        <div class="col-6 form-group">
                          <label>Judul Gambar</label>
                          <input type="text" class="form-control  text-dark" placeholder="Judul" name="title">
                        </div>
                        <div class="col-6 form-group">
                          <label>Input Gambar</label>
                          <input type="file" class="form-control " name="filegambar">
                        </div>
                        <div class=" form-group col-12">
                            
                          <button type="submit" class="btn btn-success float-right"> Kirim </button>
                        </div>
                      </form>
                      <form class="form-horizontal col-4">
                        <div class="form-group ">
                          <label>Hapus Tampilan</label>
                            <select class = "custom-select form-control ">
                                <option disabled="true" selected="true" value="null" class="text-center"> Pilih Tampilan </option>
                                 <?php foreach ($gambarutamavar->result() as $keygambar) : ?>
                                 <option><?php echo $keygambar->judulp; ?></option>
                                <?php endforeach; ?>  

                            </select>
                        </div>
                      </form>
                    </div>
                      <hr>
                  
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
          <script type="text/javascript">

        $(document).ready(function () {

          $("#selectgambar").change(function () {
             var judul = $(this).val();

             $.ajax({
                url: "<?php echo base_url()?>index.php/Upload/updategambar",
                method: "POST",
                data:{judul : judul},
                success: function (data) {
                $("#modal-peta").modal(); 

                }
             });
          });
          $("#submitin").submit(function (e) {
            e.preventDefault();
            $.ajax({
              url: "<?php echo base_url()?>index.php/Upload/do_upload",
              type: "POST",
              data: new FormData(this),
              processData: false,
              contentType: false,
              cache: false,
              async: true,
              success: function (data) {
                          $("#modal-peta").modal(); 


              }
            });
          });


      $("#edituser").click(function () {
        var nama = $("#namauser").val();
        var username = $("#usernameuser").val();
        var pass = $("#passuser").val();
        var id = $("#iduser").val();
        $.ajax({
          url  : "<?php echo base_url()?>index.php/Login/Editakun",
          method : "POST",
          data : {nama : nama, username : username, pass : pass ,id : id},
          success : function (data) {

         $(".toastrDefaultSuccess").click();
         location.reload();
          }
        });
      })
      $("#submitreg").click(function () {
        var nama = $("#namareg").val();
        var username = $("#usernamereg").val();
        var pass = $("#passwordreg").val();
        var pass2 = $("#password2reg").val();


        $.ajax({
          url : "<?php echo base_url()?>index.php/Login/registerakun",
          method : "POST",
          data : {nama : nama, username : username , pass : pass, pass2 : pass2},
          dataType : 'json',
          async : false,
          success : function (data) {

            if ($.isEmptyObject(data.error)) {
         $(".toastrDefaultSuccess").click();
             
            }else{
           $(".toastrDefaultError").click();
            
            }

          },
          error : function (data) {

           $(".toastrDefaultError").click();
          }

        });
      })
        });
      </script>