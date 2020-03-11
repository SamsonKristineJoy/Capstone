<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!--/ Logo -->
  <link rel="icon" type="image/png" href="img/logo.png">
  <title>CBSUA - OSAS Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
  <style type="text/css">
    .container {
      margin-top: 40px;
    }
    .btn-primary {
      width: 100%;
    }
  </style>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script> 
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

  <script type='text/javascript'>
    $( document ).ready(function() {
      $('#datetimepicker1').datetimepicker();
      $('#datetimepicker2').datetimepicker();
      $('#datetimepicker3').datetimepicker();
      // $('#datetimepicker4').datetimepicker();
    });
  </script>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    
    <a class="navbar-brand mr-1" href="dashboard.php">OSAS | CBSUA</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          
      </div>
    </form>

    <!-- Navbar -->
    <!-- Notification badge-->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
        </a>
       
      </li>


        <!-- Messages badge-->
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger"></span>
        </a>
        
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="set.php">Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php" data-toggle="logout" data-target="logout">Logout</a>

             
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
     

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Guidance and Counseling</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Counseling</h6>
          <a class="dropdown-item" href="guidancehome.php">Home</a>
          <a class="dropdown-item" href="appoint.php">Appointments</a>
          <a class="dropdown-item" href="#">Announcements</a>

        </div>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Equipment Reservation</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Reservation</h6>
          <a class="dropdown-item" href="#">Reserve Equipment</a>



        </div>
      </li>


    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
        </ol>

       <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
           <h4>Equipment Reservation</h4>
         </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                

                <tbody>
                   <form action="insertreserve.php" method="POST">
                      <div class="row">
                  
                         <div class='col-md-6'>
                            <div class="form-group">
                               <label class="control-label">Equipment Information</label>
                               <div class='input-group date'>

                               <label class="control-label">Preferred date</label>
                                  <input type='date' class="form-control" name="reserve_dt" value="Preferred date" / placeholder = "Preferred date">
                                  
                               </div>

                                <div class='input-group time'>

                               <label class="control-label">Start time</label>
                                  <input type='time' class="form-control" name="start_time" value="start_time" / placeholder = "start_time">
                                 
                               </div>

                               <label class="control-label">End time</label>
                                  <input type='time' class="form-control" name="end_time" value="end_time" / placeholder = "end_time">
                                 
                               </div>


                               <label class="control-label">Equipment Name</label>
                               <div class='input-group equipname'>
                                  <input type='text' class="form-control" name="equipname" value="" / placeholder = "Equipment Name">
                                 
                               </div>

                               <label class="control-label">Quantity</label>
                                <div class='input-group qty'>
                                  <input type='number' class="form-control" name="equipqty" value="" / placeholder = "Quantity">
                                  
                               </div>
                            </div>
                         </div>
                      </div>
                  <br><hr style="padding: 10px; margin: 0px"><br>

                     
                    
                       <label class="control-label">Borrowers Information</label><br>

                                <label class="control-label">Name</label>
                               <div class='input-group name'>
                                  <input type='text' class="form-control" name="name" value="" / placeholder = "Name">
                                 
                               </div>

                                <label class="control-label">Year</label>
                               <div class='input-group year'>
                                  <input type='text' class="form-control" name="year" value="" / placeholder = "Year">
                                 
                               </div>

                                <label class="control-label">Course Taken</label>
                               <div class='input-group course'>
                                  <input type='text' class="form-control" name="course" value="" / placeholder = "Course">
                                 
                               </div>


                            
                          <br>
                              <div class="row">
                                 <div class='col-md-12'>
                                    <div class="form-group">
                                       <input type="submit" style="background: #5fcf80; color: #fff; border-color: #5fcf80" class="btn btn-primary" value="SUBMIT">
                                    </div>
                                 </div>
                              </div>

                   </form>
                <br><br><br><br><br><br>

                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Office of Student Affairs and Services</div>
        </div>

      </div>
      <!-- /.container-fluid -->
        
    

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="indexbody.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
