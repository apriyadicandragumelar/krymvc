<?php 

// memanggil session
if ( !session_id () ) session_start();

// memanggil file
 require_once '../app/init.php';

$app = new App;

