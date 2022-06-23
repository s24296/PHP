
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>
        Czas
    </title>
</head>
<body bgcolor="#add8e6">
<center>
    <font size="5">
        <i>
            <b>
                Kalkulator jednostek czasu <br>
            </b>
        </i>
        ------------------------------------------------------------- <br> <br> <br>
    </font>
</center>
<div>
    <center>
        <font size="4">
            <i>
                Wpisz wartość i wybierz jednostkę czasu <br><br>
            </i>
        </font>
    </center>
</div>
<center>
    <div>
        <form action="time.php" method="post">
            <input name="a" type="number" value="a">
            <select name="unit" value="unit">
                <option value="1"> nanosekunda (ns) </option>
                <option value="2"> mikrosekunda (µn) </option>
                <option value="3"> milisekunda (ms) </option>
                <option value="4"> sekunda (s) </option>
                <option value="5"> minuta (min) </option>
                <option value="6"> godzina (h) </option>
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
                        Nanosekunda($_POST['a']);
                        break;

                    case 2:
                        Mikrosekunda($_POST['a']);
                        break;

                    case 3:
                        Milisekunda($_POST['a']);
                        break;

                    case 4:
                        Sekunda($_POST['a']);
                        break;

                    case 5:
                        Minuta($_POST['a']);
                        break;

                    case 6:
                        Godzina($_POST['a']);
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


