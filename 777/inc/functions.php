<?php
/*
    $randomValue1 = rand(0,2);
    $randomValue2 = rand(0,2);
    $randomValue3 = rand(0,2);*/




function displaySymbol($randomValue, $pos){
        
    switch ($randomValue) {
        case 0: $symbol = "seven";
                break;
        case 1: $symbol = "cherry";
                break;
        case 2: $symbol = "lemon";
                break;
        case 3: $symbol = "orange";
                break;
    }
    echo "<img id='reel$pos' src='img/$symbol.png' alt='$symbol' title='". ucfirst($symbol) . "' width='70'>";
    
    }
    
    
    
    function displayPoints($randomValue1, $randomValue2, $randomValue3){
        echo "<div id='output'>";
        if($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3){
            switch($randomValue1){
                case 0: $totalPoints = 1000;
                        echo "<h1>Jackpot!<h1>";
                        break;
                case 1: $totalPoints = 300;
                        break;
                case 2: $totalPoints = 250;
                        break;
                case 3: $totalPoints = 900;
                        break;
            }
            
            echo "<h2>You won $totalPoints points!</h2>";
        } else{
            echo "<h3> Try Agien! </h3>";
        }
        echo "</div>";
    }






?>