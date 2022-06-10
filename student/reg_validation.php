<?php
include "../includes/config.php";
$part = $finder->loadPart($_SESSION['email']);
$user = $finder->findUser($_SESSION['email']);

$fees_amount = $user['fees'];
$reg_status = $user['reg_id'];
$dept = $user['dept_code'];
$tec = $user['tec_id'];
$part = $user['part'];

if ($reg_status != "registered") {
    header("location: before_registration.php ");
} else {
    if ($dept == "SRA" || $tec != "1" || $part == '4.2') {
        header("location: no_tec_courses.php");
    } else {
        header("location: selectcourses.php");
    }
}
