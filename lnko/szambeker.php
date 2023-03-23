<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>LNKO</title>
</head>
<body>
    <form action="lnko.php" method="get">
        1. szám: <input type="text" name="a" pattern="[1-9][0-9]{3}[0-9]*" required> (&ge; 1000)<br>
        2. szám: <input type="text" name="b" pattern="[1-9][0-9]{3}[0-9]*" required> (&ge; 1000)<br>
        <input type="submit" value="LNKO">
    </form>
</body>
</html>
