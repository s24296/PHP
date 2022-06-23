
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>
        Temperatura
    </title>
</head>
<body bgcolor="#add8e6">
<center>
    <font size="5">
        <i>
            <b>
                Kalkulator jednostek temperatury <br>
            </b>
        </i>
        ------------------------------------------------------------- <br> <br> <br>
    </font>
</center>
<div>
    <center>
        <font size="4">
            <i>
                Wpisz wartość i wybierz jednostkę temperatury <br><br>
            </i>
        </font>
    </center>
</div>
<center>
    <div>
        <form action="temperature.php" method="post">
            <input name="a" type="number" value="a">
            <select name="unit" value="unit">
                <option value="1"> Celsjusz (<span>&#176;</span>C) </option>
                <option value="2"> Kelwin (K) </option>
                <option value="3"> Fahrenheit (<span>&#176;</span>F) </option>
            </select>
            <input type="submit" value="count" name="count">
        </form>
    </div>
    <br><br><br>
    <div>
        <font size="5">
            ------------------------------------------------------------- <br> <br>
        </font>
    </div>
    <div>
        <?php

        require 'function.php';

        if(isset($_POST['count'])) {
            if(is_numeric($_POST['a'])) {

                switch($_POST['unit']) {

                    case 1:
                        Celsjusz($_POST['a']);
                        break;

                    case 2:
                        Kelwin($_POST['a']);
                        break;

                    case 3:
                        Fahrenheit($_POST['a']);
                        break;
                }
            }
        }

        ?>
    </div>
    <br><br>
    <div>
        <font size="5">
            ------------------------------------------------------------- <br> <br>
        </font>
    </div>
    <div>
        <a href="index.php">
            Powrót do strony głównej
        </a>
    </div>
</center>
</body>

