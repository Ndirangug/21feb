<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rectangle Area</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    <h1>Area Of A Rectangle</h1>
    <form action="rectangle.php" method="post">
    <p>Length: <input type="number" name="length" required></p>
    <p>Width: <input type="number" name="width" required></p>
    <input type="submit" name="submit" value="CALCULATE">
    </form>

    <?php
        if (isset($_POST['submit'])) {
            $length = $_POST['length'];
            $width = $_POST['width'];
            $area = $length * $width;
        echo "The area of a rectangle of lenth $length and width $width is $area";
        }
    ?>
    
</body>
</html>