<?php

$rok = 2000;
$miesiac = 1;

if ($rok % 400 == 0)
{
    if($miesiac == 1 || $miesiac == 3 || $miesiac == 5 || $miesiac == 7 || $miesiac == 9 || $miesiac == 11)
        echo '31 dni';
}
else
{
    if($miesiac == 4 || $miesiac == 6 || $miesiac == 8 || $miesiac == 10 || $miesiac == 12)
        echo '30 dni';
}
else
{
    if($miesiac == 2)
        echo '29 dni';
}


if ($rok % 400 == 4)
{
    if($miesiac == 1 || $miesiac == 3 || $miesiac == 5 || $miesiac == 7 || $miesiac == 9 || $miesiac == 11)
        echo '31 dni';
}
else
{
    if($miesiac == 4 || $miesiac == 6 || $miesiac == 8 || $miesiac == 10 || $miesiac == 12)
        echo '30 dni';
}
else
{
    if($miesiac == 2)
        echo '28 dni';
}


?>