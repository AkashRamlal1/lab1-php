<!DOCTYPE html>
<html>
<style>
    div{
        border:3px solid black;
        margin:10px;
        padding:10px;
    }
</style>
<body>
<h1>rekenen</h1> 

<?php

$getal1 = rand(1,10);
$getal2 = rand(1,10);

$som1 = $getal1 + $getal2;
$som2 = $getal1 - $getal2;
$som3 = $getal1 * $getal2;
$som4 = $getal1 / $getal2;

echo "<h2>random sommen</h2>";
echo "<p>in deze opdracht maak je 4 sommen met random gegenereerde getallen</p>";
echo "<div>";

echo $getal1 . " + " . $getal2 . " = " . $som1 . "<br>";
echo $getal1 . " - " . $getal2 . " = " . $som2 . "<br>";
echo $getal1 . " * " . $getal2 . " = " . $som3 . "<br>";
echo $getal1 . " / " . $getal2 . " = " . $som4 . "<br>";

echo "</div>";

echo "<div>";

for ($x = 0; $x <= 10; $x+=1) {
    echo "$x x  6  = " . ($x * 6) . " <br> ";
}

echo "</div>";

function tafelSom($getal){
    $som = 0;
    for ($x = 0; $x <= 10; $x++) {
        echo "$x x  $getal  = " . ($x * $getal) . " <br> ";
        $som += ($x * $getal);
    }
    return $som;
}

echo "<div>";
$resultaat = tafelSom(5);

echo "</div>";

$getallen = array(3, 5, 8, 12);

foreach ($getallen as $getal) {
    echo "<div>";
    echo "De tafel van " . $getal . " is:<br>";
    for ($x = 0; $x <= 10; $x++) {
        $product = $x * $getal;
        echo "$x x $getal = $product <br>";
    }
    echo "</div>";
}



?>
<div>
<p>de volgende opdracht is mijn einddracht Lab 1 php Goedemorgen</p>
<a href="goedemorgen.php">next</a>
<a href="index.php">ga terug naar opdrachten</a>
</div>

   

</body>
</html>
