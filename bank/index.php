<?php
error_reporting(E_ERROR);
include "../includes/config.php";
$message = "";

if (isset($_POST['Submit'])) {
  $fees = $_POST['Amount'];
  $email = $_POST['Email'];

  $sqli = "SELECT * FROM users where email = '$email'";
  $res = $conn->query($sqli);
  $row = $res->fetch_assoc();
  $mail = $row['email'];
  $currentamount = $row['fees'];
  $newamount = 0;
  $newamount = $currentamount + $fees;
  if ($email != $mail) {
    echo "<script>alert('Invalid Email');</script>";
  } else {
    if ($fees <= 0 || $fees = "") {
      $message = "Invalid Amount";
      echo "<script>alert('Invalid Amount ');</script>";
    } else {
      $sql = "UPDATE users SET fees = '$newamount' WHERE  email = '$mail';";

      $result = $conn->query($sql);

      if ($result == true) {
        echo "<script>alert('Fees Paid Successfully');</script>";
      } else {
        echo "Error" . $sql . "<br>" . $conn->error;
      }
    }
    $conn->close();
  }
}

?>
<html>

<head>
  <meta charset="utf-8">
  <title>Bank</title>
  <link href="../assets/css/style2.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- Body of Form starts -->
  <div class="container">
    <form method="post" autocomplete="on">
      <!--First name-->
      <div class="box">
        <label for="firstName" class="fl fontLabel"> Email </label>
        <div class="new iconBox">
          <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        <div class="fr">
          <input type="text" name="Email" placeholder="Email" class="textBox" autofocus="on" required>
        </div>
        <div class="clr"></div>
      </div>
      <!--First name-->

      <div class="box">
        <label for="firstName" class="fl fontLabel"> Amount </label>
        <div class="new iconBox">
          <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        <div class="fr">
          <input type="text" name="Amount" placeholder="Amount" class="textBox" autofocus="on" required>
        </div>
        <div class="clr"></div>
      </div>



      <!---Submit Button------>
      <div class="box" style="background: #2d3e3f">
        <input type="Submit" name="Submit" class="submit" value="SUBMIT">
      </div>
      <!---Submit Button----->
    </form>
  </div>
  <!--Body of Form ends--->
</body>

</html>