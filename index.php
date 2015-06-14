<?php
require_once "ControllerOrder.php";
require_once "ControllerCompany.php";
$action = $_REQUEST['action'];

if(isset($_REQUEST['controller']))
    $controller = $_REQUEST['controller'];
else{
    $controller = "order";
}



$controller = ucfirst($controller);
$controller = 'Controller'.$controller;
$controller = new $controller();
$controller->$action();