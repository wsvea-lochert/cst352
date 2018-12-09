<?php 
session_start();
include 'sqlConnection.php';
$dbConn = getConnection("cars");


function displayAllCars(){
    global $dbConn;
    
    if (isset($_GET["from"]) && isset($_GET["to"])/* || isset($_GET["fromMilage"]) && isset($_GET["toMilage"])*/) {
        
        $from = $_GET["from"];
        $to = $_GET["to"];
        $fromMilage = $_GET["fromMilage"];
        $toMilage = $_GET["toMilage"];
        
        
        if ($to == null) {
            $to = 99999999999;
        }
        
        if ($from == null) {
            $from = 0;
        }
        
        if ($fromMilage == null) {
            $fromMilage = 0;
        }
        
        if ($toMilage == null) {
            $toMilage = 999999999;
        }
    
             $sql = "SELECT *
                      FROM car
                      WHERE price BETWEEN ".$from." AND " .$to. "
                      AND milage BETWEEN ".$fromMilage." AND " .$toMilage. "
                      ORDER BY price DESC";
                      
    } else 
    {  //Display all cars, by maker name
    
             $sql = "SELECT *
                      FROM car
                      ORDER BY maker
                      ASC";
        }
        
        
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $cars = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    
    if ($cars == null ) {
    echo '<div class="jumbotron">
            <h1 class="display-4">No cars matching your criteria!</h1>
            <p class="lead">You can reset by clicking the reset button in the filter menu</p>
        </div>';
    }
    
    return $cars;
}


?>

