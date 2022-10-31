<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
    $con = mysqli_connect('localhost','root',''); // hosting name is local host , user name default in xampp is root , password default is empty
    mysqli_select_db($con, 'session'); // data base name


    $select = "SELECT * FROM first"; // type sql query and save it on variable which starts with dolar sign
    $result = mysqli_query($con, $select);

    while ($res = mysqli_fetch_assoc($result)) {
        $name = $res['name'];
        $mail = $res['email'];
        echo $name . " - " . $mail . " <br/> ";
    }

    ?>
    <?php require 'header.php' ?>
</body>
</html>