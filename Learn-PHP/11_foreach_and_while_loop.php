<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>

<?php 


echo "<h1>Loops in PHP</h1>";
echo "<h4>for loop</h4>";
$categories=['Clothes','SmartPhones','Electronics','Groceries'];
for($i=0 ; $i<count($categories);$i++){
    var_dump( $categories[$i]);
}


echo "<h4>foreach loop</h4>";
$categories=['Clothes','SmartPhones','Electronics','Groceries'];
foreach($categories as $category){  //we can use capital 'AS'
    echo $category."\n";
}


echo "<h4>while loop</h4>";
$counter = 1;

while ($counter <= 5) {
    echo "Counter is: $counter\n";
    $counter++;
}

echo "<h4>do-while loop</h4>";
$counter = 6;

do {
    echo "Counter is: $counter\n";
    $counter++;
} while ($counter <= 5);

echo "<h4>Break keyword</h4>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo "Value: $i\n";
}

echo "<h4>Continue keyword</h4>";
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue;
    }
    echo "Value: $i\n";
}


?>
</body>
</html>