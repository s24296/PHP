
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>
        Masa
    </title>
</head>
<body bgcolor="#add8e6">
<center>
    <font size="5">
        <i>
            <b>
                Kalkulator jednostek masy <br>
            </b>
        </i>
        ------------------------------------------------------------- <br> <br> <br>
    </font>
</center>
<div>
    <center>
        <font size="4">
            <i>
                Wpisz wartość i wybierz jednostkę masy <br><br>
            </i>
        </font>
    </center>
</div>
<center>
    <div>
        <form action="mass.php" method="post">
            <input name="a" type="number" value="a">
            <select name="unit" value="unit">
                <option value="1"> Tona (T)  </option>
                <option value="2"> Kilogram (kg) </option>
                <option value="3"> Dekagram (dag) </option>
                <option value="4"> Gram (g) </option>
                <option value="5"> Decygram (dg) </option>
                <option value="6"> Centygram (cg) </option>
                <option value="7"> Miligram (mg) </option>
                <option value="8"> Mikrogram (µg) </option>
                <option value="9"> Nanogram (ng) </option>
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
                        Tona($_POST['a']);
                        break;

                    case 2:
                        Kilogram($_POST['a']);
                        break;

                    case 3:
                        Dekagram($_POST['a']);
                        break;

                    case 4:
                        Gram($_POST['a']);
                        break;

                    case 5:
                        Decygram($_POST['a']);
                        break;

                    case 6:
                        Centygram($_POST['a']);
                        break;

                    case 7:
                        Miligram($_POST['a']);
                        break;

                    case 8:
                        Mikrogram($_POST['a']);
                        break;

                    case 9:
                        Nanogram($_POST['a']);
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