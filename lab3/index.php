<?php
 $deck = range(1,52);   // $deck = array(1,2,3,4,5,6,7... 52);
 shuffle($deck);
 //print_r($deck);
 $suit = array("clubs", "diamonds", "hearts","spades");
 $totalPoints = 0;

 function hand(){
    global $deck, $suit, $totalPoints;
    $aceCounter = 0;
    $pointCounter = 0;
    
    
    //$handPoints = 0;
    for($i = 1; $i < 6;$i++) {
        $lastCard = array_pop($deck);
        $faceValue = $lastCard % 13;
        //echo $faceValue . "-";
        
        //echo $lastCard . " ";
        if($faceValue==0){
            $faceValue = 13;
        }
        $indexSuit=($lastCard-1)/13;
        
        $pointCounter += $faceValue;  // $pointCounter += $faceValue;
        if($faceValue==1){
            echo "<img id='kort' src='cards/$suit[$indexSuit]/$faceValue.png' alt='$faceValue' title= '$faceValue' class='ace' />";
            $aceCounter++;
        }else{
           echo "<img id='kort' src='cards/$suit[$indexSuit]/$faceValue.png' alt='$faceValue' title= '$faceValue'/>";
        } 
    }
    echo $pointCounter;
    
    $totalPoints += $pointCounter;
    
    return $aceCounter;
 }
 
 function displayCard(){
     $suit = array("clubs","spades", "diamonds", "hearts");
     
     for($i=1; $i<6; $i++){
       $card = rand(1,13);
       echo "<img src ='cards/".$suit[rand(0,3)]."/$card.png' alt ='$card' title ='$card' />";
    }
 }
 
 function displayWinner($p1, $p2) {
     global $totalPoints;
    // echo "<h1>";
     if($p1 > $p2) { 
         echo "Player 1 wins $totalPoints Points";
     }
     else if($p1 < $p2) {
         echo "Player 2 wins $totalPoints Points";
     }
     else {
         echo "Tie game";
     }
    // echo "</h1>";
    
 }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 3: Ace Poker </title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <style>
            h1, h2, body {
                text-align: center;
            }
            .ace {
                border: 2px yellow solid;
            }
            
            #kort{
                margin:0.1em;
            }
        </style>
    </head>
    <body>
        <h1>Ace Poker</h1>
        <h2>Player with more aces wins all points.</h2>
        <?php
        
        echo "Player 1: ";
        $p1 = hand();
        //echo $p1;
           
         echo "<br/>";
        
        echo "Player 2: ";
        $p2 = hand();
        //echo $p2;
       
        ?>
        
        
        <h2>
            <?=displayWinner($p1, $p2)?>
        </h2>
        
    </body>
</html>