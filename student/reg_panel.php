<?php
ini_set("display_errors","1") ;
error_reporting(E_ALL);
include "../includes/config.php";

$part = $finder->loadPart($_SESSION['email']);
$user = $finder->findUser($_SESSION['email']);
$deptCode = $finder->loadDept($_SESSION['email']);

$id = $user['user_id'];
if (isset($_POST['Register'])) {
  $TEC = $_POST['TEC'];
  $status = "registered";

  $sql = "UPDATE users SET  tec_id ='$TEC', reg_id ='$status' WHERE user_id= '$id';";

  $result = $conn->query($sql);

  if ($result) {
    header("location: registered.php");
  } else {
    echo "Error:" . $sql . "<br>" . $conn->error;
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HIT Online Registration System</title>
  <link rel="shortcut icon" href="../assets/images/favicon.jpg" type="image/x-icon">
  <link rel="stylesheet" href="../assets/css/sb-admin-2.min.css">
  <link rel="stylesheet" href="../assets/css/style3.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <img src="https://www.hit.ac.zw/images/HIT_logo.png" height="60">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="student_dash.php">
          <i class="bx bxs-dashboard"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Charts -->
      <li class="nav-item active">
        <a class="nav-link" href="fees_validate.php">
          <i class="fas fa-edit"></i>
          <span>Registration</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="reg_validation.php">
          <i class="bx bx-file"></i>
          <span>Registered Courses</span></a>
      </li>

      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="Financial.php">
          <i style="font-size:17px;" class="bx bxs-dollar-circle"></i>
          <span>Financial Statement</span></a>
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
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span
                  class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $user['firstname'] . " " . $user['lastname']; ?></span>
                <img class="img-profile rounded-circle" src="../assets/images/user.png">
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <div id="layoutSidenav_content">
          <main>
            <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
              <div class="container-xl px-4">
                <div class="page-header-content">
                  <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                      <h1 class="page-header-title">
                        <div class="page-header-icon"><i class="bx bxs-edit"></i></div>
                        Registration Panel 
                      </h1>
                    </div>
                  </div>
                </div>
              </div>
            </header>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-4">
              <!-- Account page navigation-->
              <nav class="nav nav-borders">
                <a class="nav-link active ms-0" href="#">Registration</a>
              </nav>
              <hr class="mt-0 mb-4" />
            </div>
          </main>
        </div>
      </div>
      <section class="py">
        <form action="#" method="POST">
          <div class="container px-lg">
            <div class="p-2 p-lg-2 bg-light rounded-2 ">
              <!-- <h2 class="display text-center p">Provisional Licensing Booking</h2> -->
              <div class="m-4 m-lg-3">


                <div class="col-md-6">
                  <label for="regnum" class="form-label">Level</label>
                  <select class="form-select" name="level">
                    <option disabled="disabled" selected="selected">Choose option</option>
                    <?php
                    $stmt = $conn->prepare("SELECT * FROM levels where part <> 'admin' ");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $cnt = 1;
                    while ($row = $result->fetch_object()) {

                    ?>
                    <option value="<?php echo $row->part; ?>">
                      <?php echo $row->part; ?>
                    </option>
                    <?php
                    } ?>
                  </select>

                </div>
                <div class="col-md-6">
                  <label for="regnum" class="form-label">Department</label>
                  <div class="form-control rs-select2 js-select-simple select--no-search">
                    <select style="width: 100%; border:none;" name="Dept">
                      <option disabled="disabled" selected="selected">Choose option</option>
                      <?php
                      $stmt = $conn->prepare("SELECT * FROM departments where dept_code <> 'ADM'");
                      $stmt->execute();
                      $result = $stmt->get_result();
                      $cnt = 1;
                      while ($row = $result->fetch_object()) {

                      ?>
                      <option value="<?php echo $row->dept_code; ?>">
                        <?php echo $row->dept_name . " " . "($row->dept_code)"; ?>
                      </option>
                      <?php
                      } ?>
                    </select>
                    <div class="select-dropdown"></div>

                  </div>
                </div>
                <?php echo "Do you want to register TEC Courses <br>"; ?>

                <div class="form-check">
                  <input type="radio" class="form-check-input" id="radio1" name="TEC" value="1" checked>Yes
                  <label class="form-check-label" for="radio1"></label>
                </div>
                <div class="form-check">
                  <input type="radio" class="form-check-input" id="radio2" name="TEC" value="2">No
                  <label class="form-check-label" for="radio2"></label>
                </div>
                <div class="col-4">
                  <button type="submit" name="Register" class="btn btn-primary">Register</button>
                </div>
        </form>
    </div>
  </div>
  </div>
  </section>

  <!-- End of Main Content -->

  <!-- Footer -->
  <br>
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright © Harare Institute of Technology 2022</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="https://portal.hit.ac.zw/student/results#page-top">
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
          <a class="btn btn-primary" href="https://portal.hit.ac.zw/student/auth/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Sell Coins Modal -->
  <div class="modal fade" id="auctionCoins" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Auction Your Coins?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="https://portal.hit.ac.zw/student/results#">
            <input class="form-control form-group" type="number" name="coins" required="">


          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-success" type="submit">Auction Your Coins</button>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->




  <!-- Core plugin JavaScript-->



  <!-- Custom scripts for all pages-->





  </div>
</body>

</html>