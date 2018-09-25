<?php
    $rps  = array("paper", "rock", "scissors");
    $playerOneScore = array();
    $playerTwoScore= array();

    function rps(){
        global $rps;
        global $playerOneScore;
        global $playerTwoScore;
        
        $tieCounter = 0;
        $playerOneWins = 0;
        $playerTwoWins = 0;
        
        
        
        echo "<h2>Player 1</h2>";
        
        for($i = 0; $i < 3; $i++){
            shuffle($rps);
            $playerOne = $rps[rand(0,2)];
             echo "<img class='swirl-in-fwd' src='img/" . $playerOne.".png' alt='$playerOne'  widt='70px'>";
             array_push($playerOneScore, $playerOne);
        }
        
        echo "<br>";
        echo "<h2>Player 2</h2>";
        
        for($i = 0; $i < 3; $i++){
            shuffle($rps);
            $playerTwo = $rps[rand(0,2)];
             echo "<img class='swirl-in-fwd' class='slide-fwd-center' src='img/" . $playerTwo.".png' alt='$playerTwo' >";
             array_push($playerTwoScore, $playerTwo);
        }
        
        for ($i = 0; $i < 3; $i++)
        {
         if($playerOneScore[$i] == $playerTwoScore[$i]){
                $tieCounter++;
                if($tieCounter >= 2){
                    echo "<h3 class='text-shadow-pop-bottom'>Game is a tie</h3>";
                    return;
                }
            }
            else if($playerOneScore[$i] == "rock" && $playerTwoScore[$i] == "scissors"){
                $playerOneWins++;
                if($playerOneWins >= 2){
                    echo "<h3 class='text-shadow-pop-bottom'>Player 1 wins!</h3>";
                    return;
                }
            }
            else if($playerOneScore[$i] == "scissors" && $playerTwoScore[$i] == "paper"){
                $playerOneWins++;
                if($playerOneWins >= 2){
                    echo "<h3 class='text-shadow-pop-bottom'>Player 1 wins!</h3>";
                    return;
                }
            }
            else if($playerTwoScore[$i] == "rock" && $playerOneScore[$i] == "scissors"){
                $playerTwoWins++;
                if($playerTwoWins >= 2){
                    echo "<h3 class='text-shadow-pop-bottom'>Player 2 wins!</h3>";
                    return;
                }
            }
            else if($playerTwoScore[$i] == "scissors" && $playerOneScore[$i] == "paper"){
                $playerTwoWins++;
                if($playerTwoWins >= 2){
                    echo "<h3 class='text-shadow-pop-bottom'>Player 2 wins!</h3>";
                    return;
                }
            }
            else if($playerTwoScore[$i] == "paper" && $playerOneScore[$i] == "rock"){
                $playerTwoWins++;
                if($playerTwoWins >= 2){
                    echo "<h3 class='text-shadow-pop-bottom'>Player 2 wins!</h3>";
                    return;
                }
            }
             else if($playerOneScore[$i] == "paper" && $playerTwoScore[$i] == "rock"){
                $playerOneWins++;
                if($playerOneWins >= 2){
                    echo "<h3 class='text-shadow-pop-bottom'>Player 1 wins!</h3>";
                    return;
                }
            }
        
        }
        
        if($playerOneWins = 1 && $playerTwoWins = 1){
                echo "<h3 class='text-shadow-pop-bottom'>Game is a tie</h3>";
                    return;
                }
        
        
    }
?>