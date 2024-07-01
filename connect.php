<?php
$dbsever = "103.221.220.62";
$dbusername = "bywbmjbd_bywbmjbd";
$dbpassword = "Z(p46LRmqBp03(";
$dbname = "bywbmjbd_nvbhport";

$conn = new mysqli($dbsever, $dbusername, $dbpassword, $dbname);
$conn -> set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
