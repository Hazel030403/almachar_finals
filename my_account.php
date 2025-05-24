<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DCCP OSP | Admin Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-footer-fixed layout-fixed layout-navbar-fixed">
<div class="wrapper">
  
  <!-- Header -->
  <?php include 'includes/header.php' ?>
  <!-- /.header -->

  <!-- Main Sidebar Container -->
  <?php include 'includes/navbar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="img-circle img-fluid" src="img/1.jpg.jpg" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Hazel Almachar</h3>
                <p class="text-muted text-center">INFORMATION TECH. STUDENT</p>                

                <a href="#" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Personal</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Education</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Socials</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <strong><i class="fas fa-book mr-1"></i> Education</strong>

                        <p class="text-muted">
                          B.S. in Information Technology
                        </p>

                        <hr>
                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                        <p class="text-muted">La Paz, Abra</p>

                        <hr>
                        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                        <p class="text-muted">
                          <span class="tag tag-danger">UI Design</span>
                          <span class="tag tag-success">Coding</span>
                          <span class="tag tag-info">Javascript</span>
                          <span class="tag tag-warning">PHP</span>
                          <span class="tag tag-primary">Node.js</span>
                        </p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                        <p class="text-muted">Try and try until you die.</p>
                    </div>
                    <!-- /.post -->                                        
                  </div>

                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- Post -->
                    <div class="post">
                      <strong><i class="fas fa-book mr-1"></i> Education</strong>

                        <p class="text-muted">
                          B.S. in Information Technology
                        </p>

                        <hr>
                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                        <p class="text-muted">La Paz, Abra</p>

                        <hr>
                        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                        <p class="text-muted">
                          <span class="tag tag-danger">UI Design</span>
                          <span class="tag tag-success">Coding</span>
                          <span class="tag tag-info">Javascript</span>
                          <span class="tag tag-warning">PHP</span>
                          <span class="tag tag-primary">Node.js</span>
                        </p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                        <p class="text-muted">YOU KNOW WHO DID, GOD DID.</p>
                    </div>
                    <!-- /.post -->    
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <!-- Post -->
                    <div class="post">
                      <strong><i class="fab fa-facebook-square mr-1"></i> Facebook </strong>

                        <p class="text-muted">
                          Hazel Almachar
                        </p>

                        <hr>
                        <strong><i class="fab fa-twitter-square mr-1"></i> Twitter </strong>
                        <p class="text-muted">@Alma_chat</p>

                        <hr>
                        <strong><i class="fas fa-envelope-square mr-1"></i> Gmail </strong>

                        <p class="text-muted">hazelalmachar2@gmail.com</p>
                        <hr>

                        <strong><i class="fas fa-video mr-1"></i> Youtube</strong>

                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                    </div>
                    <!-- /.post -->    
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'includes/footer.php' ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php include 'includes/scripts.php' ?>
</body>
</html>

