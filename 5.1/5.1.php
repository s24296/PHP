<?php

require 'function_51.php';

if(isset($_POST['oblicz'])) {
    if(is_numeric($_POST['a']) && ($_POST['b'])) {

        switch($_POST['dzialanie']) {

            case 1:
                dodawanie($_POST['a'], $_POST['b']);
                break;
            case 2:
                odejmowanie($_POST['a'], $_POST['b']);
                break;
            case 3:
                mnozenie($_POST['a'], $_POST['b']);
                break;
            case 4:
                dzielenie($_POST['a'], $_POST['b']);
                break;
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Zadanie 5.1 </title>
</head>
<body>
<div>
    <font size="6"> KALKULATOR </font> <br>
    --------------------------------------------------------------
</div>
<form action="5.1.php" method="post">
    <div>
        Wpisz pierwsza liczbe: <br>
        <input name="a" type="number" value="a"> <br>
        Wpisz druga liczbe: <br>
        <input name="b" type="number" value="b"> <br>
        Wybierz dzialanie: <br>
        <select name="dzialanie" value="dzialanie">
            <option value="1"> Dodawanie </option>
            <option value="2"> Odejmowanie </option>
            <option value="3"> Mnozenie </option>
            <option value="4"> Dzielenie </option>
        </select>
        <div>
        <input type="submit" value="oblicz" name="oblicz"> <br>
        </div>
        --------------------------------------------------------------- <br>
    </div>
</form>
</body>
</html>