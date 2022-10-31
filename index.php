<?php $file_css = "style.css"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $file_css ;?>">
</head>
<body>

<?php 
    echo "<h1> say hi for my first website</h1>"; 
?>

<p>
    <?php echo " hy from inside paragraph"; ?>
</p>

<?php
    $foodArray = ["Eggs", "Bacon", "HashBrowns", "Beans", "Bread","banan"];

    foreach ($foodArray as $food)  {
        echo $food ."<br />";
    }

    if (mkdir("ahmed")) {
        echo 'the file has just created';
    }  else{
        echo "file already done before";
    }

?>

</body>
</html>