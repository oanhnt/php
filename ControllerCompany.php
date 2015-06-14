<?php
/**
 * Project EXP Laravel
 * User: nguyenhieptn
 * Date: 6/14/2015
 * Time: 5:23 PM
 */

class ControllerCompany {
    /*get lowest price */
    public function getLowestPrice(){
        $idd = $_REQUEST['ID_D'];


        //1. select all prices from all companies

        //2. select the lowest
        $price = array();
        $price['lowestprice'] = 333;
        $price['company'] = "coca";

        echo json_encode($price);
    }


} 