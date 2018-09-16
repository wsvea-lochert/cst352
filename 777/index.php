<?php
    
    include 'inc/functions.php';
    
    
    function play(){
    for($i = 1; $i < 4; $i++){
        ${"randomValue" . $i } = rand(0,3);
        displaySymbol(${"randomValue" . $i }, $i);
    }
    displayPoints($randomValue1, $randomValue2, $randomValue3);
    }
    
    
 
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id="main">
            
        
        
        <?php
        play();
        ?>
        
        <form>
            <input type="submit" value="Spin!"/>
        </form>
    
        </div>
       <!-- <img src="img/cherry.png" alt="cherry" title="Cherry" width="70" />-->
    </body>
</html>