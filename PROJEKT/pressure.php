
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>
        Ciśnienie
    </title>
</head>
<body bgcolor="#add8e6">
<center>
    <font size="5">
        <i>
            <b>
                Kalkulator jednostek ciśnienia <br>
            </b>
        </i>
        ------------------------------------------------------------- <br> <br> <br>
    </font>
</center>
<div>
    <center>
        <font size="4">
            <i>
                Wpisz wartość i wybierz jednostkę ciśnienia <br><br>
            </i>
        </font>
    </center>
</div>
<center>
    <div>
        <form action="pressure.php" method="post">
            <input name="a" type="number" value="a">
            <select name="unit" value="unit">
                <option value="1"> gigapaskal (GPa) </option>
                <option value="2"> megapaskal (MPa) </option>
                <option value="3"> hektopaskal (hPa) </option>
                <option value="4"> dekapaskal (daPa) </option>
                <option value="5"> paskal (Pa) </option>
                <option value="6"> centypaskal (cPa) </option>
                <option value="7"> milipaskal (mPa) </option>
                <option value="8"> bar (bar) </option>
                <option value="9"> funt-siła na cal kwadratowy (psi)</option>
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
                        Gigapaskal($_POST['a']);
                        break;

                    case 2:
                        Megapaskal($_POST['a']);
                        break;

                    case 3:
                        Hektopaskal($_POST['a']);
                        break;

                    case 4:
                        Dekapaskal($_POST['a']);
                        break;

                    case 5:
                        Paskal($_POST['a']);
                        break;

                    case 6:
                        Centypaskal($_POST['a']);
                        break;

                    case 7:
                        Milipaskal($_POST['a']);
                        break;

                    case 8:
                        Bar($_POST['a']);
                        break;

                    case 9:
                        Psi($_POST['a']);
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
