<?php

include_once "../controler/Player_controler.php";
include_once "../class/connect_db.php";
include_once "../class/player.php";
include_once "../controler/Boutique_controler.php";


$methodPlayer = new Player_controler();
$methodBoutique = new Boutique_controler();
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>