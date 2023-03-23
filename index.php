<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Szorzótábla</title>
</head>
<body>
<table border="1">
    <tr>
        <?php
            for ($i =1; $i<=10;$i++) {
                echo '<td>';
                for($j=1; $j <= 10; $j++) {
                    echo $i . ' * ' . $j . ' = ' . $i * $j . '<br>';
                }
                echo '</td>';
            }
        ?>
    </tr>
    
</table>

</body>
</html>
