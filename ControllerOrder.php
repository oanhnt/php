<?php
require_once "orders/order.php";
/**
 * Project EXP Laravel
 * User: nguyenhieptn
 * Date: 6/14/2015
 * Time: 3:42 PM
 */

class ControllerOrder {
    var $orderCode = "";
    /*
     * show form
     */
    public function createorder()
    {
        if(isset($_GET['order'])){
            $orderNumber =$_GET['order'];
        }else{
            $orderNumber = md5(uniqid(rand(), true));
        }

        include "views/formOrder.php";
    }

    /*
     * save customer order
     */

    public function saveorder()
    {
        $orderNumber = $_GET['order'];
        $order = New Order($orderNumber);

        $food = array();
        $food['ID_D']         = $_REQUEST['ID_D'];
        $food['Nazwadania']   = $_REQUEST['Nazwadania'];
        $food['Ilosc']        = $_REQUEST['Ilosc'];
        $food['Skladniki']    = $_REQUEST['Skladniki'];
        $food['Datawyslania'] = $_REQUEST['Datawyslania'];
        $food['Dataimprezy']  = $_REQUEST['Dataimprezy'];

        if($_REQUEST['ftype']=='food'){
            $order->addFood($food);
        }else if($_REQUEST['ftype']=='drink'){
            $order->addDrink($food);
        }else{
            echo "no type";
        }
    }

    public function testAction()
    {
        echo "test action here ";
    }



} 