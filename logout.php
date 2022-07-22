<?php
session_start();
ob_start();

unset($_SESSION['admins']);
setcookie("admins", "", strtotime("-30 day", "/"));

header("location:login");
exit;
