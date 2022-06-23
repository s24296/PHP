
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>
        Powierzchnia
    </title>
</head>
<body bgcolor="#add8e6">
<center>
    <font size="5">
        <i>
            <b>
                Kalkulator jednostek powierzchni <br>
            </b>
        </i>
        ------------------------------------------------------------- <br> <br> <br>
    </font>
</center>
<div>
    <center>
        <font size="4">
            <i>
                Wpisz wartość i wybierz jednostkę powierzchni <br><br>
            </i>
        </font>
    </center>
</div>
<center>
    <div>
        <form action="surface.php" method="post">
            <input name="a" type="number" value="a">
            <select name="unit" value="unit">
                <option value="1"> Kilometr kwadratowy (km<sup>2</sup>)  </option>
                <option value="2"> Metr kwadratowy (m<sup>2</sup>) </option>
                <option value="3"> Decymetr kwadratowy (dm<sup>2</sup>) </option>
                <option value="4"> Centymetr kwadratowy (cm<sup>2</sup>) </option>
                <option value="5"> Milimetr kwadratowy (mm<sup>2</sup>) </option>
                <option value="6"> Mikrometr kwadratowy (µ<sup>2</sup>) </option>
                <option value="7"> Nanometr kwadratowy (nm<sup>2</sup>) </option>
                <option value="8"> Ar (a) </option>
                <option value="9"> Hektar (ha) </option>
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
                        Kilometrk($_POST['a']);
                        break;

                    case 2:
                        Metrk($_POST['a']);
                        break;

                    case 3:
                        Decymetrk($_POST['a']);
                        break;

                    case 4:
                        Centymetrk($_POST['a']);
                        break;

                    case 5:
                        Milimetrk($_POST['a']);
                        break;

                    case 6:
                        Mikrometrk($_POST['a']);
                        break;

                    case 7:
                        Nanometrk($_POST['a']);
                        break;

                    case 8:
                        Ar($_POST['a']);
                        break;

                    case 9:
                        Hektar($_POST['a']);
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
