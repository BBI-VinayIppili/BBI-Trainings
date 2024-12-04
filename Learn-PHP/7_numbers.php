<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>


<body>
<pre>

<?php
echo "<h3>Numbers in PHP</h3>";
$meaning = 42;
echo ($meaning*2)."\n";
echo ($meaning+2)."\n";
echo ($meaning-2)."\n";
echo ($meaning/2)."\n";

echo "<h3>Operations on Numbers:-</h3>";

echo "<h3>Check whether integer</h3>";
var_dump(is_int($meaning)); // check whether it is integer or not 

echo "<h3>Converting float to integer</h3>";
echo intval("42.5"); // 42


echo "<h3>Using round()</h3>";
echo round(3.14159, 2); // 3.14


echo "<h3>Using float</h3>";
echo floor(3.99); // 3


echo "<h3>Using ceil</h3>";
echo ceil(3.14); // 4

echo "<h3>Random numbers using rand_int() php 7.1 onwards</h3>";
echo random_int(1, 100); // Random secure number between 1 and 100

echo "<h3>Add two string having int in them like '5'+'6' will give 11</h3>";
echo '5'+'6'; // 11
?>



    </pre>


</body>

</html>