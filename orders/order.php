<?php
class Order
{
    var $_number;
    var $foods;
    var $drinks;

    public function __construct($orderNumber){
        $this->_number = $orderNumber;
        if( !file_exists ("orders/".$orderNumber.".xml" )) {
            $xml = new SimpleXMLElement("<xml><order><number>$orderNumber</number></order></xml>");
            $xml->asXML("orders/$orderNumber.xml");
        }
    }

    public function addFood($food){
        $xml = simplexml_load_file("orders/".$this->_number.".xml") or die("Error: Cannot create object");
        //check if foods alreayd exist
        if(!isset($xml->order->foods)){
            $xml->order->addChild("foods");
        }

        //create new food order
        $xfood = $xml->order->foods->addChild("food");
        foreach($food as $key => $value){
            $xfood->addChild($key,$value);
        }

        $xml->asXML("orders/".$this->_number.".xml");
        header('Location: ' . $_SERVER['HTTP_REFERER'].'&message=success'.'&order='.$this->_number);
        exit;
    }

    /*
     * add drink
     */
    public function addDrink($food)
    {
	$xml = simplexml_load_file("orders/".$this->_number.".xml") or die("Error: Cannot create object");
        //check if foods alreayd exist
        if(!isset($xml->order->foods)){
            $xml->order->addChild("foods");
        }

        //create new food order
        $xfood = $xml->order->foods->addChild("food");
        foreach($food as $key => $value){
            $xfood->addChild($key,$value);
        }

        $xml->asXML("orders/".$this->_number.".xml");
        header('Location: ' . $_SERVER['HTTP_REFERER'].'&message=success'.'&order='.$this->_number);
        exit;

    }

    /*
     * show all drinks
     */
    public function listDrink(){
    
    }
    
    /*
     * show all food
     */
    public function listFood()
    {
        
    }

    public function generate_valid_xml_from_array($array, $node_block='nodes', $node_name='node') {

    }
    

}
