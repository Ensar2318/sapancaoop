<?php
require_once 'netting/clas.crud.php';
$db = new crud();

$post = [
    "admins_name" => "ensar",
    "admin_pass" => "1234",
    "file" => "testestoron"
];

echo implode(",",array_map(function($val){
    return $val."=?";
},$post));
echo "<br>";

// print_r($post);
