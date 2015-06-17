<?php
require_once "orders/order.php";


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
		$drink=array();
       // $food['ID_A']         = $_REQUEST['ID_A'];
        //$food['NazwaAlkoholu']   = $_REQUEST['NazwaAlkoholu'];
		//$drink['Typ_A']        = $_REQUEST['Typ_A'];
       // $food['Ilosc_A']    = $_REQUEST['Ilosc_A'];
        //$food['Datawyslania_A'] = $_REQUEST['Datawyslania_A'];
        //$food['Dataimprezy_A']  = $_REQUEST['Dataimprezy_A'];
	 if($_REQUEST['ftype']=='food'){
            $order->addFood($food);	
	 }else if($_REQUEST['ftype']=='drink'){
            $order->addDrink($drink);
		
			
		
}else{
            echo "no type";
        }
		
        
       
        
    }

    public function testAction()
    {
        echo "test action here ";
    }



} 
