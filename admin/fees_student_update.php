
<?php

include "../includes/config.php";

$part = $finder->loadPart($_SESSION['_email']);
$user = $finder->findUser($_SESSION['_email']);

$name = $user['user_id'];
$email = $user['email'];

if (isset($_POST['Enter'])) {
    $fees = $_POST['Amount'];
  if($fees < 0){
    echo "<script>alert('Invalid Amount Entered');</script>";
  }
  else{
    $sql = "UPDATE users SET fees = '$fees' WHERE user_id = '$name' OR email = '$email';";

    $result = $conn->query($sql);

    if ($result == true) {
        header("location: fees_update.php");
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
}
}
if (isset($_POST['Clear'])) {
    $fees = 0;
    $status = "not registered";
    $tec = 2;
    $sql = "UPDATE users Set fees = '$fees', reg_id = '$status', tec_id = '$tec' WHERE role_id = '2';";

    $result = $conn->query($sql);

    if ($result == true) {
        header("Location: clear_update.php");
    }
    else {  
        echo "Error:".$sql."<br>".$conn->error;}
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HIT Online Registration System</title>
    <link rel="shortcut icon" href="../assets/images/favicon.jpg" type="image/x-icon">
  <link rel="stylesheet" href="../assets/css/sb-admin-2.min.css">
     <!----===== Boxicons CSS ===== -->
     <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
<img src="https://www.hit.ac.zw/images/HIT_logo.png" height="60">
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="admin_dash.php">
        <i class="bx bxs-dashboard"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Charts -->
<li class="nav-item active">
    <a class="nav-link" href="#">
        <i class="fas fa-edit"></i>
        <span>Fees</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="reg_students.php">
        <i class="bx bx-file"></i>
        <span>Registered Students</span></a>
</li>

<hr class="sidebar-divider">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
    <a class="nav-link" href="../logout.php">
    <i style="font-size:20px;" class="bx bx-log-out-circle"></i>
    <span>Logout</span></a>
    </li>


<!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">admin</span>
                                <img class="img-profile rounded-circle"
                                    src="../assets/images/user.png">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="container">

                    <div class="col-md-6">
                        <form action="#" method="POST">
                                        <label for="regnum" class="form-label">Amount</label>
                                        <input type="text" name="Amount" class="form-control" required>
                                    </div>

                                    <div class="col-4">
                                        <button type="submit" name="Enter" class="btn btn-primary">Enter</button>
                                    </div>
                        </form>
<br>
                        <form action="#" method="post"> 
                            <div class="col-4">
                                <button type="submit" name="Clear" class="btn btn-primary">Clear Students</button>
                            </div>
                        </form>
        </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy;@ Harare Institute of Technology 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>