
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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

    


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
</head>
<body>

    <h2>REGISTRATION FORM</h2>

    <form action="reg_insert.php" method="post">

        <label>First Name: </label>
            <input type="text" name="fname" placeholder="First name here">
        <br> <br>

        <label>Last Name: </label>
            <input type="text" name="lname" placeholder="Last name here">
        <br> <br>

        <label>Gender: </label>
             <select name="gender">
                  <option value="MALE">MALE</option>
                  <option value="FEMALE">FEMALE</option>
            </select>
        <br> <br>

        <label>Address: </label>
             <input type="text" name="address" placeholder="Address">
        <br> <br>

        <label>CP number: </label>
            <input type="number" name="cp" placeholder="Number here">
        <br> <br>

        <button name="submit" type="submit">REGISTER</button> &nbsp;
        <button type="reset">RESET</button>

    </form> 

</body>
</html>