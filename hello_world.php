<!DOCTYPE html>
<html>
<style>
    a {
        border: 2px solid black;
        margin: 10px;
        padding: 10px;
    }
    
    .box {
        border: 2px solid black;
        margin: 10px;
        padding: 10px;
    }
</style>

<body>
    <?php
    echo "<div class='box'>";
    define("hi", "hello world");
    echo hi, "<br>";
    $text = "Learning PHP";
    define("text1", "hello world");
    $text = text1;
    echo "<br>", $text, "<br>";
    
    $hello = "hello";
    $world = "world";
    echo "<h1>" . $hello . " " . $world . "</h1>";


    $hello_world = array("hello", "world");
    print($hello_world[0]. " " .$hello_world[1]);

    echo "</div>";

    ?>

    <p style = " border:2px solid black; margin:10px; padding:10px; width:320px;">de volgende opdracht is rekenen in php</p>
    <a href="rekenen.php">next</a>
    <a href="index.php">ga terug naar opdrachten</a>
</body>
</html>