
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>
        Energia
    </title>
</head>
<body bgcolor="#add8e6">
<center>
<font size="5">
    <i>
        <b>
            Kalkulator jednostek energii <br>
        </b>
    </i>
    ------------------------------------------------------------- <br> <br> <br>
</font>
</center>
<div>
    <center>
    <font size="4">
        <i>
            Wpisz wartość i wybierz jednostkę energii <br><br>
        </i>
    </font>
    </center>
</div>
<center>
<div>
    <form action="energy.php" method="post">
            <input name="a" type="number" value="a">
            <select name="unit" value="unit">
                <option value="1"> Gigadżul (GJ)  </option>
                <option value="2"> Megaadżul (MJ) </option>
                <option value="3"> Kilodżul (kJ) </option>
                <option value="4"> Dżul (J) </option>
                <option value="5"> Decydżul (dJ) </option>
                <option value="6"> Milidżul (mJ) </option>
                <option value="7"> Mikrodżul (µJ) </option>
                <option value="8"> Nanodżul (nJ) </option>
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
                        Gigajul($_POST['a']);
                        break;

                    case 2:
                        Megajul($_POST['a']);
                        break;

                    case 3:
                        Kilojul($_POST['a']);
                        break;

                    case 4:
                        Jul($_POST['a']);
                        break;

                    case 5:
                        Decyjul($_POST['a']);
                        break;

                    case 6:
                        Milijul($_POST['a']);
                        break;

                    case 7:
                        Mikrojul($_POST['a']);
                        break;

                    case 8:
                        Nanojul($_POST['a']);
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