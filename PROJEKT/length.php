
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>
        Długość
    </title>
</head>
<body bgcolor="#add8e6">
<center>
    <font size="5">
        <i>
            <b>
                Kalkulator jednostek długości <br>
            </b>
        </i>
        ------------------------------------------------------------- <br> <br> <br>
    </font>
</center>
<div>
    <center>
        <font size="4">
            <i>
                Wpisz wartość i wybierz jednostkę długości <br><br>
            </i>
        </font>
    </center>
</div>
<center>
    <div>
        <form action="length.php" method="post">
            <input name="a" type="number" value="a">
            <select name="unit" value="unit">
                <option value="1"> Gigametr (Gm)  </option>
                <option value="2"> Megametr (Mm) </option>
                <option value="3"> Kilometrl (km) </option>
                <option value="4"> Metr (M) </option>
                <option value="5"> Decymetr (dm) </option>
                <option value="6"> Centymetr (cm) </option>
                <option value="7"> Milimetr (mm) </option>
                <option value="8"> Mikrometr (µm) </option>
                <option value="9"> Nanometr (nm) </option>
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
                        Gigametr($_POST['a']);
                        break;

                    case 2:
                        Megametr($_POST['a']);
                        break;

                    case 3:
                        Kilometr($_POST['a']);
                        break;

                    case 4:
                        Metr($_POST['a']);
                        break;

                    case 5:
                        Decymetr($_POST['a']);
                        break;

                    case 6:
                        Centymetr($_POST['a']);
                        break;

                    case 7:
                        Milimetr($_POST['a']);
                        break;

                    case 8:
                        Mikrometr($_POST['a']);
                        break;

                    case 9:
                        Nanometr($_POST['a']);
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