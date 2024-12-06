<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative arrays</title>
</head>
<body>
    <?php 
     $categories=['Clothes','SmartPhones','Electronics','Groceries'];
    $student_one = array("Maths"=>95, "Physics"=>90,  

    "Chemistry"=>96, "English"=>93,  

    "Computer"=>98); 
   

    echo "<h4>Associative arrays</h4>";
    var_dump($student_one);

    echo "<h4>sum of all elements</h4>";
    $sum=0; 

    foreach($student_one as $student){
        $sum+=$student;
    }
    echo "Sum is: {$sum}";

    echo "<h4>Keys and values of array</h4>";
    var_dump(array_values($student_one)); echo"<br>";
    var_dump(array_keys($student_one));

    
    echo "<h4>length of array using count()</h4>";
    var_dump(count($categories));

    echo"<br>";
    echo "<h4>Appending element in array</h4>";
    $categories['new']='Acessories';
    var_dump($categories);


    echo"<br>";
    echo "<h4>Check element in array</h4>";
    var_dump(in_array($categories['new'],$categories));

    //if new element added to the array then it gets new index automatically
    //we use all functions with associative arrays same as arrays

    echo"<br>";
    echo "<h4>Array Chunks</h4>";
    $input = [10 => 'a', 20 => 'b', 30 => 'c', 40 => 'd'];
$chunks = array_chunk($input, 2, true); //if key is set to false then the default index is given like 0,1,2
print_r($chunks);

    ?>
</body>
</html>