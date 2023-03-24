<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="styles.css">
    <title>PHP Form</title>
  </head>

  <body>
    
    <?php
    $diameter = (float) $_POST['diameter']; 
    $area = pi()*pow($diameter/2,2);
    $circumference = $diameter * pi();

    echo "<h1>Your area is ".$area."!</h1>\n";
    echo "<h1>Your circumference is ".$circumference."!</h1>\n";
    ?>
    
  </body>
  
</html>