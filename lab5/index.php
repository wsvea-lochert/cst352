<?php
include "inc/sqlConnection.php";

$dbConn = getConnection("quotes");

function displayRandomQuotes(){
    global $dbConn;
    $randomNumber = rand(0,26);
    
    //$sql = "SELECT * FROM q_quotes ORDER BY length(quote) limit $randomNumber, 1 ";
    
    $sql = "SELECT * FROM q_quotes 
            NATURAL JOIN q_author  
            LIMIT $randomNumber,1";
    $statement = $dbConn ->prepare($sql);
    $statement ->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC); // returns all records //fetch() returns one quote // fetchAll gets all the records
    
    //print_r($records);
    
    foreach($records as $record){
        echo "<p class='quote'>" . $record['quote'] . "</p>" . "<br>";
        echo "<a target='authorInfo' href='authorInfo.php?authorId=".$record['authorId']."'> -";
        echo  $record['firstName'] . "  " . $record['lastName'];
        echo "</a>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css" type="text/css" />
        <title> Random Famous quote </title>
    </head>
    <body>
        
        <div class="container">
            <h1> - Random Quote - </h1>
            <?php
            displayRandomQuotes();
            ?> <br>

        <iframe name="authorInfo" frameborder="0" width="700" height="1000"> </iframe>
        </div>
        
        
    </body>
</html>