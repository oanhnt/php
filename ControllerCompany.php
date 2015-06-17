<?php mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("data"); ?>

<?php


class ControllerCompany {


    /*get lowest price */
    public function getLowestPrice(){
	
       $idd = $_REQUEST['ID_D'];
       $sl= mysql_query("select Koszt from listadania where ID_D='D1' order by Koszt desc");
		$price = array();
		$price = mysql_fetch_array($sl);

        //1. select all prices from all companies: "select price,companyname from companies where idd=$idd order by price  desc"
		//select Koszt from oferta_dania where ID_D=$idd order by Koszt desc;
		

        //2. select the lowest
        


        echo json_encode($price);
    }


} 
