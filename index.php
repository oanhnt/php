<html lang="pl">
<body>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Formularz</title>
</head>

<body>
<?php
if(isset($_REQUEST['submit'])){
$xml=new DOMdocument("1.0","UTF-8");
$xml->load("a.xml");
$Root0Tag=$xml->getElementsByTagName("RequestWyslanieListyImpreza")->item(0);
$rootTag=$xml->getElementsByTagName("ListJedzenia")->item(0);
$danieTag=$xml->createElement("danie");
$ID_DTag=$xml->createElement("ID_D",$_REQUEST['ID_D']);
$NazwadaniaTag=$xml->createElement("Nazwadania",$_REQUEST['Nazwadania']);
$IloscTag=$xml->createElement("Ilosc",$_REQUEST['Ilosc']);
$SkladnikiTag=$xml->createElement("Skladniki",$_REQUEST['Skladniki']);
$DatawyslaniaTag=$xml->createElement("Datawyslania",$_REQUEST['Datawyslania']);
$DataimprezyTag=$xml->createElement("Dataimprezy",$_REQUEST['Dataimprezy']);

$danieTag->appendChild($ID_DTag);
$danieTag->appendChild($NazwadaniaTag);
$danieTag->appendChild($IloscTag);
$danieTag->appendChild($SkladnikiTag);
$danieTag->appendChild($DatawyslaniaTag);
$danieTag->appendChild($DataimprezyTag);
$rootTag->appendChild($danieTag);

$root1Tag=$xml->getElementsByTagName("ListAlkoholu")->item(0);
$AlkoholTag=$xml->createElement("Alkohol");
$ID_ATag=$xml->createElement("ID_A",$_REQUEST['ID_A']);
$NazwaAlkoholuTag=$xml->createElement("NazwaAlkoholu",$_REQUEST['NazwaAlkoholu']);
$Typ_ATag=$xml->createElement("Typ_A",$_REQUEST['Typ_A']);
$Ilosc_ATag=$xml->createElement("Ilosc_A",$_REQUEST['Ilosc_A']);
$Datawyslania_ATag=$xml->createElement("Datawyslania_A",$_REQUEST['Datawyslania_A']);
$Dataimprezy_ATag=$xml->createElement("Dataimprezy_A",$_REQUEST['Dataimprezy_A']);

$AlkoholTag->appendChild($ID_ATag);
$AlkoholTag->appendChild($NazwaAlkoholuTag);
$AlkoholTag->appendChild($Typ_ATag);
$AlkoholTag->appendChild($IloscTag);
$AlkoholTag->appendChild($Datawyslania_ATag);
$AlkoholTag->appendChild($Dataimprezy_ATag);
$root1Tag->appendChild($AlkoholTag);

$Root0Tag->appendChild($rootTag);
$Root0Tag->appendChild($root1Tag);
$xml->save("a.xml");
}
?>
   <strong>Aby złożyć wniosek, podaj poniższe informacje:</strong>
    <form action="index.php" method="post">
     <table border="0">
	 <tr><td>
	 <table border="0">
        <tr><td colspan="2"><strong>Dane danie:</strong></td></tr>
        <tr><td>ID:</td><td><input type="text" name="ID_D"  /></td></tr>
        <tr><td>Nazwa Dania:</td><td><input name="Nazwadania" /></td></tr>
        <tr><td>Ilosc:</td><td><input name="Ilosc" value="" /></td></tr>
        <tr><td>Skladniki:</td><td><input name="Skladniki" value="" /></td></tr>
        <tr><td>Data wyslania (rrrr-mm-dd):</td><td><input name="Datawyslania" value="" /></td></tr>
        <tr><td>Data imprezy (rrrr-mm-dd):</td><td><input name="Dataimprezy" value="" /></td></tr>
          </table>
	
	 </td>
        
        <td width="100px"></td>
        
        <td>
        <table border="0">
        <tr><td colspan="2"><strong>Dane Alkohol:</strong></td></tr>
        <tr><td>ID:</td><td><input name="ID_A" value="" /></td></tr>
        <tr><td>NazwaAlkoholu:</td><td><input name="NazwaAlkoholu" value="" /></td></tr>
        <tr><td>Typ Alkohol:</td><td><select name="Typ_A" size="1"text="wybierz rodzaj alkoholu">
          <option>wybierz rodzaj alkoholu</option>
		  <option>czerwone półsłodkie </option>
          <option>białe półwytrawne </option>
          <option>3</option>
          <option>4</option>
        </select></td></tr>
		<tr><td>Numer:</td><td><input name="Ilosc_A" value="" /></td></tr>
        <tr><td>Data wyslania (rrrr-mm-dd):</td><td><input name="Datawyslania_A" value="" /></td></tr>
        <tr><td>Data imprezy (rrrr-mm-dd):</td><td><input name="Dataimprezy_A" value="" /></td></tr>
        
    </table>
</td>
</tr>    
</table>
      <input type="submit" name="submit"value="Add"/>
	  <input type="submit" name="show"value="show"/>
    </form>  
    </body>
</html>
