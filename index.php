<?php
$_SESSION['status'] = false;
include 'includes/config.php';
$message = "";
if (isset($_POST['login'])) {

    $email = $_POST['username'];
    $pass = $_POST['password'];

    $stmt = $conn->prepare('SELECT * FROM users WHERE email = ? oR user_id = ?');
    $stmt->bind_param('ss', $email, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        if ($data['password'] == $pass) {
            if (!($data['role_id'] == 1)) {
                $_SESSION['status'] = true;
                $_SESSION['email'] = $email;
                header('location: student/student_dash.php');
            } else {
                $_SESSION['logged'] = true;
                $_SESSION['_email'] = $email;
                header('location: admin/admin_dash.php');
            }
        } elseif ($data['password'] != $pass || $data['email'] != $email || $data['_email'] != $email) {

            echo "<script>alert('Invalid Username or Password');</script>";
        } elseif ($data['']) {
        }
    } else {
        echo "<script>alert('Please fill all the details');</script>";
    }
}

?>

<!DOCTYPE html>

<html dir="ltr" lang="en" xml:lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <title>HIT Online Registration System</title>
  <link rel="shortcut icon" href="assets/images/favicon.jpg" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/sb-admin-2.min.css">
  <link rel="shortcut icon" href="Images/H2" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://elearning.hit.ac.zw/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" />
  <link rel="stylesheet" type="text/css"
    href="https://elearning.hit.ac.zw/theme/styles.php/boost/1646774857_1547301088/all" />
  </script>

  <meta name="robots" content="noindex" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body color="white" id="page-login-index"
  class="format-site  path-login dir-ltr lang-en yui-skin-sam yui3-skin-sam elearning-hit-ac-zw pagelayout-login course-1 context-1 notloggedin ">
  <div class="toast-wrapper mx-auto py-3 fixed-top" role="status" aria-live="polite"></div>

  <div id="page-wrapper">

    </script>
    <div color="white" id="page" class="container-fluid mt-0">
      <div color="white" id="page-content" class="row">
        <div color="white" id="region-main-box" class="col-12">
          <section id="region-main" class="col-12" aria-label="Content">
            <span class="notifications" id="user-notifications"></span>
            <div role="main"><span id="maincontent"></span>
              <div class="my-1 my-sm-5"></div>
              <div class="row justify-content-center">
                <div class="col-xl-6 col-sm-8 ">
                  <div color="white" class="card">
                    <div color="white" class="card-block">
                      <div class="text-center">
                        <h2 color=white><img src="assets/images/HIT_logo.png" class="image fluid "
                            alt="Responsive image">
                      </div>
                      <div class="card-body">
                        </h2>

                        <div class="row justify-content-md-center">
                          <div class="col-md-5">
                            <form class="mt-3" action="#" method="post" id="login" autocomplete="off">
                              <input id="anchor" type="hidden" name="anchor" value="">
                              <script>
                              document.getElementById('anchor').value = location.hash;
                              </script>
                              <input type="hidden" name="logintoken" value="SKwUrpwAoevip3K1sghj8HnKfcFDScfT">
                              <div class="form-group">
                                <label for="username" class="sr-only">
                                  Username
                                </label>
                                <input type="text" name="username" id="username" class="form-control" value=""
                                  placeholder="Username" autocomplete="username">
                              </div>
                              <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" id="password" value="" class="form-control"
                                  placeholder="Password" autocomplete="current-password">
                              </div>
                              <div class="rememberpass mt-3">
                                <input type="checkbox" name="rememberusername" id="rememberusername" value="1" />
                                <label for="rememberusername">Remember username</label>
                              </div>

                              <button type="submit" class="btn btn-primary btn-block mt-3" name="login"
                                id="loginbtn">Log in</button>
                            </form>
                          </div>

                          <div class="text-center">
                            <div class="forgetpass mt-3">
                              <p><a href="#">Forgot password?</a></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </section>
        </div>
      </div>
    </div>