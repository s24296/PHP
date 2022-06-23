
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>
        Siła
    </title>
</head>
<body bgcolor="#add8e6">
<center>
    <font size="5">
        <i>
            <b>
                Kalkulator jednostek siły <br>
            </b>
        </i>
        ------------------------------------------------------------- <br> <br> <br>
    </font>
</center>
<div>
    <center>
        <font size="4">
            <i>
                Wpisz wartość i wybierz jednostkę siły <br><br>
            </i>
        </font>
    </center>
</div>
<center>
    <div>
        <form action="force.php" method="post">
            <input name="a" type="number" value="a">
            <select name="unit" value="unit">
                <option value="1"> niuton (N) </option>
                <option value="2"> dyna (dyn) </option>
                <option value="3"> kilogram-siła (kG) </option>
                <option value="4"> giganiuton (GN) </option>
                <option value="5"> meganiuton (MN) </option>
                <option value="6"> kiloniuton (kN) </option>
                <option value="7"> hektoniuton (hN) </option>
                <option value="8"> decyniuton (dN) </option>
                <option value="9"> miliniuton (mN) </option>
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
                        Niuton($_POST['a']);
                        break;

                    case 2:
                        Dyna($_POST['a']);
                        break;

                    case 3:
                        Kilosila($_POST['a']);
                        break;

                    case 4:
                        Giganiuton($_POST['a']);
                        break;

                    case 5:
                        Meganiuton($_POST['a']);
                        break;

                    case 6:
                        Kiloniuton($_POST['a']);
                        break;

                    case 7:
                        Hektoniuton($_POST['a']);
                        break;

                    case 8:
                        Decyniuton($_POST['a']);
                        break;

                    case 9:
                        Miliniuton($_POST['a']);
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

