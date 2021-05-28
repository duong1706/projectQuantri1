<?php 
session_start();
$_SESSION['lct'] = "0";
//unset($_SESSION['cart']);
// echo $_GET['url']; //////////// lấy đường dẫn về url = abc thif echo se in ra abc
require_once "./mvc/Bridge.php";
$myapp = new App();

?>