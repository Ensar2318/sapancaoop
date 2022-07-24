<?php 
require_once 'admin/netting/clas.crud.php';
$db = new crud();

$setting = $db->wRead("settings","settings_id",1)->fetch(PDO::FETCH_ASSOC);
