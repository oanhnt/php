<?php
    $ordernumber = $_GET['order'];
    $xml = simplexml_load_file("orders/".$ordernumber.".xml") or die("Error: Cannot create object");
?>

<form action="index.php?action=processorder&order=<?php echo $orderNumber ?>" method="post">>
<table border="1">
    <!--
	<tr>
        <td colspan="5">
            <h4>Drink</h4>
        </td>
    </tr>
    <tr>
	            
		
        <td><h5>ID_A</h5></td>
        <td><h5>NazwaAlkoholu</h5></td>
        <td><h5>Typ_A</h5></td>
        <td><h5>Datawyslania_A</h5></td>
		<td><h5>Dataimprezy_A</h5></td>

    </tr>
     <?php foreach($xml->order->foods->food as $drink) :?>
        <tr>
            <td><?php echo $drink->ID_A ;?></td>
            <td><?php echo $drink->NazwaAlkoholu ;?></td>
            <td><?php echo $drink->Typ_A ;?></td>
            <td><?php echo $drink->Datawyslania_A ;?></td>
			<td><?php echo $drink->Dataimprezy_A ;?></td>
        </tr>
    <?php endforeach; ?>
    
-->
    <tr>
        <td colspan="6">
            <h4>Food</h4>
        </td>
    </tr>
    <tr>
        <td><h5>ID_D</h5></td>
        <td><h5>Nazwadania </h5></td>
        <td><h5>Ilosc</h5></td>
        <td><h5>Skladniki</h5></td>
		<td><h5>Datawyslania</h5></td>
		<td><h5>Dataimprezy</h5></td>
    </tr>
    <?php foreach($xml->order->foods->food as $food) :?>
        <tr>
            <td><?php echo $food->ID_D ;?></td>
            <td><?php echo $food->Nazwadania ;?></td>
            <td><?php echo $food->Ilosc ;?></td>
            <td><?php echo $food->Skladniki ;?></td>
			<td><?php echo $food->Datawyslania ;?></td>
			<td><?php echo $food->Dataimprezy ;?></td>
        </tr>
    <?php endforeach; ?>


</table>
<tr>
<h2></h2>
</tr>
<tr>
	<td>
	
    <input type="submit" name="send" value="Send"/>
	</td>
</tr>
</form>
