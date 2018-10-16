<?php
session_start();
include 'inc/submit.php';

$planets = ["Mercury", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"];
$planetRand = rand(0,5);

function randomCode(){
    $code;
    
    
    
    for($i = 0; $i < 4; $i++){
        $numbers = rand(10,199);
        $code += $numbers;
    }
    
    
    
    
    echo "<h2 class='green-text' id='code'>" . $_SESSION["firstName"][0] . $_SESSION["firstName"][1] . $_SESSION["firstName"][2] . $code . $_SESSION["birthday"][0] . $_SESSION["birthday"][1] . "</h2>";
}


?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="./css/styles.css" type="text/css" />
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    
    <title>Sign Up</title>
</head>
<body>
    <header>
            <nav class="nav-wrapper white z-depth-0">
              <div class="container">
                <a href="index.php" class="brand-logo"><img id="logo" src="img/logo.png"></img></a>
                <a href="#" class="sidenav-trigger" data-target="mobile-menu">
                  <i class="material-icons black-text">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                  <li><a class="black-text" href="index.php">Sign up</a></li>
                  
                </ul>
                <ul class="sidenav grey lighten-2" id="mobile-menu">
                  <li><a href="index.php">Sign up</a></li>
                </ul>
              </div>
            </nav>
            
            <div class="container">
            <div class="row">
                  
                    <!--Last first name input-->
                    <div class="input-field col s12 m12 l12" id="textbox">
                        <?php
                            echo "<h1 class='center white-text'>Hello " . $_SESSION["firstName"] . "!</h1>" ;
                        ?>
                        <h3 class="white-text center">You're space code is:</h3>
                        <div class="center">
                            <?php
                            randomCode();
                            ?>
                        </div>
                        <h5 class="center white-text">We are looking forward to seeing you</h5>
                        <?php
                        echo "<h5 class='center white-text'>on our journey to ". $planets[$planetRand] . "!</h5>";
                        ?>
                    </div>
            </div>
            </div>

            
            
          </header>

          <!-- Compiled and minified JavaScript -->
          <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
          
          <script>
            $(document).ready(function(){
              $('.sidenav').sidenav();
            });
            
            $(document).ready(function() {
            M.updateTextFields();
            });
  
          </script>
          
    </body>

</html>