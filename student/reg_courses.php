<?php
include "../includes/config.php";
if (!($_SESSION['status'] == true)) {
    header('location: ../index.php');
}
$deptCode = $finder->loadDept($_SESSION['email']);
$part = $finder->loadPart($_SESSION['email']);
$user = $finder->findUser($_SESSION['email']);
$uniCode = $finder->loadUni($_SESSION['email']);
$schoolCode = $finder->loadSchool($_SESSION['email']);

$sqli = "SELECT * FROM levels WHERE `part` = '$part'";
$results = $conn->query($sqli);
$rows = $results->fetch_assoc();
$year = $rows['year'];
$semester = $rows['semester'];

$sqli = "SELECT * FROM departments WHERE `dept_code` = '$deptCode'";
$results = $conn->query($sqli);
$rows = $results->fetch_assoc();
$department = $rows['dept_name'];


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
      <li class="nav-item active">
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
                  class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $user['firstname'] . " " . $user['lastname'] ?></span>
                <img class="img-profile rounded-circle" src="../assets/images/user.png">
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="container">
          <h1 class="h3 mb-4 text-gray-800">Program: <?php echo $department; ?></h1>
          <h2 class="h4 mb-4 text-gray-800">Academic Year :  <?php echo $year; ?> </h2>
          <h2 class="h4 mb-4 text-gray-800">Semester : <?php echo $semester;?> </h2>
            <?php 
          echo '<div class="text-left">Registered Courses</div>';?>
            <table class="table table-striped table table-bordered">

              <head>
                <tr>
                  <th scope="col">Course Code</th>
                  <th scope="col">Course Name</th>
                  <th scope="col">Credits</th>
                </tr>
                </thread>
                <tbody>
                  <?php
                                    $sqli = "SELECT * FROM university_courses WHERE `uni_coursecode` != 'HIT2203' AND part = '$part'";
                                    $results = $conn->query($sqli);
                                    if ($results) {
                                        while ($rows = $results->fetch_assoc()) {
                                            $uni_Code = $rows['uni_coursecode'];
                                            $uni_courseName = $rows['uni_coursename'];
                                            $uni_credits = $rows['credits']; 
                                            echo '<tr>
     <td scope="row">' . $uni_Code . '</td>
     <td>' . $uni_courseName . '</td>
     <td> ' . $uni_credits . '</td>
        </tr>';
                                        }
                                    }
                                    ?>
                  <?php
                                    $school = $user['school_id'];
                                    $level = $user['part'];
                                    if ($level == "2.2" && $school != "IST") {
                                        $sqli = "SELECT * FROM university_courses WHERE `uni_coursecode`= 'HIT2203'";
                                        $results = $conn->query($sqli);
                                        if ($results) {
                                            while ($rows = $results->fetch_assoc()) {
                                                $uni_Code = $rows['uni_coursecode'];
                                                $uni_courseName = $rows['uni_coursename'];
                                                $uni_credits = $rows['credits'];
                                                echo '<tr>
     <td scope="row">' . $uni_Code . '</td>
     <td>' . $uni_courseName . '</td>
     <td> ' . $uni_credits . '</td>
        </tr>';
                                            }
                                        }
                                    }
                                    ?>

                  <?php
                                    $sql = "SELECT * FROM courses WHERE `dept_code` = '$deptCode' AND part = '$part' ";
                                    $result = $conn->query($sql);
                                    if ($result) {
                                        while ($row = $result->fetch_assoc()) {
                                            $courseCode = $row['course_code'];
                                            $courseName = $row['course_name'];
                                            $credits = $row['credits'];
                                            echo '<tr>
     <td scope="row">' . $courseCode . '</td>
     <td>' . $courseName . '</td>
     <td> ' . $credits . '</td>
        </tr>';
                                        }
                                    }
                                    ?>

                  <?php
                                    $sql2 = "SELECT * FROM school_courses WHERE `school_id` = '$schoolCode' AND part = '$part' ";
                                    $res = $conn->query($sql2);
                                    if ($res) {
                                        while ($row2 = $res->fetch_assoc()) {
                                            $scourseCode = $row2['school_coursecode'];
                                            $scourseName = $row2['school_coursename'];
                                            $scredits = $row2['credits'];
                                            echo '<tr>
     <td scope="row">' . $scourseCode . '</td>
     <td>' . $scourseName . '</td>
     <td> ' . $scredits . '</td>
        </tr>';
                                        }
                                    }
                                    ?>



                </tbody>
            </table>
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
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>
</body>

</html>