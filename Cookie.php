<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    if  (isset($_GET['btn'])){
        setcookie('bg-color',$_GET['color'],time()+3600);
        // echo $_COOKIE['bg-color'];
        header('location:homecookies.php');
    }
    
    // echo $_COOKIE["bg-color"];
    // print_r($_COOKIE);
    ?>
    <form method="get" action=''>
        <input type="color" name="color">
       
            <a href='homecookies.php?color=<?php echo $_COOKIE['bg-color']?>'> 
                <input type="submit" value="Valider" name='btn'> 
            </a>
        

    </form>
    
</body>
</html>