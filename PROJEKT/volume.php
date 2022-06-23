
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>
        Objętość
    </title>
</head>
<body bgcolor="#add8e6">
<center>
    <font size="5">
        <i>
            <b>
                Kalkulator jednostek objętości <br>
            </b>
        </i>
        ------------------------------------------------------------- <br> <br> <br>
    </font>
</center>
<div>
    <center>
        <font size="4">
            <i>
                Wpisz wartość i wybierz jednostkę objętości <br><br>
            </i>
        </font>
    </center>
</div>
<center>
    <div>
        <form action="volume.php" method="post">
            <input name="a" type="number" value="a">
            <select name="unit" value="unit">
                <option value="1"> Kilometr sześcienny (km<sup>3</sup>)  </option>
                <option value="2"> Metr sześcienny (m<sup>3</sup>) </option>
                <option value="3"> Decymetr sześcienny (dm<sup>3</sup>) </option>
                <option value="4"> Centymetr sześcienny (cm<sup>3</sup>) </option>
                <option value="5"> Milimetr sześcienny (mm<sup>3</sup>) </option>
                <option value="6"> Mikrometr sześcienny (µ<sup>3</sup>) </option>
                <option value="7"> Nanometr sześcienny (nm<sup>3</sup>) </option>
                <option value="8"> Litr (l) </option>
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
                        Kilometrsz($_POST['a']);
                        break;

                    case 2:
                        Metrsz($_POST['a']);
                        break;

                    case 3:
                        Decymetrsz($_POST['a']);
                        break;

                    case 4:
                        Centymetrsz($_POST['a']);
                        break;

                    case 5:
                        Milimetrsz($_POST['a']);
                        break;

                    case 6:
                        Mikrometrsz($_POST['a']);
                        break;

                    case 7:
                        Nanometrsz($_POST['a']);
                        break;

                    case 8:
                        Litr($_POST['a']);
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
