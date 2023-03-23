<?php
    if(!isset($_GET["a"]) || !isset($_GET["b"])) {
        $output = 'Helytelen, nincs feldolgozandó adat!';
    } else  {
        $a = $_GET["a"];
        $b = $_GET["b"];
        while ($a != $b) {
            if ($a > $b) $a -= $b;
            else $b -= $a;
        }
        $output = 'LNKO = ' . $a;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LNKO2</title>
</head>
<body>
    <?php
        echo $output;
    ?>

</body>
</html>
