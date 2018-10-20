<?php
include "inc/sqlConnection.php";

$dbConn = getConnection("quotes");

function displayAuthorInfo(){
    global $dbConn;
    
    $authorId = $_GET['authorId'];
    $sql = "SELECT * FROM q_author WHERE authorId = $authorId";
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //print_r($record);
    
    echo "<strong>Bio:</strong> <br> " . $record['bio'] . "<br> <br>";
    echo "<strong>Day of Birth:</strong> " . $record['dob'] . "<br>";
    echo "<strong>Day of Dead:</strong> ". $record['dod'] . "<br> <br>";
    echo "<img src='". $record['picture'] ."'></img> <br>";
}
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css" type="text/css" />
        <title> authour info </title>
    </head>
    <body>
        <h1>Author info</h1>
        
        <br>
        
        <?=displayAuthorInfo()?>
        
        
    </body>
</html>