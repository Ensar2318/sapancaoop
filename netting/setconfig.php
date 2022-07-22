<?php
$db = new crud();

// if (!isset($_SESSION['admins']) && isset($_COOKIE['admins'])) {
//     $data = json_decode($_COOKIE['admins']);
//     $username = $data->admins_username;
//     $pass = $data->admins_pass;
//     $db->adminsLogin($username,$pass,TRUE);
// }

if (!isset($_SESSION['admins'])) {
    header("location:login");
    exit;
}

$status = $db->isLogin($_SESSION['admins']['admins_username'], $_SESSION['admins']['admins_pass']);
if (!$status) {
    header("location:login");
    exit;
}
