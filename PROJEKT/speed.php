
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>
        Prędkość
    </title>
</head>
<body bgcolor="#add8e6">
<center>
    <font size="5">
        <i>
            <b>
                Kalkulator jednostek prędkości <br>
            </b>
        </i>
        ------------------------------------------------------------- <br> <br> <br>
    </font>
</center>
<div>
    <center>
        <font size="4">
            <i>
                Wpisz wartość i wybierz jednostkę prędkości <br><br>
            </i>
        </font>
    </center>
</div>
<center>
    <div>
        <form action="speed.php" method="post">
            <input name="a" type="number" value="a">
            <select name="unit" value="unit">
                <option value="1"> Kilometr na godzinę (km/h) </option>
                <option value="2"> Kilometr na sekundę (km/s) </option>
                <option value="3"> Metr na godzinę (m/h) </option>
                <option value="4"> Metr na sekundę (m/s) </option>
                <option value="5"> Mila na godzinę (mph) </option>
                <option value="6"> Węzeł (kn)</option>
                <option value="7"> Prędkość światła (c) </option>
                <option value="8"> Mach (ma) </option>
            </select>
            <input type="submit" value="count" name="count">
        </form>
    </div>
    <br><br><br>
    <div>
        <font size="5">
            ------------------------------------------------------------- <br><br>
        </font>
    </div>
    <div>
        <?php

        require 'function.php';

        if(isset($_POST['count'])) {
            if(is_numeric($_POST['a'])) {

                switch($_POST['unit']) {

                    case 1:
                        Kmh($_POST['a']);
                        break;

                    case 2:
                        Kms($_POST['a']);
                        break;

                    case 3:
                        Mh($_POST['a']);
                        break;

                    case 4:
                        Ms($_POST['a']);
                        break;

                    case 5:
                        Mph($_POST['a']);
                        break;

                    case 6:
                        Kn($_POST['a']);
                        break;

                    case 7:
                        Lightspeed($_POST['a']);
                        break;

                    case 8:
                        Mach($_POST['a']);
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