<?php

include_once "../../class/connect_db.php";
include_once "../../controler/Mj_controler.php";
$methodGm = new Mj_controler();
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



?>