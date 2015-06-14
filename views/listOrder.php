<?php
    $ordernumber = $_GET['order'];
    $xml = simplexml_load_file("orders/".$ordernumber.".xml") or die("Error: Cannot create object");
?>

<table border="1">
    <tr>
        <td colspan="5">
            <h4>Drink</h4>
        </td>
    </tr>
    <tr>
        <td><h5>ddd</h5></td>
        <td><h5>ddd</h5></td>
        <td><h5>ddd</h5></td>
        <td><h5>ddd</h5></td>
    </tr>
    <tr>
        <td>ID</td>
        <td>dd</td>
        <td>df</td>
        <td>k</td>
    </tr>
    <tr>
        <td>ID</td>
        <td>dd</td>
        <td>df</td>
        <td>k</td>
    </tr>

    <tr>
        <td colspan="5">
            <h4>Food</h4>
        </td>
    </tr>
    <tr>
        <td><h5>ID_D</h5></td>
        <td><h5>Nazwadania </h5></td>
        <td><h5>Ilosc</h5></td>
        <td><h5>Skladniki</h5></td>
    </tr>
    <?php foreach($xml->order->foods->food as $food) :?>
        <tr>
            <td><?php echo $food->ID_D ;?></td>
            <td><?php echo $food->Nazwadania ;?></td>
            <td><?php echo $food->Ilosc ;?></td>
            <td><?php echo $food->Skladniki ;?></td>
        </tr>
    <?php endforeach; ?>


</table>
