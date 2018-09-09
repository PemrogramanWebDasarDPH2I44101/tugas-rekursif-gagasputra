<?php

function rekursif($kolom, $baris) {
    if ($kolom > 0) {
        if ($baris > 0) {
            echo "* ";
            $baris--;
            rekursif ($kolom, $baris);
        }
        else {
            echo "<br>";
            $kolom--;
            rekursif ($kolom, $kolom);
        }
    }
}
rekursif(5, 5);

echo "<br><br>";

//====================================================================================

function rekursif2($kolom, $baris, $nilai) {
    if ($kolom <= $nilai) {
        if ($baris <= $kolom) {
            echo "$baris ";
            $baris++;
            rekursif2 ($kolom, $baris, $nilai);
        }
        else {
            echo "<br>";
            $kolom++;
            rekursif2 ($kolom, 1, $nilai);
        }
    }
}
rekursif2(1, 1, 5);

?>
