<?php

//print_r($_GET);

$randomBackground = "img/sea.jpg";

 if(isset($_GET['Keyword'])){ //check if there is a parameter in the url named keyword
    
    include 'api/pixabayAPI.php';
    
    $Keyword = $_GET['Keyword'];
    
    $layout = "Horizontal";
    
    if(isset($_GET["Layout"])){
      $layout = $_GET['Layout']; 

    }
    
    if(!empty($_GET['Category'])){
      $Keyword = $_GET['Category'];
      
    }
    
    $imageURLs = getImageURLs($Keyword, $layout);
    
    $randomIndex = array_rand($imageURLs);
    
    $randomBackground = $imageURLs[$randomIndex];
    
    echo "You search for: " . $Keyword . " In " . $layout;
    
    shuffle($imageURLs);
    
 } 

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Lab 4: image slider</title>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet"  type="text/css" />
        <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Roboto');
        
        *{
            font-family: 'Roboto', sans-serif;
            color: black;
            
        }
        
        body{
            background-image: url(img/sea.jpg);
            background-image: url(<?=$randomBackground?>);
            background-size: cover;
            color: black;
        }
        #radioo{
        background-color: white;
        width: 13em;
        border-radius: 1em;
        padding: 1em;
        margin: 2em auto;
        color: black;
        }
        
        #btnGo {
        font-size: 1.3em;
        color: black;
        border-radius:20px;
        width:5em;
        background-color: white;
        }
        
        #txtBox{
          text-align: center;
          width: 10em;
          color: #6A6B83;
          font-size:1.3em;
        }

        </style>
        
    </head>
    <body>
        
        <form method="GET">
            <input id="txtBox" type="text" name="Keyword" placeholder="Keyword" value="<?=$_GET["Keyword"]?>"/>
            <div id="radioo">
            <input type="radio" name="Layout" value="horizontal" id="H-layout"
            <?php
            if($_GET['Layout'] == "horizontal"){
              echo checked;
            }
            
            ?>
            />
            
            <label for="H-layout">Horizontal</label> 
            <input type="radio" name="Layout" value="vertical" id="V-layout" 
            <?php
            if($_GET['Layout'] == "vertical"){
              echo checked;
            }
            
            ?>
            
            />
            <label for="V-layout">Vertical</label> 
            </div>
            
            <select name="Category">
              <option value="">Select one</option>
              <option>Mountain</option>
              <option>Sea</option>
              <option>Sky</option>
              <option>Car</option>
              <option>Winter</option>
            </select>
            <input id="btnGo" type="submit" value="Go!"/>
        </form>
        <?php
          if(isset($Keyword) && !empty($Keyword)){
            ?>
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            
            <?php
              for ($i = 0; $i < 6; $i++){
                echo "<li data-target='#carouselExampleIndicators' data-slide-to='$i'></li>";
              }
            ?>
          </ol>
          <div class="carousel-inner">
            <?php
              for ($i=0; $i < 7; $i++) {
                 echo "<div class='carousel-item "; 
                 
                 if ($i == 0) {
                   echo " active ";
                 }
                 
                 echo "'>";
                 echo "<img class=\"d-block w-100\" src=\"".$imageURLs[$i]."\" alt=\"slide\">";
                 echo "</div>";
              }
            ?>
          </div>
          
          
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
          <?php
            }
            else{
              echo "<h1>Enter a keyword or select a Category to use slider</h1>";
            }
          ?>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>