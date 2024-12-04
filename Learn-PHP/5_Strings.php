<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php

    echo 'I \'m a string '; // use \ so that we can use ' in the single quote string
    echo "<br>";
    echo "I'm a string";  
    echo "<br>";
    echo "----------------------------------------------------------";
    echo "<br>";
     

    $string= 'Hello from String';
    echo $string;
    echo "<br>";

    echo "----------------------------------------------------------";
    echo "<br>";
    $name="Vinay";
    $place="Pune";
    echo "I'\m ".$name." and I am from".$place;
    echo "<br>"; 

    echo "----------------------------------------------------------";
    echo "<br>";
    echo $string.'!!!';  // appending/concatinating string using (.)
     
     ?>

    </pre>
   
</body>
</html>