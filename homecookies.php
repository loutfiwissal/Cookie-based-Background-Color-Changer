<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to Home Cookies Page</h1>
    <p>Your selected background color is applied.</p>
    <a href="Cookie.php">Change Background Color</a>
    <?php 
    $color=$_COOKIE['bg-color'];
    // echo $color;
    // echo '<body style="background-color:$color"> </body>';
    echo "<style>body { background-color: $color; }</style>";
    ?>
</body>
</html>