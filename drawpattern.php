<?php
function drawPattern($baris, $pattern)
{
    switch ($pattern) {
        case "upsideleft":
            for ($i = $baris; $i >= 1; $i--) {
                for ($j = $i; $j <= $baris; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
            break;
        case "downsideleft":
            for ($i = $baris; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
            break;
        case "upsideright":
            for ($i = 1; $i <= $baris; $i++) {
                for ($j = 1; $j <= $baris - $i; $j++) {
                    echo "&nbsp;&nbsp;";
                }
                for ($k = 1; $k <= $i; $k++) {
                    echo "*";
                }
                echo "<br>";
            }
            break;
        case "downsideright":
            for ($i = $baris; $i >= 1; $i--) {
                for ($j = 1; $j <= $baris - $i; $j++) {
                    echo "&nbsp;&nbsp;";
                }
                for ($k = 1; $k <= $i; $k++) {
                    echo "*";
                }
                echo "<br>";
            }
            break;
        default:
            echo "Pola tidak dikenali.";
            break;
    }
}

$baris = 5;
drawPattern($baris, "upsideleft"); // memanggil fungsi dengan memilih pola upside_left
