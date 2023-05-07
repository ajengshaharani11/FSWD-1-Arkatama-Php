<?php
function drawPattern2($pattern, $baris = 5, $symbol = '*')
{
    switch ($pattern) {
        case "upsideleft":
            for ($i = $baris; $i >= 1; $i--) {
                for ($j = $i; $j <= $baris; $j++) {
                    echo "$symbol ";
                }
                echo "<br>";
            }
            break;
        case "downsideleft":
            for ($i = $baris; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "$symbol ";
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
                    echo "$symbol";
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
                    echo "$symbol";
                }
                echo "<br>";
            }
            break;
        default:
            echo "Pola tidak dikenali.";
            break;
    }
}

drawPattern2("upsideleft", 6, '$');
echo "<br>";
drawPattern2("downsideleft", 10, '@');
echo "<br>";
drawPattern2("upsideright", 9, '#');
echo "<br>";
drawPattern2("downsideright", 7);
