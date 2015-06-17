<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;" />
<title>Untitled Document</title>
</head>
 
<body>
<?php mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("data"); ?>
<table align="center" border="1" width="600">
	<tr align="center"> 
    	<td>ID_D</td>
        <td>Nazwa</td>
        <td>Skladnia</td>
        
    </tr>
    <?php 
		$sl= mysql_query("select * from listadania");
		while($row = mysql_fetch_array($sl))
		{
	?> 
            <tr align="center">
            	<td>
                	<?php echo $row['ID_D']; ?>
                </td>
                <td>
                	<?php echo $row['ID_F']; ?>
                </td>
                <td>
                	<?php echo $row['Ilosc']; ?>
                </td>
               
            </tr>
    <?php } ?>
</table>
</body>
</html>
