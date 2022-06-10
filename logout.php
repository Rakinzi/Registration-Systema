<?php
session_start();
session_destroy();
unset($_SESSION['status']);
unset($_SESSION['email']);
unset($_SESSION['_email']);
unset($_SESSION['logged']);
header('location: index.php');