<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Var Dump</title>
</head>
<body>
    <pre>
        <?php
        echo"<h4>var_dump is used to get datatypes (inspect variables)</h4>";
         var_dump(42);
         var_dump("Hello");
         var_dump(99.7);
         var_dump("\n");
         $array=array(1,2,3);
         var_dump($array);

         echo "\n";

         echo"<h4>var_dump is used tocheck expressions get boolean output</h4>";
         var_dump(13<=13);
         var_dump(45<13);
         var_dump(45==13);
         var_dump(45==45);
         var_dump(45!==13);
         var_dump(45=='45');
         var_dump(45===45);
         var_dump(!45);
         var_dump("Vinay"==='Vinay');
         var_dump('vinay');
         echo phpversion();
        ?>
    </pre>
</body>
</html>