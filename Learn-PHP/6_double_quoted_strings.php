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
        $string= 'Hello from String';
        echo "{$string}_!";     
        // with double quotes we can acess string variable with the {} and append any string directly
        echo "<br>";
        echo "----------------------------------------------------------";
       

        echo "\n";   //newline character  --- difference between the br and the \n is that the n will give the newline in source code and br will give break line in browser
        echo "\t -"; // tab space

        echo "<br>";
        $name="Vinay";
        $place="Pune";

        echo "Hello My name is {$name} and i am from {$place} ";
        echo "\n";
        echo "Length of string is : ".strlen($name);

        $text = <<<'EOT'
        This is a nowdoc string.
        Variables like $name will not be expanded.
        EOT;

        echo "<br/>";
        echo "----------------------------------------------------------";
        echo "<h4>Multiple line strings using EOD</h4>";
        echo $text;

        echo "<br/>";
        $array = explode(" ", "Hello world"); // Outputs: ['Hello', 'world']
        $string = implode("-", ["Hello", "world"]); // Outputs: Hello-world

        
        

        ?>
    </pre>
</body>
</html>