
    <?php 

    echo "<h2>String</h2>";
    $greetings="Hello";
    $name="Vinay";   //Two strings cannot be concatinated 
    echo  $name;
    

    echo "<h2>Number</h2>";
    $greetings= 24;
    echo $greetings+ $name;
     

     echo "<h2>Float</h2>";
    $greetings= 99.9;
     echo  $greetings;

     echo "<h2>boolean</h2>";
     $isLoggedIn= true;
     $isloggedOut = false;
      echo  $isLoggedIn;
      echo $isloggedOut;

      echo "<h2>Empty Variable</h2>";
      $emptyVar = NULL; 
      echo $emptyVar;

      echo "<h2>Constant Variable</h2>";
      define("PI", 3.14); 
      echo PI;            
    ?>
