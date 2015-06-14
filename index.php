<?php
require_once "ControllerOrder.php";
$action = $_REQUEST['action'];
$controller = new ControllerOrder();

$controller->$action();