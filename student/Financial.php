<?php
include "../includes/config.php";
if (!($_SESSION['status'] == true)) {
    header('location: ../index.php');
}
$deptCode = $finder->loadDept($_SESSION['email']);
$part = $finder->loadPart($_SESSION['email']);
$user = $finder->findUser($_SESSION['email']);

$sql = "SELECT * FROM users where role_id = '1'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$feesrequired = $row['fees'];
$fees_amount = $user['fees'];

$balance = $fees_amount - $feesrequired;

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
        <a class="nav-link" href="student_dash.php">
          <i class="bx bxs-dashboard"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
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
      <li class="nav-item active">
        <a class="nav-link" href="#">
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
                  class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $user['firstname'] . " " . $user['lastname'] ?></span>
                <img class="img-profile rounded-circle" src="../assets/images/user.png">
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- Page Heading -->
          <center>
            <div class="danger" style="color: red">

            </div>
          </center>

          <div class="row">
            <div class="col-12">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Financial Statement</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <div class="dt-bootstrap4">
                      <div class="row">
                        <div class="col-sm-12 mt-3">
                          <div class="row">
                            <div class="col-sm-12">
                              <h5>Balance: <?php echo $balance ?></h5>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                            role="grid" aria-describedby="">
                            <thead>
                              <tr role="row">
                                <th>TxDate</th>
                                <th>Reference</th>
                                <th>Description</th>
                                <th>Debit</th>
                                <th>Credit</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr role="row">
                                <td>2020-03-17</td>
                                <td>87678</td>
                                <td>FEES</td>
                                <td>0</td>
                                <td>3,000</td>
                              </tr>
                              <tr role="row">
                                <td>2020-10-05</td>
                                <td>88744</td>
                                <td>POS-100543129430</td>
                                <td>0</td>
                                <td>10,000</td>
                              </tr>
                              <tr role="row">
                                <td>2020-05-10</td>
                                <td>INV0820</td>
                                <td>Registration Fee</td>
                                <td>547</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2020-05-10</td>
                                <td>INV0820</td>
                                <td>Examination Fee</td>
                                <td>1,640</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2020-05-10</td>
                                <td>INV0820</td>
                                <td>Sports Levy</td>
                                <td>1,093</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2020-05-10</td>
                                <td>INV0820</td>
                                <td>Computer Levy</td>
                                <td>2,187</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2020-05-10</td>
                                <td>INV0820</td>
                                <td>Zimche Levy</td>
                                <td>547</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2020-10-05</td>
                                <td>INV0820</td>
                                <td>Transport Levy</td>
                                <td>1,094</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2020-10-05</td>
                                <td>INV0820</td>
                                <td>Power Levy</td>
                                <td>1,094</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2020-10-05</td>
                                <td>INV0820</td>
                                <td>Laboratory Fee</td>
                                <td>1,913</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2020-10-05</td>
                                <td>INV0820</td>
                                <td>Development Levy</td>
                                <td>1,368</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2020-10-05</td>
                                <td>INV0820</td>
                                <td>Medical Fee</td>
                                <td>820</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2020-10-05</td>
                                <td>INV0820</td>
                                <td>Internship Fees</td>
                                <td>1,368</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2020-10-05</td>
                                <td>INV0820</td>
                                <td>Caution Fees</td>
                                <td>547</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2020-10-05</td>
                                <td>INV0820</td>
                                <td>Student ID Fees</td>
                                <td>547</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2020-10-05</td>
                                <td>INV0820</td>
                                <td>Tuition</td>
                                <td>4,000</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-02-17</td>
                                <td>DDP005318</td>
                                <td>Direct Deposit-TRF ZIPIT 07728999915 RAYMOND 5/2/21</td>
                                <td>0</td>
                                <td>5,770</td>
                              </tr>
                              <tr role="row">
                                <td>2021-04-30</td>
                                <td>RCT026405</td>
                                <td>POS</td>
                                <td>0</td>
                                <td>32,600</td>
                              </tr>
                              <tr role="row">
                                <td>2021-04-30</td>
                                <td>INV0221</td>
                                <td>Registration Levy</td>
                                <td>410</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-04-30</td>
                                <td>INV0221</td>
                                <td>Computer Levy</td>
                                <td>3,280</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-04-30</td>
                                <td>INV0221</td>
                                <td>Development Levy</td>
                                <td>1,230</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-04-30</td>
                                <td>INV0221</td>
                                <td>Examination Levy</td>
                                <td>2,460</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-04-30</td>
                                <td>INV0221</td>
                                <td>Internship Levy</td>
                                <td>1,640</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-04-30</td>
                                <td>INV0221</td>
                                <td>Laboratory Levy</td>
                                <td>1,230</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-04-30</td>
                                <td>INV0221</td>
                                <td>Medical Aid Levy</td>
                                <td>2,460</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-04-30</td>
                                <td>INV0221</td>
                                <td>Power Levy</td>
                                <td>1,230</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-04-30</td>
                                <td>INV0221</td>
                                <td>Sports Levy</td>
                                <td>1,230</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-04-30</td>
                                <td>INV0221</td>
                                <td>Transport Levy</td>
                                <td>1,394</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-04-30</td>
                                <td>INV0221</td>
                                <td>Tuition Fees</td>
                                <td>22,550</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-04-30</td>
                                <td>INV0221</td>
                                <td>Zimche Levy</td>
                                <td>410</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-06-01</td>
                                <td>RCT028512</td>
                                <td>POS-060156163839</td>
                                <td>0</td>
                                <td>10,148</td>
                              </tr>
                              <tr role="row">
                                <td>2021-10-21</td>
                                <td>RCT032373</td>
                                <td>POS-102168131127</td>
                                <td>0</td>
                                <td>20,000</td>
                              </tr>
                              <tr role="row">
                                <td>2021-10-25</td>
                                <td>RCT032807</td>
                                <td>POS 102568532039</td>
                                <td>0</td>
                                <td>8,400</td>
                              </tr>
                              <tr role="row">
                                <td>2021-10-25</td>
                                <td>INV0821</td>
                                <td>Caution Fees</td>
                                <td>1,640</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-10-25</td>
                                <td>INV0821</td>
                                <td>Computer Levy</td>
                                <td>3,280</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-10-25</td>
                                <td>INV0821</td>
                                <td>Development Levy</td>
                                <td>1,230</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-10-25</td>
                                <td>INV0821</td>
                                <td>Examination Levy</td>
                                <td>2,460</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-10-25</td>
                                <td>INV0821</td>
                                <td>Internship Levy</td>
                                <td>1,640</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-10-25</td>
                                <td>INV0821</td>
                                <td>Laboratory Levy</td>
                                <td>1,230</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-10-25</td>
                                <td>INV0821</td>
                                <td>Medical Aid Levy</td>
                                <td>2,460</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-10-25</td>
                                <td>INV0821</td>
                                <td>Power Levy</td>
                                <td>1,230</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-10-25</td>
                                <td>INV0821</td>
                                <td>Registration Levy</td>
                                <td>410</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-10-25</td>
                                <td>INV0821</td>
                                <td>Sports Levy</td>
                                <td>1,230</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-10-25</td>
                                <td>INV0821</td>
                                <td>Student ID Fees</td>
                                <td>984</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-10-25</td>
                                <td>INV0821</td>
                                <td>Transport Levy</td>
                                <td>1,394</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-10-25</td>
                                <td>INV0821</td>
                                <td>Zimche Levy</td>
                                <td>410</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-10-25</td>
                                <td>INV0821</td>
                                <td>Tuition Fees</td>
                                <td>22,550</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2021-10-25</td>
                                <td>INV0821</td>
                                <td>Late Registration Fees</td>
                                <td>472</td>
                                <td>0</td>
                              </tr>
                              <tr role="row">
                                <td>2022-01-05</td>
                                <td>RCT033878</td>
                                <td>POS 010575463124</td>
                                <td>0</td>
                                <td>11,000</td>
                              </tr>
                              <tr role="row">
                                <td>2022-02-18</td>
                                <td>RCT036245</td>
                                <td>POSFEES-135138,135205</td>
                                <td>0</td>
                                <td>22,000</td>
                              </tr>
                              <tr role="row">
                                <td>2022-02-18</td>
                                <td>RCT036246</td>
                                <td>POSFEES-021879214534</td>
                                <td>0</td>
                                <td>9,200</td>
                              </tr>
                              <tr role="row">
                                <td>2022-02-18</td>
                                <td>RCT036249</td>
                                <td>POSFEES-021879214897</td>
                                <td>0</td>
                                <td>2,000</td>
                              </tr>
                              <tr role="row">
                                <td>2022-02-22</td>
                                <td>RCT036406</td>
                                <td>POS 022279335350</td>
                                <td>0</td>
                                <td>9,200</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy;@ 2022</span>
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
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../assets/js/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assets/js/sb-admin-2.min.js"></script>
</body>

</html>