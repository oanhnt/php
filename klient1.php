<?php

$xml=simplexml_load_file('1wariant1.xml');
echo 'Numer jedzenia:' ;
echo count($xml);
echo '<br>List Jedzenia:';
?>
<table cellpadding="2" cellspacing="2" border="1">
<tr>
	
	<th>NazwaDania</th>
	<th>Ilosc</th>
	<th>Koszt</th>
	<th>ID_Stanu</th>
	<th>Wymiana</th>

</tr>
 <?php foreach ($xml->danie as $danie){?>
<tr>
	<td> <?php echo $danie->NazwaDania;?></td>
	<td> echo $danie->Ilosc;</td>
	<td>echo $danie->Koszt;</td>
	<td> echo $danie->ID_Stanu;</td>
	<td> echo $danie->Wymiana;</td>
</tr>
  <?php } ?>
</table>
