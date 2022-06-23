<?php

function Gigametr($a) {
    $Megam = $a * 1000;
    $Km = $a * 1000000;
    $m = $a * 1000000000;
    $dm = $a * 10000000000;
    $cm = $a * 100000000000;
    $mm = $a * 1000000000000;
    $microm = $a * 1000000000000000;
    $nanom = $a * 1000000000000000000;
    echo "<font size='4'>
         <table> 
         <tbody>
         $a Gm = $a Gm (Gigametr) <br>
         $a Gm = $Megam Mm (Megametr) <br>
         $a Gm = $Km Km (Kilometr) <br>
         $a Gm = $m m (metr) <br>
         $a Gm = $dm dm (decymetr) <br>
         $a Gm = $cm cm (centymetr) <br>
         $a Gm = $mm mm (milimetr) <br>
         $a Gm = $microm µm (mikrometr) <br>
         $a Gm = $nanom nm (nanometr) <br>   
         </tr>
         </tbody>
         </table>
         </font>";
}

function Megametr($a) {
    $Gigam = $a * 0.001;
    $Km = $a * 1000;
    $m = $a * 1000000;
    $dm = $a * 10000000;
    $cm = $a * 100000000;
    $mm = $a * 1000000000;
    $microm = $a * 10000000000000000;
    $nanom = $a * 1000000000000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a Mm = $Gigam Gm (Gigametr) <br>
         $a Mm = $a Mm (Megametr) <br>
         $a Mm = $Km Km (Kilometr) <br>
         $a Mm = $m m (metr) <br>
         $a Mm = $dm dm (decymetr) <br>
         $a Mm = $cm cm (centymetr) <br>
         $a Mm = $mm mm (milimetr) <br>
         $a Mm = $microm µm (mikrometr) <br>
         $a Mm = $nanom nm (nanometr) <br> 
         </tr>
         </tbody>
         </table>";
}

function Kilometr($a) {
    $Gigam = $a * 0.0000001;
    $Megam = $a * 0.001;
    $m = $a * 1000;
    $dm = $a * 10000;
    $cm = $a * 100000;
    $mm = $a * 1000000;
    $microm = $a * 1000000000;
    $nanom = $a * 100000000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a Km = $Gigam Gm (Gigametr) <br>
         $a Km = $Megam Mm (Megametr) <br>
         $a Km = $a Km (Kilometr) <br>
         $a Km = $m m (metr) <br>
         $a Km = $dm dm (decymetr) <br>
         $a Km = $cm cm (centymetr) <br>
         $a Km = $mm mm (milimetr) <br>
         $a Km = $microm µm (mikrometr) <br>
         $a Km = $nanom nm (nanometr) <br> 
         </tr>
         </tbody>
         </table>";
}

function Metr($a) {
    $Gigam = $a * 0.000000001;
    $Megam = $a * 0.000001;
    $Km = $a * 0.001;
    $dm = $a * 10;
    $cm = $a * 100;
    $mm = $a * 1000;
    $microm = $a * 1000000;
    $nanom = $a * 100000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a m = $Gigam Gm (Gigametr) <br>
         $a m = $Megam Mm (Megametr) <br>
         $a m = $Km Km (Kilometr) <br>
         $a m = $a m (metr) <br>
         $a m = $dm dm (decymetr) <br>
         $a m = $cm cm (centymetr) <br>
         $a m = $mm mm (milimetr) <br>
         $a m = $microm µm (mikrometr) <br>
         $a m = $nanom nm (nanometr) <br> 
         </tr>
         </tbody>
         </table>";
}

function Decymetr($a) {
    $Gigam = $a * 0.0000000001;
    $Megam = $a * 0.0000001;
    $Km = $a * 0.0001;
    $m = $a * 0.1;
    $cm = $a * 10;
    $mm = $a * 100;
    $microm = $a * 100000;
    $nanom = $a * 100000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a dm = $Gigam Gm (Gigametr) <br>
         $a dm = $Megam Mm (Megametr) <br>
         $a dm = $Km Km (Kilometr) <br>
         $a dm = $m m (metr) <br>
         $a dm = $a dm (decymetr) <br>
         $a dm = $cm cm (centymetr) <br>
         $a dm = $mm mm (milimetr) <br>
         $a dm = $microm µm (mikrometr) <br>
         $a dm = $nanom nm (nanometr) <br> 
         </tr>
         </tbody>
         </table>";
}

function Centymetr($a) {
    $Gigam = $a * 0.00000000001;
    $Megam = $a * 0.00000001;
    $Km = $a * 0.00001;
    $m = $a * 0.01;
    $dm = $a * 0.1;
    $mm = $a * 10;
    $microm = $a * 10000;
    $nanom = $a * 10000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a cm = $Gigam Gm (Gigametr) <br>
         $a cm = $Megam Mm (Megametr) <br>
         $a cm = $Km Km (Kilometr) <br>
         $a cm = $m m (metr) <br>
         $a cm = $dm dm (decymetr) <br>
         $a cm = $a cm (centymetr) <br>
         $a cm = $mm mm (milimetr) <br>
         $a cm = $microm µm (mikrometr) <br>
         $a cm = $nanom nm (nanometr) <br> 
         </tr>
         </tbody>
         </table>";
}

function Milimetr($a) {
    $Gigam = $a * 0.000000000001;
    $Megam = $a * 0.000000001;
    $Km = $a * 0.000001;
    $m = $a * 0.001;
    $dm = $a * 0.01;
    $cm = $a * 0.1;
    $microm = $a * 1000;
    $nanom = $a * 1000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a mm = $Gigam Gm (Gigametr) <br>
         $a mm = $Megam Mm (Megametr) <br>
         $a mm = $Km Km (Kilometr) <br>
         $a mm = $m m (metr) <br>
         $a mm = $dm dm (decymetr) <br>
         $a mm = $cm cm (centymetr) <br>
         $a mm = $a mm (milimetr) <br>
         $a mm = $microm µm (mikrometr) <br>
         $a mm = $nanom nm (nanometr) <br> 
         </tr>
         </tbody>
         </table>";
}

function Mikrometr($a) {
    $Gigam = $a * 0.0000000000000001;
    $Megam = $a * 0.000000000001;
    $Km = $a * 0.0000000001;
    $m = $a * 0.000001;
    $dm = $a * 0.00001;
    $cm = $a * 0.0001;
    $mm = $a * 0.001;
    $nanom = $a * 1000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a µm = $Gigam Gm (Gigametr) <br>
         $a µm = $Megam Mm (Megametr) <br>
         $a µm = $Km Km (Kilometr) <br>
         $a µm = $m m (metr) <br>
         $a µm = $dm dm (decymetr) <br>
         $a µm = $cm cm (centymetr) <br>
         $a µm = $mm mm (milimetr) <br>
         $a µm = $a µm (mikrometr) <br>
         $a µm = $nanom nm (nanometr) <br> 
         </tr>
         </tbody>
         </table>";
}

function Nanometr($a) {
    $Gigam = $a * 0.000000000000000001;
    $Megam = $a * 0.000000000000001;
    $Km = $a * 0.000000000001;
    $m = $a * 0.000000001;
    $dm = $a * 0.00000001;
    $cm = $a * 0.0000001;
    $mm = $a * 0.000001;
    $microm = $a * 0.001;

    echo "<font size='4'>
         <table>
         <tbody>
         $a nm = $Gigam Gm (Gigametr) <br>
         $a nm = $Megam Mm (Megametr) <br>
         $a nm = $Km Km (Kilometr) <br>
         $a nm = $m m (metr) <br>
         $a nm = $dm dm (decymetr) <br>
         $a nm = $cm cm (centymetr) <br>
         $a nm = $mm mm (milimetr) <br>
         $a nm = $microm µm (mikrometr) <br>
         $a nm = $a nm (nanometr) <br> 
         </tr>
         </tbody>
         </table>";
}

function Nanosekunda($a) {
    $mikros = $a * 0.001;
    $ms = $a * 0.000001;
    $s = $a * 0.000000001;
    $min = $a * 1.6 * 0.00000000001;
    $h = $a * 2.7 * 0.0000000000001;

    echo "<font size='4'>
         <table>
         <tbody>
         $a ns = $a nm (nanosekunda) <br>
         $a ns = $mikros µm (mikrosekunda) <br>
         $a ns = $ms ms (milisekunda) <br>
         $a ns = $s s (sekunda) <br>
         $a ns = $min min (minuta) <br>
         $a ns = $h h (godzina) <br>
         </tr>
         </tbody>
         </table>";
}

function Mikrosekunda($a) {
    $ns = $a * 1000;
    $ms = $a * 0.001;
    $s = $a * 0.000001;
    $min = $a * 1.6 * 0.00000001;
    $h = $a * 2.7 * 0.0000000001;

    echo "<font size='4'>
         <table>
         <tbody>
         $a µs = $ns ns (nanosekunda) <br>
         $a µs = $a µs (mikrosekunda) <br>
         $a µs = $ms ms (milisekunda) <br>
         $a µs = $s s (sekunda) <br>
         $a µs = $min min (minuta) <br>
         $a µs = $h h (godzina) <br>
         </tr>
         </tbody>
         </table>";

}

function Milisekunda($a) {
    $ns = $a * 1000000;
    $mikros = $a * 1000;
    $s = $a * 0.001;
    $min = $a * 1.6 * 0.00001;
    $h = $a * 2.7 * 0.0000001;

    echo "<font size='4'>
         <table>
         <tbody>
         $a ms = $ns ns (nanosekunda) <br>
         $a ms = $mikros µs (mikrosekunda) <br>
         $a ms = $a ms (milisekunda) <br>
         $a ms = $s s (sekunda) <br>
         $a ms = $min min (minuta) <br>
         $a ms = $h h (godzina) <br>
         </tr>
         </tbody>
         </table>";

}

function Sekunda($a) {
    $ns = $a * 100000000;
    $mikros = $a * 1000000;
    $ms = $a * 1000;
    $min = $a * 1.6 * 0.01;
    $h = $a * 2.7 * 0.0001;

    echo "<font size='4'>
         <table>
         <tbody>
         $a s = $ns ns (nanosekunda) <br>
         $a s = $mikros µs (mikrosekunda) <br>
         $a s = $a ms (milisekunda) <br>
         $a s = $a s (sekunda) <br>
         $a s = $min min (minuta) <br>
         $a s = $h h (godzina) <br>
         </tr>
         </tbody>
         </table>";

}

function Minuta($a) {
    $ns = $a * 6 * 10000000000;
    $mikros = $a * 6 * 10000000;
    $ms = $a * 6 * 10000;
    $s = $a * 60;
    $h = $a * 1.6 * 0.02;

    echo "<font size='4'>
         <table>
         <tbody>
         $a min = $ns ns (nanosekunda) <br>
         $a min = $mikros µs (mikrosekunda) <br>
         $a min = $ms ms (milisekunda) <br>
         $a min = $s s (sekunda) <br>
         $a min = $a min (minuta) <br>
         $a min = $h h (godzina) <br>
         </tr>
         </tbody>
         </table>";
}

function Godzina($a) {
    $ns = $a * 3.6 * 1000000000000;
    $mikros = $a * 3.6 * 1000000000;
    $ms = $a * 3.6 * 1000000;
    $s = $a * 3600;
    $min = $a * 60;

    echo "<font size='4'>
         <table>
         <tbody>
         $a h = $ns ns (nanosekunda) <br>
         $a h = $mikros µs (mikrosekunda) <br>
         $a h = $ms ms (milisekunda) <br>
         $a h = $s s (sekunda) <br>
         $a h = $min min (minuta) <br>
         $a h = $a h (godzina) <br>
         </tr>
         </tbody>
         </table>";
}

function Gigajul($a) {
    $mj = $a * 1000;
    $kj = $a * 1000000;
    $j = $a * 1000000000;
    $dj = $a * 10000000000;
    $mil = $a * 1000000000000;
    $mik = $a * 1000000000000000;
    $nano = $a * 1000000000000000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a GJ = $a GJ (Gigadżul) <br>
         $a GJ = $mj MJ (Megadżul) <br>
         $a GJ = $kj KJ (Kilodżul) <br>
         $a GJ = $j J (Dżul) <br>
         $a GJ = $dj dJ (Decydżul) <br>
         $a GJ = $mil mJ (Milidżul) <br>
         $a GJ = $mik µJ (Mikrodżul) <br>
         $a GJ = $nano nJ (Nanodżul) <br>
         </tr>
         </tbody>
         </table>";
}

function Megajul($a) {
    $gj = $a * 0.001;
    $kj = $a * 1000;
    $j = $a * 1000000;
    $dj = $a * 10000000;
    $mil = $a * 1000000000;
    $mik = $a * 1000000000000;
    $nano = $a * 1000000000000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a MJ = $gj GJ (Gigadżul) <br>
         $a MJ = $a MJ (Megadżul) <br>
         $a MJ = $kj KJ (Kilodżul) <br>
         $a MJ = $j J (Dżul) <br>
         $a MJ = $dj dJ (Decydżul) <br>
         $a MJ = $mil mJ (Milidżul) <br>
         $a MJ = $mik µJ (Mikrodżul) <br>
         $a MJ = $nano nJ (Nanodżul) <br>
         </tr>
         </tbody>
         </table>";
}

function Kilojul($a) {
    $gj = $a * 0.000001;
    $mj = $a * 0.001;
    $j = $a * 1000;
    $dj = $a * 10000;
    $mil = $a * 1000000;
    $mik = $a * 1000000000;
    $nano = $a * 100000000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a KJ = $gj GJ (Gigadżul) <br>
         $a KJ = $mj MJ (Megadżul) <br>
         $a KJ = $a KJ (Kilodżul) <br>
         $a KJ = $j J (Dżul) <br>
         $a KJ = $dj dJ (Decydżul) <br>
         $a KJ = $mil mJ (Milidżul) <br>
         $a KJ = $mik µJ (Mikrodżul) <br>
         $a KJ = $nano nJ (Nanodżul) <br>
         </tr>
         </tbody>
         </table>";
}

function Jul($a) {
    $gj = $a * 0.000000001;
    $mj = $a * 0.000001;
    $kj = $a * 0.001;
    $dj = $a * 10;
    $mil = $a * 1000;
    $mik = $a * 1000000;
    $nano = $a * 100000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a J = $gj GJ (Gigadżul) <br>
         $a J = $mj MJ (Megadżul) <br>
         $a J = $kj KJ (Kilodżul) <br>
         $a J = $a J (Dżul) <br>
         $a J = $dj dJ (Decydżul) <br>
         $a J = $mil mJ (Milidżul) <br>
         $a J = $mik µJ (Mikrodżul) <br>
         $a J = $nano nJ (Nanodżul) <br>
         </tr>
         </tbody>
         </table>";
}

function Decyjul($a) {
    $gj = $a * 0.0000000001;
    $mj = $a * 0.0000001;
    $kj = $a * 0.0001;
    $j = $a * 0.1;
    $mil = $a * 100;
    $mik = $a * 100000;
    $nano = $a * 100000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a dJ = $gj GJ (Gigadżul) <br>
         $a dJ = $mj MJ (Megadżul) <br>
         $a dJ = $kj KJ (Kilodżul) <br>
         $a dJ = $j J (Dżul) <br>
         $a dJ = $a dJ (Decydżul) <br>
         $a dJ = $mil mJ (Milidżul) <br>
         $a dJ = $mik µJ (Mikrodżul) <br>
         $a dJ = $nano nJ (Nanodżul) <br>
         </tr>
         </tbody>
         </table>";
}

function Milijul($a) {
    $gj = $a * 0.000000000001;
    $mj = $a * 0.000000001;
    $kj = $a * 0.000001;
    $j = $a * 0.001;
    $dj = $a * 0.01;
    $mik = $a * 1000;
    $nano = $a * 1000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a mJ = $gj GJ (Gigadżul) <br>
         $a mJ = $mj MJ (Megadżul) <br>
         $a mJ = $kj KJ (Kilodżul) <br>
         $a mJ = $j J (Dżul) <br>
         $a mJ = $dj dJ (Decydżul) <br>
         $a mJ = $a mJ (Milidżul) <br>
         $a mJ = $mik µJ (Mikrodżul) <br>
         $a mJ = $nano nJ (Nanodżul) <br>
         </tr>
         </tbody>
         </table>";
}

function Mikrojul($a) {
    $gj = $a * 0.0000000000000001;
    $mj = $a * 0.000000000001;
    $kj = $a * 0.0000000001;
    $j = $a * 0.000001;
    $dj = $a * 0.00001;
    $mil = $a * 0.001;
    $nano = $a * 1000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a µJ = $gj GJ (Gigadżul) <br>
         $a µJ = $mj MJ (Megadżul) <br>
         $a µJ = $kj KJ (Kilodżul) <br>
         $a µJ = $j J (Dżul) <br>
         $a µJ = $dj dJ (Decydżul) <br>
         $a µJ = $mil mJ (Milidżul) <br>
         $a µJ = $a µJ (Mikrodżul) <br>
         $a µJ = $nano nJ (Nanodżul) <br>
         </tr>
         </tbody>
         </table>";
}

function Nanojul($a) {
    $gj = $a * 0.000000000000000001;
    $mj = $a * 0.000000000000001;
    $kj = $a * 0.000000000001;
    $j = $a * 0.000000001;
    $dj = $a * 0.00000001;
    $mil = $a * 0.000001;
    $mik = $a * 0.001;

    echo "<font size='4'>
         <table>
         <tbody>
         $a nJ = $gj GJ (Gigadżul) <br>
         $a nJ = $mj MJ (Megadżul) <br>
         $a nJ = $kj KJ (Kilodżul) <br>
         $a nJ = $j J (Dżul) <br>
         $a nJ = $dj dJ (Decydżul) <br>
         $a nJ = $mil mJ (Milidżul) <br>
         $a nJ = $mik µJ (Mikrodżul) <br>
         $a nJ = $a nJ (Nanodżul) <br>
         </tr>
         </tbody>
         </table>";
}

function Tona($a) {
    $kg = $a * 1000;
    $dag = $a * 100000;
    $g = $a * 1000000;
    $dg = $a * 10000000;
    $cg = $a * 100000000;
    $mg = $a * 1000000000;
    $mik = $a * 1000000000000;
    $ng = $a * 1000000000000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a T = $a T (Tona) <br>
         $a T = $kg kg (Kilogram) <br>
         $a T = $dag dag (Dekagram) <br>
         $a T = $g g (gram) <br>
         $a T = $dg dg (Decygram) <br>
         $a T = $cg cg (centygram) <br>
         $a T = $mg mg (Miligram) <br>
         $a T = $mik µg (Mikrogram) <br>
         $a T = $ng ng (Nanogram) <br>
         </tr>
         </tbody>
         </table>";
}

function Kilogram($a) {
    $t = $a * 0.001;
    $dag = $a * 100;
    $g = $a * 1000;
    $dg = $a * 10000;
    $cg = $a * 100000;
    $mg = $a * 1000000;
    $mik = $a * 1000000000;
    $ng = $a * 100000000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a kg = $t T (Tona) <br>
         $a kg = $a kg (Kilogram) <br>
         $a kg = $dag dag (Dekagram) <br>
         $a kg = $g g (gram) <br>
         $a kg = $dg dg (Decygram) <br>
         $a kg = $cg cg (centygram) <br>
         $a kg = $mg mg (Miligram) <br>
         $a kg = $mik µg (Mikrogram) <br>
         $a kg = $ng ng (Nanogram) <br>
         </tr>
         </tbody>
         </table>";
}

function Dekagram($a) {
    $t = $a * 0.00001;
    $kg = $a * 0.01;
    $g = $a * 10;
    $dg = $a * 100;
    $cg = $a * 1000;
    $mg = $a * 10000;
    $mik = $a * 10000000;
    $ng = $a * 10000000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a dag = $t T (Tona) <br>
         $a dag = $kg kg (Kilogram) <br>
         $a dag = $a dag (Dekagram) <br>
         $a dag = $g g (gram) <br>
         $a dag = $dg dg (Decygram) <br>
         $a dag = $cg cg (centygram) <br>
         $a dag = $mg mg (Miligram) <br>
         $a dag = $mik µg (Mikrogram) <br>
         $a dag = $ng ng (Nanogram) <br>
         </tr>
         </tbody>
         </table>";
}

function Gram($a) {
    $t = $a * 0.000001;
    $kg = $a * 0.001;
    $dag = $a * 0.1;
    $dg = $a * 10;
    $cg = $a * 100;
    $mg = $a * 1000;
    $mik = $a * 1000000;
    $ng = $a * 100000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a g = $t T (Tona) <br>
         $a g = $kg kg (Kilogram) <br>
         $a g = $dag dag (Dekagram) <br>
         $a g = $a g (gram) <br>
         $a g = $dg dg (Decygram) <br>
         $a g = $cg cg (centygram) <br>
         $a g = $mg mg (Miligram) <br>
         $a g = $mik µg (Mikrogram) <br>
         $a g = $ng ng (Nanogram) <br>
         </tr>
         </tbody>
         </table>";
}

function Decygram($a) {
    $t = $a * 0.0000001;
    $kg = $a * 0.0001;
    $dag = $a * 0.01;
    $g = $a * 0.1;
    $cg = $a * 10;
    $mg = $a * 100;
    $mik = $a * 100000;
    $ng = $a * 100000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a dg = $t T (Tona) <br>
         $a dg = $kg kg (Kilogram) <br>
         $a dg = $dag dag (Dekagram) <br>
         $a dg = $g g (gram) <br>
         $a dg = $a dg (Decygram) <br>
         $a dg = $cg cg (centygram) <br>
         $a dg = $mg mg (Miligram) <br>
         $a dg = $mik µg (Mikrogram) <br>
         $a dg = $ng ng (Nanogram) <br>
         </tr>
         </tbody>
         </table>";
}

function Centygram($a) {
    $t = $a * 0.00000001;
    $kg = $a * 0.00001;
    $dag = $a * 0.001;
    $g = $a * 0.01;
    $dg = $a * 0.1;
    $mg = $a * 10;
    $mik = $a * 10000;
    $ng = $a * 10000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a cg = $t T (Tona) <br>
         $a cg = $kg kg (Kilogram) <br>
         $a cg = $dag dag (Dekagram) <br>
         $a cg = $g g (gram) <br>
         $a cg = $dg dg (Decygram) <br>
         $a cg = $a cg (centygram) <br>
         $a cg = $mg mg (Miligram) <br>
         $a cg = $mik µg (Mikrogram) <br>
         $a cg = $ng ng (Nanogram) <br>
         </tr>
         </tbody>
         </table>";
}

function Miligram($a) {
    $t = $a * 0.000000001;
    $kg = $a * 0.000001;
    $dag = $a * 0.0001;
    $g = $a * 0.001;
    $dg = $a * 0.01;
    $cg = $a * 0.1;
    $mik = $a * 1000;
    $ng = $a * 1000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a mg = $t T (Tona) <br>
         $a mg = $kg kg (Kilogram) <br>
         $a mg = $dag dag (Dekagram) <br>
         $a mg = $g g (gram) <br>
         $a mg = $dg dg (Decygram) <br>
         $a mg = $cg cg (centygram) <br>
         $a mg = $a mg (Miligram) <br>
         $a mg = $mik µg (Mikrogram) <br>
         $a mg = $ng ng (Nanogram) <br>
         </tr>
         </tbody>
         </table>";
}

function Mikrogram($a) {
    $t = $a * 0.000000000001;
    $kg = $a * 0.0000000001;
    $dag = $a * 0.0000001;
    $g = $a * 0.000001;
    $dg = $a * 0.00001;
    $cg = $a * 0.0001;
    $mg = $a * 0.001;
    $ng = $a * 1000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a µg = $t T (Tona) <br>
         $a µg = $kg kg (Kilogram) <br>
         $a µg = $dag dag (Dekagram) <br>
         $a µg = $g g (gram) <br>
         $a µg = $dg dg (Decygram) <br>
         $a µg = $cg cg (centygram) <br>
         $a µg = $mg mg (Miligram) <br>
         $a µg = $a µg (Mikrogram) <br>
         $a µg = $ng ng (Nanogram) <br>
         </tr>
         </tbody>
         </table>";
}

function Nanogram($a) {
    $t = $a * 0.000000000000001;
    $kg = $a * 0.000000000001;
    $dag = $a * 0.0000000001;
    $g = $a * 0.000000001;
    $dg = $a * 0.00000001;
    $cg = $a * 0.0000001;
    $mg = $a * 0.000001;
    $mik = $a * 0.001;

    echo "<font size='4'>
         <table>
         <tbody>
         $a ng = $t T (Tona) <br>
         $a ng = $kg kg (Kilogram) <br>
         $a ng = $dag dag (Dekagram) <br>
         $a ng = $g g (gram) <br>
         $a ng = $dg dg (Decygram) <br>
         $a ng = $cg cg (centygram) <br>
         $a ng = $mg mg (Miligram) <br>
         $a ng = $mik µg (Mikrogram) <br>
         $a ng = $a ng (Nanogram) <br>
         </tr>
         </tbody>
         </table>";
}

function Kilometrsz($a) {
    $ms = $a * 1000000000;
    $dms = $a * 100000000000;
    $cms = $a * 100000000000000;
    $mms = $a * 1000000000000000000;
    $miks = $a * 1000000000000000000000000000;
    $nms = $a * 100000000000000000000000000000000000;
    $l = $a * 100000000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a km<sup>3</sup> = $a km<sup>3</sup> (Kilometr sześcienny) <br>
         $a km<sup>3</sup> = $ms m<sup>3</sup> (Metr sześcienny) <br>
         $a km<sup>3</sup> = $dms dm<sup>3</sup> (Decymetr sześcienny) <br>
         $a km<sup>3</sup> = $cms cm<sup>3</sup> (Centymetr sześcienny) <br>
         $a km<sup>3</sup> = $mms mm<sup>3</sup> (Milimetr sześcienny) <br>
         $a km<sup>3</sup> = $miks µm <sup>3</sup> (Mikrometr sześcienny) <br>
         $a km<sup>3</sup>= $nms nm<sup>3</sup> (Nanometr sześcienny) <br>
         $a km<sup>3</sup> = $l l (Litr) <br>
         </tr>
         </tbody>
         </table>";
}

function Metrsz($a) {
    $kms = $a * 0.000000001;
    $dms = $a * 1000;
    $cms = $a * 1000000;
    $mms = $a * 1000000000;
    $miks = $a * 10000000000000000000;
    $nms = $a * 1000000000000000000000000000;
    $l = $a * 1000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a m<sup>3</sup> = $kms km<sup>3</sup> (Kilometr sześcienny) <br>
         $a m<sup>3</sup> = $a m<sup>3</sup> (Metr sześcienny) <br>
         $a m<sup>3</sup> = $dms dm<sup>3</sup> (Decymetr sześcienny) <br>
         $a m<sup>3</sup> = $cms cm<sup>3</sup> (Centymetr sześcienny) <br>
         $a m<sup>3</sup> = $mms mm<sup>3</sup> (Milimetr sześcienny) <br>
         $a m<sup>3</sup> = $miks µm <sup>3</sup> (Mikrometr sześcienny) <br>
         $a m<sup>3</sup>= $nms nm<sup>3</sup> (Nanometr sześcienny) <br>
         $a m<sup>3</sup> = $l l (Litr) <br>
         </tr>
         </tbody>
         </table>";
}

function Decymetrsz($a) {
    $kms = $a * 0.000000000001;
    $ms = $a * 0.001;
    $cms = $a * 1000;
    $mms = $a * 1000000;
    $miks = $a * 1000000000000000;
    $nms = $a * 100000000000000000000000;
    $l = $a * 1;

    echo "<font size='4'>
         <table>
         <tbody>
         $a dm<sup>3</sup> = $kms km<sup>3</sup> (Kilometr sześcienny) <br>
         $a dm<sup>3</sup> = $ms m<sup>3</sup> (Metr sześcienny) <br>
         $a dm<sup>3</sup> = $a dm<sup>3</sup> (Decymetr sześcienny) <br>
         $a dm<sup>3</sup> = $cms cm<sup>3</sup> (Centymetr sześcienny) <br>
         $a dm<sup>3</sup> = $mms mm<sup>3</sup> (Milimetr sześcienny) <br>
         $a dm<sup>3</sup> = $miks µm <sup>3</sup> (Mikrometr sześcienny) <br>
         $a dm<sup>3</sup>= $nms nm<sup>3</sup> (Nanometr sześcienny) <br>
         $a dm<sup>3</sup> = $l l (Litr) <br>
         </tr>
         </tbody>
         </table>";
}

function Centymetrsz($a) {
    $kms = $a * 0.0000000000000001;
    $ms = $a * 0.0000001;
    $dms = $a * 0.001;
    $mms = $a * 1000;
    $miks = $a * 1000000000000;
    $nms = $a * 1000000000000000000000;
    $l = $a * 0.001;

    echo "<font size='4'>
         <table>
         <tbody>
         $a cm<sup>3</sup> = $kms km<sup>3</sup> (Kilometr sześcienny) <br>
         $a cm<sup>3</sup> = $ms m<sup>3</sup> (Metr sześcienny) <br>
         $a cm<sup>3</sup> = $dms dm<sup>3</sup> (Decymetr sześcienny) <br>
         $a cm<sup>3</sup> = $a cm<sup>3</sup> (Centymetr sześcienny) <br>
         $a cm<sup>3</sup> = $mms mm<sup>3</sup> (Milimetr sześcienny) <br>
         $a cm<sup>3</sup> = $miks µm <sup>3</sup> (Mikrometr sześcienny) <br>
         $a cm<sup>3</sup>= $nms nm<sup>3</sup> (Nanometr sześcienny) <br>
         $a cm<sup>3</sup> = $l l (Litr) <br>
         </tr>
         </tbody>
         </table>";
}

function Milimetrsz($a) {
    $kms = $a * 0.000000000000000001;
    $ms = $a * 0.000000001;
    $dms = $a * 0.0000001;
    $cms = $a * 0.001;
    $miks = $a * 1000000000;
    $nms = $a * 100000000000000000;
    $l = $a * 0.000001;

    echo "<font size='4'>
         <table>
         <tbody>
         $a mm<sup>3</sup> = $kms km<sup>3</sup> (Kilometr sześcienny) <br>
         $a mm<sup>3</sup> = $ms m<sup>3</sup> (Metr sześcienny) <br>
         $a mm<sup>3</sup> = $dms dm<sup>3</sup> (Decymetr sześcienny) <br>
         $a mm<sup>3</sup> = $cms cm<sup>3</sup> (Centymetr sześcienny) <br>
         $a mm<sup>3</sup> = $a mm<sup>3</sup> (Milimetr sześcienny) <br>
         $a mm<sup>3</sup> = $miks µm <sup>3</sup> (Mikrometr sześcienny) <br>
         $a mm<sup>3</sup>= $nms nm<sup>3</sup> (Nanometr sześcienny) <br>
         $a mm<sup>3</sup> = $l l (Litr) <br>
         </tr>
         </tbody>
         </table>";
}

function Mikrometrsz($a) {
    $kms = $a * 0.000000000000000000000000001;
    $ms = $a * 0.000000000000000001;
    $dms = $a * 0.00000000000000001;
    $cms = $a * 0.000000000001;
    $mms = $a * 0.000000001;
    $nms = $a * 1000000000;
    $l = $a * 0.00000000000000001;

    echo "<font size='4'>
         <table>
         <tbody>
         $a µm<sup>3</sup> = $kms km<sup>3</sup> (Kilometr sześcienny) <br>
         $a µm<sup>3</sup> = $ms m<sup>3</sup> (Metr sześcienny) <br>
         $a µm<sup>3</sup> = $dms dm<sup>3</sup> (Decymetr sześcienny) <br>
         $a µm<sup>3</sup> = $cms cm<sup>3</sup> (Centymetr sześcienny) <br>
         $a µm<sup>3</sup> = $mms mm<sup>3</sup> (Milimetr sześcienny) <br>
         $a µm<sup>3</sup> = $a µm <sup>3</sup> (Mikrometr sześcienny) <br>
         $a µm<sup>3</sup>= $nms nm<sup>3</sup> (Nanometr sześcienny) <br>
         $a µm<sup>3</sup> = $l l (Litr) <br>
         </tr>
         </tbody>
         </table>";
}

function Nanometrsz($a) {
    $kms = $a * 0.000000000000000000000000000000000001;
    $ms = $a * 0.000000000000000000000000001;
    $dms = $a * 0.0000000000000000000000001;
    $cms = $a * 0.000000000000000000001;
    $mms = $a * 0.000000000000000001;
    $miks = $a * 0.000000001;
    $l = $a * 0.00000000000000000000000001;

    echo "<font size='4'>
         <table>
         <tbody>
         $a nm<sup>3</sup> = $kms km<sup>3</sup> (Kilometr sześcienny) <br>
         $a nm<sup>3</sup> = $ms m<sup>3</sup> (Metr sześcienny) <br>
         $a nm<sup>3</sup> = $dms dm<sup>3</sup> (Decymetr sześcienny) <br>
         $a nm<sup>3</sup> = $cms cm<sup>3</sup> (Centymetr sześcienny) <br>
         $a nm<sup>3</sup> = $mms mm<sup>3</sup> (Milimetr sześcienny) <br>
         $a nm<sup>3</sup> = $miks µm <sup>3</sup> (Mikrometr sześcienny) <br>
         $a nm<sup>3</sup>= $a nm<sup>3</sup> (Nanometr sześcienny) <br>
         $a nm<sup>3</sup> = $l l (Litr) <br>
         </tr>
         </tbody>
         </table>";
}

function Litr($a) {
    $kms = $a * 0.000000000001;
    $ms = $a * 0.001;
    $dms = $a * 1;
    $cms = $a * 1000;
    $mms = $a * 1000000;
    $miks = $a * 1000000000000000;
    $nms = $a * 100000000000000000000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a l = $kms km<sup>3</sup> (Kilometr sześcienny) <br>
         $a l = $ms m<sup>3</sup> (Metr sześcienny) <br>
         $a l = $dms dm<sup>3</sup> (Decymetr sześcienny) <br>
         $a l = $cms cm<sup>3</sup> (Centymetr sześcienny) <br>
         $a l = $mms mm<sup>3</sup> (Milimetr sześcienny) <br>
         $a l = $miks µm <sup>3</sup> (Mikrometr sześcienny) <br>
         $a l= $nms nm<sup>3</sup> (Nanometr sześcienny) <br>
         $a l = $a l (Litr) <br>
         </tr>
         </tbody>
         </table>";
}

function Kilometrk($a) {
    $m = $a * 1000000;
    $dm = $a * 10000000;
    $cm = $a * 10000000000;
    $mm = $a * 1000000000000;
    $mi = $a * 1000000000000000000;
    $nm = $a * 1000000000000000000000000;
    $ar = $a * 10000;
    $ha = $a * 100;

    echo "<font size='4'>
         <table>
         <tbody>
         $a Km<sup>2</sup> = $a Km<sup>2</sup> (Kilometr kwadratowy) <br>
         $a Km<sup>2</sup> = $m m<sup>2</sup> (Metr kwadratowy) <br>
         $a Km<sup>2</sup> = $dm dm<sup>2</sup> (Decymetr kwadratowy) <br>
         $a Km<sup>2</sup> = $cm cm<sup>2</sup> (Centymetr kwadratowy) <br>
         $a Km<sup>2</sup> = $mm mm<sup>2</sup> (Milimetr kwadratowy) <br>
         $a Km<sup>2</sup> = $mi µm <sup>2</sup> (Mikrometr kwadratowy) <br>
         $a Km<sup>2</sup> = $nm nm<sup>2</sup> (Nanometr kwadratowy) <br>
         $a Km<sup>2</sup> = $ar a (Ar) <br>
         $a Km<sup>2</sup> = $ha ha (Hektar) <br>
         </tr>
         </tbody>
         </table>";
}

function Metrk($a) {
    $km = $a * 0.000001;
    $dm = $a * 100;
    $cm = $a * 10000;
    $mm = $a * 1000000;
    $mi = $a * 1000000000000;
    $nm = $a * 100000000000000000;
    $ar = $a * 0.01;
    $ha = $a * 0.0001;

    echo "<font size='4'>
         <table>
         <tbody>
         $a m<sup>2</sup> = $km Km<sup>2</sup> (Kilometr kwadratowy) <br>
         $a m<sup>2</sup> = $a m<sup>2</sup> (Metr kwadratowy) <br>
         $a m<sup>2</sup> = $dm dm<sup>2</sup> (Decymetr kwadratowy) <br>
         $a m<sup>2</sup> = $cm cm<sup>2</sup> (Centymetr kwadratowy) <br>
         $a m<sup>2</sup> = $mm mm<sup>2</sup> (Milimetr kwadratowy) <br>
         $a m<sup>2</sup> = $mi µm <sup>2</sup> (Mikrometr kwadratowy) <br>
         $a m<sup>2</sup> = $nm nm<sup>2</sup> (Nanometr kwadratowy) <br>
         $a m<sup>2</sup> = $ar a (Ar) <br>
         $a m<sup>2</sup> = $ha ha (Hektar) <br>
         </tr>
         </tbody>
         </table>";
}

function Decymetrk($a) {
    $km = $a * 0.00000001;
    $m = $a * 0.01;
    $cm = $a * 100;
    $mm = $a * 10000;
    $mi = $a * 10000000000;
    $nm = $a * 10000000000000000;
    $ar = $a * 0.0001;
    $ha = $a * 0.000001;

    echo "<font size='4'>
         <table>
         <tbody>
         $a dm<sup>2</sup> = $km Km<sup>2</sup> (Kilometr kwadratowy) <br>
         $a dm<<sup>2</sup> = $m m<sup>2</sup> (Metr kwadratowy) <br>
         $a dm<<sup>2</sup> = $a dm<sup>2</sup> (Decymetr kwadratowy) <br>
         $a dm<<sup>2</sup> = $cm cm<sup>2</sup> (Centymetr kwadratowy) <br>
         $a dm<<sup>2</sup> = $mm mm<sup>2</sup> (Milimetr kwadratowy) <br>
         $a dm<<sup>2</sup> = $mi µm <sup>2</sup> (Mikrometr kwadratowy) <br>
         $a dm<<sup>2</sup> = $nm nm<sup>2</sup> (Nanometr kwadratowy) <br>
         $a dm<<sup>2</sup> = $ar a (Ar) <br>
         $a dm<<sup>2</sup> = $ha ha (Hektar) <br>
         </tr>
         </tbody>
         </table>";
}

function Centymetrk($a) {
    $km = $a * 0.0000000001;
    $dm = $a * 0.01;
    $m = $a * 0.0001;
    $mm = $a * 100;
    $mi = $a * 100000000;
    $nm = $a * 100000000000000;
    $ar = $a * 0.000001;
    $ha = $a * 0.00000001;

    echo "<font size='4'>
         <table>
         <tbody>
         $a cm<sup>2</sup> = $km Km<sup>2</sup> (Kilometr kwadratowy) <br>
         $a cm<sup>2</sup> = $m m<sup>2</sup> (Metr kwadratowy) <br>
         $a cm<sup>2</sup> = $dm dm<sup>2</sup> (Decymetr kwadratowy) <br>
         $a cm<sup>2</sup> = $a cm<sup>2</sup> (Centymetr kwadratowy) <br>
         $a cm<sup>2</sup> = $mm mm<sup>2</sup> (Milimetr kwadratowy) <br>
         $a cm<sup>2</sup> = $mi µm <sup>2</sup> (Mikrometr kwadratowy) <br>
         $a cm<sup>2</sup> = $nm nm<sup>2</sup> (Nanometr kwadratowy) <br>
         $a cm<sup>2</sup> = $ar a (Ar) <br>
         $a cm<sup>2</sup> = $ha ha (Hektar) <br>
         </tr>
         </tbody>
         </table>";
}

function Milimetrk($a) {
    $km = $a * 0.000000000001;
    $dm = $a * 0.000001;
    $cm = $a * 0.01;
    $m = $a * 0.0001;
    $mi = $a * 1000000;
    $nm = $a * 100000000000;
    $ar = $a * 0.00000000001;
    $ha = $a * 0.00000001;

    echo "<font size='4'>
         <table>
         <tbody>
         $a mm<sup>2</sup> = $km Km<sup>2</sup> (Kilometr kwadratowy) <br>
         $a mm<sup>2</sup> = $m m<sup>2</sup> (Metr kwadratowy) <br>
         $a mm<sup>2</sup> = $dm dm<sup>2</sup> (Decymetr kwadratowy) <br>
         $a mm<sup>2</sup> = $cm cm<sup>2</sup> (Centymetr kwadratowy) <br>
         $a mm<sup>2</sup> = $a mm<sup>2</sup> (Milimetr kwadratowy) <br>
         $a mm<sup>2</sup> = $mi µm <sup>2</sup> (Mikrometr kwadratowy) <br>
         $a mm<sup>2</sup> = $nm nm<sup>2</sup> (Nanometr kwadratowy) <br>
         $a mm<sup>2</sup> = $ar a (Ar) <br>
         $a mm<sup>2</sup> = $ha ha (Hektar) <br>
         </tr>
         </tbody>
         </table>";
}

function Mikrometrk($a) {
    $km = $a * 0.000000000000000001;
    $dm = $a * 0.00000000001;
    $cm = $a * 0.000000001;
    $mm = $a * 0.000001;
    $m = $a * 0.000000000001;
    $nm = $a * 1000000;
    $ar = $a * 0.0000000000000001;
    $ha = $a * 0.00000000000001;

    echo "<font size='4'>
         <table>
         <tbody>
         $a µm<sup>2</sup> = $km Km<sup>2</sup> (Kilometr kwadratowy) <br>
         $a µm<sup>2</sup> = $m m<sup>2</sup> (Metr kwadratowy) <br>
         $a µm<sup>2</sup> = $dm dm<sup>2</sup> (Decymetr kwadratowy) <br>
         $a µm<sup>2</sup> = $cm cm<sup>2</sup> (Centymetr kwadratowy) <br>
         $a µm<sup>2</sup> = $mm mm<sup>2</sup> (Milimetr kwadratowy) <br>
         $a µm<sup>2</sup> = $a µm <sup>2</sup> (Mikrometr kwadratowy) <br>
         $a µm<sup>2</sup> = $nm nm<sup>2</sup> (Nanometr kwadratowy) <br>
         $a µm<sup>2</sup> = $ar a (Ar) <br>
         $a µm<sup>2</sup> = $ha ha (Hektar) <br>
         </tr>
         </tbody>
         </table>";
}

function Nanometrk($a) {
    $km = $a * 0.000000000000000000000001;
    $dm = $a * 0.00000000000000001;
    $m = $a * 0.000000000000000001;
    $cm = $a * 0.00000000000001;
    $mm = $a * 0.000000000001;
    $mi = $a * 0.000001;
    $ar = $a * 0.00000000000000000001;
    $ha = $a * 0.0000000000000000000001;

    echo "<font size='4'>
         <table>
         <tbody>
         $a nm<sup>2</sup> = $km Km<sup>2</sup> (Kilometr kwadratowy) <br>
         $a nm<sup>2</sup> = $m m<sup>2</sup> (Metr kwadratowy) <br>
         $a nm<sup>2</sup> = $dm dm<sup>2</sup> (Decymetr kwadratowy) <br>
         $a nm<sup>2</sup> = $cm cm<sup>2</sup> (Centymetr kwadratowy) <br>
         $a nm<sup>2</sup> = $mm mm<sup>2</sup> (Milimetr kwadratowy) <br>
         $a nm<sup>2</sup> = $mi µm <sup>2</sup> (Mikrometr kwadratowy) <br>
         $a nm<sup>2</sup> = $a nm<sup>2</sup> (Nanometr kwadratowy) <br>
         $a nm<sup>2</sup> = $ar a (Ar) <br>
         $a nm<sup>2</sup> = $ha ha (Hektar) <br>
         </tr>
         </tbody>
         </table>";
}

function Ar($a) {
    $km = $a * 0.0001;
    $dm = $a * 10000;
    $m = $a * 100;
    $cm = $a * 1000000;
    $mm = $a * 100000000;
    $mi = $a * 100000000000000;
    $nm = $a * 100000000000000000000;
    $ha = $a * 0.01;

    echo "<font size='4'>
         <table>
         <tbody>
         $a a<sup>2</sup> = $km Km<sup>2</sup> (Kilometr kwadratowy) <br>
         $a a<sup>2</sup> = $m m<sup>2</sup> (Metr kwadratowy) <br>
         $a a<sup>2</sup> = $dm dm<sup>2</sup> (Decymetr kwadratowy) <br>
         $a a<sup>2</sup> = $cm cm<sup>2</sup> (Centymetr kwadratowy) <br>
         $a a<sup>2</sup> = $mm mm<sup>2</sup> (Milimetr kwadratowy) <br>
         $a a<sup>2</sup> = $mi µm <sup>2</sup> (Mikrometr kwadratowy) <br>
         $a a<sup>2</sup> = $nm nm<sup>2</sup> (Nanometr kwadratowy) <br>
         $a a<sup>2</sup> = $a a (Ar) <br>
         $a a<sup>2</sup> = $ha ha (Hektar) <br>
         </tr>
         </tbody>
         </table>";
}

function Hektar($a) {
    $km = $a * 0.01;
    $dm = $a * 10000;
    $m = $a * 100000;
    $cm = $a * 100000000;
    $mm = $a * 10000000000;
    $mi = $a * 10000000000000000;
    $nm = $a * 10000000000000000000000;
    $ar = $a * 100;

    echo "<font size='4'>
         <table>
         <tbody>
         $a ha<sup>2</sup> = $km Km<sup>2</sup> (Kilometr kwadratowy) <br>
         $a ha<sup>2</sup> = $m m<sup>2</sup> (Metr kwadratowy) <br>
         $a ha<sup>2</sup> = $dm dm<sup>2</sup> (Decymetr kwadratowy) <br>
         $a ha<sup>2</sup> = $cm cm<sup>2</sup> (Centymetr kwadratowy) <br>
         $a ha<sup>2</sup> = $mm mm<sup>2</sup> (Milimetr kwadratowy) <br>
         $a ha<sup>2</sup> = $mi µm <sup>2</sup> (Mikrometr kwadratowy) <br>
         $a ha<sup>2</sup> = $nm nm<sup>2</sup> (Nanometr kwadratowy) <br>
         $a ha<sup>2</sup> = $ar a (Ar) <br>
         $a ha<sup>2</sup> = $a ha (Hektar) <br>
         </tr>
         </tbody>
         </table>";
}

function Celsjusz($a) {
    $k = $a * 274.15;
    $f = $a * 33.8;

    echo "<font size='4'>
         <table>
         <tbody>
        $a <span>&#176;</span>C = $a <span>&#176;</span>C (Celsjusz) <br>
        $a <span>&#176;</span>C = $k K (Kelwin) <br>
        $a <span>&#176;</span>C = $f <span>&#176;</span>F (Fahrenheit) <br>
         </tr>
         </tbody>
         </table>";
}

function Kelwin($a) {
    $c = $a * -272.15;
    $f = $a * -457.87;

    echo "<font size='4'>
         <table>
         <tbody>
        $a K = $c <span>&#176;</span>C (Celsjusz) <br>
        $a K = $a K (Kelwin) <br>
        $a K = $f <span>&#176;</span>F (Fahrenheit) <br>
         </tr>
         </tbody>
         </table>";
}

function Fahrenheit($a) {
    $c = $a * -17.2244;
    $k = $a * 255.926;

    echo "<font size='4'>
         <table>
         <tbody>
        $a <span>&#176;</span>F = $c <span>&#176;</span>C (Celsjusz) <br>
        $a <span>&#176;</span>F = $k K (Kelwin) <br>
        $a <span>&#176;</span>F = $a <span>&#176;</span>F (Fahrenheit) <br>
         </tr>
         </tbody>
         </table>";
}

function Kmh($a) {
    $kms = $a * 0.000277778;
    $mh = $a * 1000;
    $ms = $a * 0.277778;
    $mph = $a * 0.621427;
    $kn = $a * 0.540424;
    $c = $a * 0.000000000267;
    $ma = $a * 0.000816273;

    echo "<font size='4'>
         <table>
         <tbody>
         $a km/h = $a km/h (Kilometr na godzinę) <br>
         $a km/h = $kms km/s (Kilometr na sekundę) <br>
         $a km/s = $mh m/h (Metr na godzinę) <br>
         $a km/h = $ms m/s (Metr na sekundę) <br>
         $a km/h = $mph mph (Mila na godzinę) <br>
         $a km/h = $kn kn (Węzeł) <br>
         $a km/h = $c c (Prędkośc światła) <br>
         $a km/h = $ma ma (Mach) <br>
         </tr>
         </tbody>
         </table>";
}

function Kms($a) {
    $kmh = $a * 3600;
    $mh = $a * 3600010;
    $ms = $a * 1000;
    $mph = $a * 2237.14;
    $kn = $a * 1945.53;
    $c = $a * 0.00000333564;
    $ma = $a * 2.938584;

    echo "<font size='4'>
         <table>
         <tbody>
         $a km/s  = $kmh km/h (Kilometr na godzinę) <br>
         $a km/s = $a km/s (Kilometr na sekundę) <br>
         $a km/s = $mh m/h (Metr na godzinę) <br>
         $a km/s = $ms m/s (Metr na sekundę) <br>
         $a km/s = $mph mph (Mila na godzinę) <br>
         $a km/s = $kn kn (Węzeł) <br>
         $a km/s = $c c (Prędkośc światła) <br>
         $a km/s = $ma ma (Mach) <br>
         </tr>
         </tbody>
         </table>";
}

function Mh($a) {
    $kmh = $a * 0.00099997;
    $kms = $a * 0.000000277;
    $ms = $a * 0.000277777;
    $mph = $a * 0.000621425;
    $kn = $a * 0.000540422;
    $c = $a * 0.000009265643;
    $ma = $a * 0.162709;

    echo "<font size='4'>
         <table>
         <tbody>
         $a m/h = $kmh km/h (Kilometr na godzinę) <br>
         $a m/h = $kms km/s (Kilometr na sekundę) <br>
         $a m/h = $a m/h (Metr na godzinę) <br>
         $a m/h = $ms m/s (Metr na sekundę) <br>
         $a m/h = $mph mph (Mila na godzinę) <br>
         $a m/h = $kn kn (Węzeł) <br>
         $a m/h = $c c (Prędkośc światła) <br>
         $a m/h = $ma ma (Mach) <br>
         </tr>
         </tbody>
         </table>";
}

function Ms($a) {
    $kmh = $a * 3.6;
    $kms = $a * 0.001;
    $mh = $a * 3600.01;
    $mph = $a * 2.23714;
    $kn = $a * 1.94553;
    $c = $a * 0.003335641;
    $ma = $a * 0.00293858;

    echo "<font size='4'>
         <table>
         <tbody>
         $a m/s = $kmh km/h (Kilometr na godzinę) <br>
         $a m/s = $kms km/s (Kilometr na sekundę) <br>
         $a m/s = $mh m/h (Metr na godzinę) <br>
         $a m/s = $a m/s (Metr na sekundę) <br>
         $a m/s = $mph mph (Mila na godzinę) <br>
         $a m/s = $kn kn (Węzeł) <br>
         $a m/s = $c c (Prędkośc światła) <br>
         $a m/s = $ma ma (Mach) <br>
         </tr>
         </tbody>
         </table>";
}

function Mph($a) {
    $kmh = $a * 1.60934;
    $kms = $a * 0.00044704;
    $mh = $a * 1609.35;
    $ms = $a * 0.44704;
    $kn = $a * 0.869728;
    $c = $a * 0.01491165;
    $ma = $a * 0.00131366;

    echo "<font size='4'>
         <table>
         <tbody>
         $a mph = $kmh km/h (Kilometr na godzinę) <br>
         $a mph = $kms km/s (Kilometr na sekundę) <br>
         $a mph = $mh m/h (Metr na godzinę) <br>
         $a mph = $ms m/s (Metr na sekundę) <br>
         $a mph = $a mph (Mila na godzinę) <br>
         $a mph = $kn kn (Węzeł) <br>
         $a mph = $c c (Prędkośc światła) <br>
         $a mph = $ma ma (Mach) <br>
         </tr>
         </tbody>
         </table>";
}

function Kn($a) {
    $kmh = $a * 1.85198;
    $kms = $a * 0.00051444;
    $mh = $a * 1851.99;
    $ms = $a * 0.51444;
    $mph = $a * 1.15087;
    $c = $a * 0.01715987;
    $ma = $a * 0.00151172;

    echo "<font size='4'>
         <table>
         <tbody>
         $a kn = $kmh km/h (Kilometr na godzinę) <br>
         $a kn = $kms km/s (Kilometr na sekundę) <br>
         $a kn = $mh m/h (Metr na godzinę) <br>
         $a kn = $ms m/s (Metr na sekundę) <br>
         $a kn = $mph mph (Mila na godzinę) <br>
         $a kn = $a kn (Węzeł) <br>
         $a kn = $c c (Prędkośc światła) <br>
         $a kn = $ma ma (Mach) <br>
         </tr>
         </tbody>
         </table>";
}

function Lightspeed($a) {
    $kmh = $a * 1079253000;
    $kms = $a * 17987550;
    $mh = $a * 1079256000000;
    $ms = $a * 17987550000;
    $mph = $a * 670676600;
    $kn = $a * 583253800;
    $ma = $a * 880965;

    echo "<font size='4'>
         <table>
         <tbody>
         $a c = $kmh km/h (Kilometr na godzinę) <br>
         $a c = $kms km/s (Kilometr na sekundę) <br>
         $a c = $mh m/h (Metr na godzinę) <br>
         $a c = $ms m/s (Metr na sekundę) <br>
         $a c = $mph mph (Mila na godzinę) <br>
         $a c = $kn kn (Węzeł) <br>
         $a c = $a c (Prędkośc światła) <br>
         $a c = $ma ma (Mach) <br>
         </tr>
         </tbody>
         </table>";
}

function Mach($a) {
    $kmh = $a * 1225.08;
    $kms = $a * 0.3403;
    $mh = $a * 1225083;
    $ms = $a * 340.3;
    $mph = $a * 761.298;
    $kn = $a * 662.062;
    $c = $a * 0.00000113512;

    echo "<font size='4'>
         <table>
         <tbody>
         $a ma = $kmh km/h (Kilometr na godzinę) <br>
         $a ma  = $kms km/s (Kilometr na sekundę) <br>
         $a ma  = $mh m/h (Metr na godzinę) <br>
         $a ma  = $ms m/s (Metr na sekundę) <br>
         $a ma  = $mph mph (Mila na godzinę) <br>
         $a ma  = $kn kn (Węzeł) <br>
         $a ma  = $c c (Prędkośc światła) <br>
         $a ma  = $a ma (Mach) <br>
         </tr>
         </tbody>
         </table>";
}

function Niuton($a) {
    $dyn = $a * 100000;
    $kg = $a * 0.101972;
    $gn = $a * 0.000000001;
    $mega = $a * 0.000001;
    $kn = $a * 0.001;
    $hn = $a * 0.01;
    $dn = $a * 10;
    $mn = $a * 1000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a N = $a N (niuton) <br>
         $a N = $dyn dyn (dyna) <br>
         $a N = $kg kG (kilogram-siła) <br>
         $a N = $gn GN (giganiuton) <br>
         $a N = $mega MN (meganiuton) <br>
         $a N = $kn kN (kiloniuton) <br>
         $a N = $hn hN (hektoniuton) <br>
         $a N = $dn dN (decyniuton) <br>
         $a N = $mn mN (miliniuton) <br>
         </tr>
         </tbody>
         </table>";
}

function Dyna($a) {
    $n = $a * 0.00001;
    $kg = $a * 0.00000101972;
    $gn = $a * 0.00000000000001;
    $mega = $a * 0.00000000001;
    $kn = $a * 0.00000001;
    $hn = $a * 0.00000001;
    $dn = $a * 0.0001;
    $mn = $a * 0.01;

    echo "<font size='4'>
         <table>
         <tbody>
         $a dyn = $n N (niuton) <br>
         $a dyn = $a dyn (dyna) <br>
         $a dyn = $kg kG (kilogram-siła) <br>
         $a dyn = $gn GN (giganiuton) <br>
         $a dyn = $mega MN (meganiuton) <br>
         $a dyn = $kn kN (kiloniuton) <br>
         $a dyn = $hn hN (hektoniuton) <br>
         $a dyn = $dn dN (decyniuton) <br>
         $a dyn = $mn mN (miliniuton) <br>
         </tr>
         </tbody>
         </table>";
}

function Kilosila($a) {
    $n = $a * 9.80665;
    $dyn = $a * 980665;
    $gn = $a * 0.00000000980665;
    $mega = $a * 0.00000980665;
    $kn = $a * 0.00980665;
    $hn = $a * 0.0980665;
    $dn = $a * 98.0665;
    $mn = $a * 9806.65;

    echo "<font size='4'>
         <table>
         <tbody>
         $a kG = $n N (niuton) <br>
         $a kG = $dyn dyn (dyna) <br>
         $a kG = $a kG (kilogram-siła) <br>
         $a kG = $gn GN (giganiuton) <br>
         $a kG = $mega MN (meganiuton) <br>
         $a kG = $kn kN (kiloniuton) <br>
         $a kG = $hn hN (hektoniuton) <br>
         $a kG = $dn dN (decyniuton) <br>
         $a kG = $mn mN (miliniuton) <br>
         </tr>
         </tbody>
         </table>";
}

function Giganiuton($a) {
    $n = $a * 1000000000;
    $dyn = $a * 10000000000000;
    $kg = $a * 101971600;
    $mega = $a * 1000;
    $kn = $a * 1000000;
    $hn = $a * 10000000;
    $dn = $a * 10000000000;
    $mn = $a * 1000000000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a GN = $n N (niuton) <br>
         $a GN = $dyn dyn (dyna) <br>
         $a GN = $kg kG (kilogram-siła) <br>
         $a GN = $a GN (giganiuton) <br>
         $a GN = $mega MN (meganiuton) <br>
         $a GN = $kn kN (kiloniuton) <br>
         $a GN = $hn hN (hektoniuton) <br>
         $a GN = $dn dN (decyniuton) <br>
         $a GN = $mn mN (miliniuton) <br>
         </tr>
         </tbody>
         </table>";
}

function Meganiuton($a) {
    $n = $a * 1000000;
    $dyn = $a * 100000000000;
    $kg = $a * 101972;
    $gn = $a * 0.001;
    $kn = $a * 1000;
    $hn = $a * 10000;
    $dn = $a * 10000000;
    $mn = $a * 1000000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a MN = $n N (niuton) <br>
         $a MN = $dyn dyn (dyna) <br>
         $a MN = $kg kG (kilogram-siła) <br>
         $a MN = $gn GN (giganiuton) <br>
         $a MN = $a MN (meganiuton) <br>
         $a MN = $kn kN (kiloniuton) <br>
         $a MN = $hn hN (hektoniuton) <br>
         $a MN = $dn dN (decyniuton) <br>
         $a MN = $mn mN (miliniuton) <br>
         </tr>
         </tbody>
         </table>";
}

function Kiloniuton($a) {
    $n = $a * 1000;
    $dyn = $a * 100000000;
    $kg = $a * 101.972;
    $gn = $a * 0.000001;
    $mega = $a * 0.001;
    $hn = $a * 10;
    $dn = $a * 10000;
    $mn = $a * 1000000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a kN = $n N (niuton) <br>
         $a kN = $dyn dyn (dyna) <br>
         $a kN = $kg kG (kilogram-siła) <br>
         $a kN = $gn GN (giganiuton) <br>
         $a kN = $mega MN (meganiuton) <br>
         $a kN = $a kN (kiloniuton) <br>
         $a kN = $hn hN (hektoniuton) <br>
         $a kN = $dn dN (decyniuton) <br>
         $a kN = $mn mN (miliniuton) <br>
         </tr>
         </tbody>
         </table>";
}

function Hektoniuton($a) {
    $n = $a * 100;
    $dyn = $a * 10000000;
    $kg = $a * 10.1972;
    $gn = $a * 0.0000001;
    $mega = $a * 0.0001;
    $kn = $a * 0.1;
    $dn = $a * 1000;
    $mn = $a * 100000;

    echo "<font size='4'>
         <table>
         <tbody>
         $a hN = $n N (niuton) <br>
         $a hN = $dyn dyn (dyna) <br>
         $a hN = $kg kG (kilogram-siła) <br>
         $a hN = $gn GN (giganiuton) <br>
         $a hN = $mega MN (meganiuton) <br>
         $a hN = $kn kN (kiloniuton) <br>
         $a hN = $a hN (hektoniuton) <br>
         $a hN = $dn dN (decyniuton) <br>
         $a hN = $mn mN (miliniuton) <br>
         </tr>
         </tbody>
         </table>";
}

function Decyniuton($a) {
    $n = $a * 0.1;
    $dyn = $a * 10000;
    $kg = $a * 0.0101972;
    $gn = $a * 0.0000000001;
    $mega = $a * 0.0000001;
    $kn = $a * 0.0001;
    $hn = $a * 0.001;
    $mn = $a * 100;

    echo "<font size='4'>
         <table>
         <tbody>
         $a dN = $n N (niuton) <br>
         $a dN = $dyn dyn (dyna) <br>
         $a dN = $kg kG (kilogram-siła) <br>
         $a dN = $gn GN (giganiuton) <br>
         $a dN = $mega MN (meganiuton) <br>
         $a dN = $kn kN (kiloniuton) <br>
         $a dN = $hn hN (hektoniuton) <br>
         $a dN = $a dN (decyniuton) <br>
         $a dN = $mn mN (miliniuton) <br>
         </tr>
         </tbody>
         </table>";
}

function Miliniuton($a) {
    $n = $a * 0.001;
    $dyn = $a * 100;
    $kg = $a * 0.000101972;
    $gn = $a * 0.000000000001;
    $mega = $a * 0.000000001;
    $kn = $a * 0.000001;
    $hn = $a * 0.0001;
    $dn = $a * 0.01;

    echo "<font size='4'>
         <table>
         <tbody>
         $a mN = $n N (niuton) <br>
         $a mN = $dyn dyn (dyna) <br>
         $a mN = $kg kG (kilogram-siła) <br>
         $a mN = $gn GN (giganiuton) <br>
         $a mN = $mega MN (meganiuton) <br>
         $a mN = $kn kN (kiloniuton) <br>
         $a mN = $hn hN (hektoniuton) <br>
         $a mN = $dn dN (decyniuton) <br>
         $a mN = $a mN (miliniuton) <br>
         </tr>
         </tbody>
         </table>";
}

function Gigapaskal($a) {
    $mega = $a * 1000;
    $hpa = $a * 10000000;
    $dapa = $a * 100000000;
    $pa = $a * 1000000000;
    $cpa = $a * 100000000000;
    $mpa = $a * 1000000000000;
    $bar = $a * 10000;
    $psi = $a * 145033;

    echo "<font size='4'>
         <table>
         <tbody>
         $a GPa = $a GPa (gigapaskal) <br>
         $a GPa = $mega MPa (megapaskal) <br>
         $a GPa = $hpa hPa (hektopaskal) <br>
         $a GPa = $dapa daPa (dekapaskal) <br>
         $a GPa = $pa Pa (paskal) <br>
         $a GPa = $cpa cPa (centypaskal) <br>
         $a GPa = $mpa mPa (milipaskal) <br>
         $a GPa = $bar bar (bar) <br>
         $a GPa = $psi psi (funt-siła na cal kwadratowy) <br>
         </tr>
         </tbody>
         </table>";
}

function Megapaskal($a) {
    $giga = $a * 0.001;
    $hpa = $a * 10000;
    $dapa = $a * 100000;
    $pa = $a * 1000000;
    $cpa = $a * 100000000;
    $mpa = $a * 1000000000;
    $bar = $a * 10;
    $psi = $a * 145.033;

    echo "<font size='4'>
         <table>
         <tbody>
         $a MPa = $giga GPa (gigapaskal)
         $a MPa = $a MPa (megapaskal) <br>
         $a MPa = $hpa hPa (hektopaskal) <br>
         $a MPa = $dapa daPa (dekapaskal) <br>
         $a MPa = $pa Pa (paskal) <br>
         $a MPa = $cpa cPa (centypaskal) <br>
         $a MPa = $mpa mPa (milipaskal) <br>
         $a MPa = $bar bar (bar) <br>
         $a MPa = $psi psi (funt-siła na cal kwadratowy) <br>
         </tr>
         </tbody>
         </table>";
}

function Hektopaskal($a) {
    $giga = $a * 0.0000001;
    $mega = $a * 0.0001;
    $dapa = $a * 10;
    $pa = $a * 100;
    $cpa = $a * 10000;
    $mpa = $a * 100000;
    $mikro = $a * 100000000;
    $bar = $a * 0.001;
    $psi = $a * 0.0145033;

    echo "<font size='4'>
         <table>
         <tbody>
         $a hPa = $giga GPa (gigapaskal)
         $a hPa = $mega MPa (megapaskal) <br>
         $a hPa = $a hPa (hektopaskal) <br>
         $a hPa = $dapa daPa (dekapaskal) <br>
         $a hPa = $pa Pa (paskal) <br>
         $a hPa = $cpa cPa (centypaskal) <br>
         $a hPa = $mpa mPa (milipaskal) <br>
         $a hPa = $mikro μPa (mikropaskal) <br>
         $a hPa = $bar bar (bar) <br>
         $a hPa = $psi psi (funt-siła na cal kwadratowy) <br>
         </tr>
         </tbody>
         </table>";
}

function Dekapaskal($a) {
    $giga = $a * 0.00000001;
    $mega = $a * 0.00001;
    $hpa = $a * 0.1;
    $pa = $a * 10;
    $cpa = $a * 1000;
    $mpa = $a * 10000;
    $bar = $a * 0.0001;
    $psi = $a * 0.00145033;

    echo "<font size='4'>
         <table>
         <tbody>
         $a daPa = $giga GPa (gigapaskal)
         $a daPa = $mega MPa (megapaskal) <br>
         $a daPa  = $hpa hPa (hektopaskal) <br>
         $a daPa = $a daPa (dekapaskal) <br>
         $a daPa = $pa Pa (paskal) <br>
         $a daPa = $cpa cPa (centypaskal) <br>
         $a daPa = $mpa mPa (milipaskal) <br>
         $a daPa = $bar bar (bar) <br>
         $a daPa = $psi psi (funt-siła na cal kwadratowy) <br>
         </tr>
         </tbody>
         </table>";
}

function Paskal($a) {
    $giga = $a * 0.000000001;
    $mega = $a * 0.000001;
    $hpa = $a * 0.01;
    $dapa = $a * 0.1;
    $cpa = $a * 100;
    $mpa = $a * 1000;
    $bar = $a * 0.00001;
    $psi = $a * 0.000145033;

    echo "<font size='4'>
         <table>
         <tbody>
         $a Pa = $giga GPa (gigapaskal)
         $a Pa = $mega MPa (megapaskal) <br>
         $a Pa = $hpa hPa (hektopaskal) <br>
         $a Pa = $dapa daPa (dekapaskal) <br>
         $a Pa = $a Pa (paskal) <br>
         $a Pa = $cpa cPa (centypaskal) <br>
         $a Pa = $mpa mPa (milipaskal) <br>
         $a Pa = $bar bar (bar) <br>
         $a Pa = $psi psi (funt-siła na cal kwadratowy) <br>
         </tr>
         </tbody>
         </table>";
}

function Centypaskal($a) {
    $giga = $a * 0.00000000001;
    $mega = $a * 0.00000001;
    $hpa = $a * 0.00001;
    $dapa = $a * 0.001;
    $pa = $a * 0.01;
    $mpa = $a * 10;
    $bar = $a * 0.0000001;
    $psi = $a * 0.00000145033;

    echo "<font size='4'>
         <table>
         <tbody>
         $a cPa = $giga GPa (gigapaskal)
         $a cPa = $mega MPa (megapaskal) <br>
         $a cPa = $hpa hPa (hektopaskal) <br>
         $a cPa = $dapa daPa (dekapaskal) <br>
         $a cPa = $pa Pa (paskal) <br>
         $a cPa = $a cPa (centypaskal) <br>
         $a cPa = $mpa mPa (milipaskal) <br>
         $a cPa = $bar bar (bar) <br>
         $a cPa = $psi psi (funt-siła na cal kwadratowy) <br>
         </tr>
         </tbody>
         </table>";
}

function Milipaskal($a) {
    $giga = $a * 0.000000000000001;
    $mega = $a * 0.000000000001;
    $hpa = $a * 0.00001;
    $dapa = $a * 0.0001;
    $pa = $a * 0.001;
    $cpa = $a * 0.1;
    $bar = $a * 0.00000001;
    $psi = $a * 0.000000145033;

    echo "<font size='4'>
         <table>
         <tbody>
         $a mPa = $giga GPa (gigapaskal)
         $a mPa = $mega MPa (megapaskal) <br>
         $a mPa = $hpa hPa (hektopaskal) <br>
         $a mPa = $dapa daPa (dekapaskal) <br>
         $a mPa = $pa Pa (paskal) <br>
         $a mPa = $cpa cPa (centypaskal) <br>
         $a mPa = $a mPa (milipaskal) <br>
         $a mPa = $bar bar (bar) <br>
         $a mPa = $psi psi (funt-siła na cal kwadratowy) <br>
         </tr>
         </tbody>
         </table>";
}

function Bar($a) {
    $giga = $a * 0.0001;
    $mega = $a * 0.1;
    $hpa = $a * 1000;
    $dapa = $a * 10000;
    $pa = $a * 100000;
    $cpa = $a * 0.0000001;
    $mpa = $a * 0.00000001;
    $psi = $a * 14.5033;

    echo "<font size='4'>
         <table>
         <tbody>
         $a bar = $giga GPa (gigapaskal)
         $a bar = $mega MPa (megapaskal) <br>
         $a bar = $hpa hPa (hektopaskal) <br>
         $a bar = $dapa daPa (dekapaskal) <br>
         $a bar = $pa Pa (paskal) <br>
         $a bar = $cpa cPa (centypaskal) <br>
         $a bar = $mpa mPa (milipaskal) <br>
         $a bar = $a bar (bar) <br>
         $a bar = $psi psi (funt-siła na cal kwadratowy) <br>
         </tr>
         </tbody>
         </table>";
}

function Psi($a) {
    $giga = $a * 0.000006895;
    $mega = $a * 0.006895;
    $hpa = $a * 68.95;
    $dapa = $a * 689.5;
    $pa = $a * 6895;
    $cpa = $a * 689500;
    $mpa = $a * 6895000;
    $bar = $a * 0.06895;

    echo "<font size='4'>
         <table>
         <tbody>
         $a psi = $giga GPa (gigapaskal)
         $a psi = $mega MPa (megapaskal) <br>
         $a psi = $hpa hPa (hektopaskal) <br>
         $a psi = $dapa daPa (dekapaskal) <br>
         $a psi = $pa Pa (paskal) <br>
         $a psi = $cpa cPa (centypaskal) <br>
         $a psi = $mpa mPa (milipaskal) <br>
         $a psi = $bar bar (bar) <br>
         $a psi = $a psi (funt-siła na cal kwadratowy) <br>
         </tr>
         </tbody>
         </table>";
}

?>