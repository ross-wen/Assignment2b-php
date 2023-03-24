<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="area and circumference from diameter calculator">
    <meta name="keywords" content="ics2o, ross">
    <meta name="author" content="Ross Wen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Area and Circumference</title>
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