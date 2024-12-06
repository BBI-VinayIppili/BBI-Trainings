<?php 
$pageTitle="Arrays";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle;?></title>
</head>
<body>
    <?php
    
    //$categories=array('Clothes','SmartPhones','Electronics','Groceries');
    // arrays cannot be print using echo.
    //echo $categories; // gives errors

    //arrays in php are key value pairs.
    
    echo "<h1>Arrays in PHP</h1>";
    echo "<h4>Arrays in PHP is not same as the arrays as the arrays in the C and C++</h4>";
    $categories=['Clothes','SmartPhones','Electronics','Groceries'];
    var_dump($categories);
    
    echo"<br>";
    echo "<h4>print arrays using print_r()</h4>";
    print_r($categories);

    echo"<br>";


    echo "<h4>length of array using count()</h4>";
    var_dump(count($categories));
   

    echo "<h4>element present in array using in_array</h4>";
    var_dump(in_array('Electronics',$categories));


    echo"<br>";
    //check keys exist or not
    echo "<h4>Check key exists or not</h4>";
    var_dump(isset($categories[99]));
    var_dump(empty($categories[99]));

    echo"<br>";
    echo "<h4>Check Element exists or not</h4>";
    //check element exist or not
    var_dump($categories[3]);


    echo"<br>";
    echo "<h4>Updating elements in array</h4>";
    $categories[2]='Gaming';
    var_dump($categories);

    echo"<br>";
    echo "<h4>deleting element in array</h4>";
    unset($categories[1]);
    var_dump($categories);

    echo"<br>";
    echo "<h4>Appending element in array</h4>";
    $categories[]='Acessories';
    var_dump($categories);


    echo"<br>";
    echo "<h4>Unique elements in array</h4>";
    $names=['Raj','John','Sam','Rahul','Raj','Sam','Raju'];
    var_dump($names);echo"<br>";
    $uniquearray=array_unique($names); //this function returns the array and we need to store it seperately
    var_dump($uniquearray);

    echo"<br>";
    echo "<h4>Using Implode</h4>";
    $pieces = [1, "2", "three", 4.0];
    $glue = " and a ";
    echo implode($glue, $pieces);

    echo"<br>";
    echo "<h4>Dividing chunks</h4>";
    //array_chunk(array $array, int $size, bool $preserve_keys = false): array

    $users = ['User1', 'User2', 'User3', 'User4', 'User5'];
    $chunks = array_chunk($users, 2);
    
    foreach ($chunks as $chunk) {
        // Process each chunk (e.g., send batch emails)
        print_r($chunk);
    }
    
    ?>
</body>
</html>