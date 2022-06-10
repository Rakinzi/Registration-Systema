<?php
include "../includes/config.php";
$part = $finder->loadPart($_SESSION['email']);
$user = $finder->findUser($_SESSION['email']);

$amount = $user['fees'];
$reg_status = $user['reg_id'];

$sql = "SELECT * FROM users where role_id = '1'";
$admin = $conn->query($sql);
$rows1 = $admin->fetch_assoc();
$fees = $rows1['fees'];

if ($reg_status != "registered") {
    if ($amount < $fees) {
        header("location: invalid.php ");
    } else {
        header("location: reg_panel.php ");
    }
} else {
    header("location: registered_message.php");
}