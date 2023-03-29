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
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
      #view-source {
        position: fixed;
        display: block;
        right: 0;
        bottom: 0;
        margin-right: 40px;
        margin-bottom: 40px;
        z-index: 900;
      }
      </style>
    <title>Area and Circumference</title>
  </head>

  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
          <h3>Area and Circumference</h3>
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a href="#calculator" class="mdl-layout__tab is-active">Calculator</a>
          <a href="#results" class="mdl-layout__tab">Results</a>
        </div>
      </header>
    </div>
    <?php
    $diameter = (float) $_POST['diameter']; 
    $area = pi()*pow($diameter/2,2);
    $circumference = $diameter * pi();

    echo "<h1>Your area is ".$area."!</h1>\n";
    echo "<h1>Your circumference is ".$circumference."!</h1>\n";
    ?>
    
  </body>
  
</html>