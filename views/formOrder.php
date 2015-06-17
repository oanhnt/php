<html>
<body>
<?php
    if(isset($_GET['message'])){
        echo "add Successs";
    }
?>
<h3>Current order</h3>
<?php
    if(isset($_GET['order'])){
        include "views/listOrder.php";
    }
?>

<h3>add new</h3>
<table border="0">
    <tr>
        <td>
            <form action="index.php?action=saveorder&order=<?php echo $orderNumber ?>" method="post">
                <table border="0">
                    <tr>
                        <td colspan="2"><strong>Dane danie:</strong></td>
                    </tr>
                    <tr>
                        <td>ID:</td>
                        <td><input type="text" name="ID_D"/></td>
                    </tr>
                    <tr>
                        <td>Nazwa Dania:</td>
                        <td><input name="Nazwadania"/></td>
                    </tr>
                    <tr>
                        <td>Ilosc:</td>
                        <td><input name="Ilosc" value=""/></td>
                    </tr>
                    <tr>
                        <td>Skladniki:</td>
                        <td><input name="Skladniki" value=""/></td>
                    </tr>
                    <tr>
                        <td>Data wyslania (rrrr-mm-dd):</td>
                        <td><input name="Datawyslania" value=""/></td>
                    </tr>
                    <tr>
                        <td>Data imprezy (rrrr-mm-dd):</td>
                        <td><input name="Dataimprezy" value=""/></td>
                    </tr>

                    <tr>
                        <td>
                            <input type="hidden" name="order" value="<?php echo $orderNumber ?>"/>
                            <input type="hidden" name="ftype" value="food"/>
                            <input type="submit" name="submit" value="Add"/>
                        </td>
                    </tr>
                </table>
            </form>
        </td>
<!--
        <td width="100px"></td>

        <td>
            <form action="index.php?action=saveorder&order=<?php echo $orderNumber ?>" method="post">
                <table border="0">
                    <tr>
                        <td colspan="2"><strong>Dane Alkohol:</strong></td>
                    </tr>
                    <tr>
                        <td>ID:</td>
                        <td><input name="ID_A" value=""/></td>
                    </tr>
                    <tr>
                        <td>NazwaAlkoholu:</td>
                        <td><input name="NazwaAlkoholu" value=""/></td>
                    </tr>
                    <tr>
                        <td>Typ Alkohol:</td>
                        <td><select name="Typ_A" size="1" text="wybierz rodzaj alkoholu">
                                <option>wybierz rodzaj alkoholu</option>
                                <option>czerwone półsłodkie</option>
                                <option>białe półwytrawne</option>
                                <option>3</option>
                                <option>4</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Numer:</td>
                        <td><input name="Ilosc_A" value=""/></td>
                    </tr>
                    <tr>
                        <td>Data wyslania (rrrr-mm-dd):</td>
                        <td><input name="Datawyslania_A" value=""/></td>
                    </tr>
                    <tr>
                        <td>Data imprezy (rrrr-mm-dd):</td>
                        <td><input name="Dataimprezy_A" value=""/></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="hidden" name="order" value="<?php echo $orderNumber ?>"/>
                            <input type="hidden" name="ftype" value="drink"/>
                            <input type="submit" name="submit" value="Add"/>
                        </td>
                    </tr>
                </table>
            </form>
        </td>
		-->
    </tr>
</table>

</form>
</body>
</html>
