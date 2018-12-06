<?php 
session_start();
include 'sqlConnection.php';
$dbConn = getConnection("cars");


function displayAllCars(){
    global $dbConn;

    if (isset($_GET["from"]) && isset($_GET["to"])) {
        $from = $_GET["from"];
        $to = $_GET["to"];
        
        if ($to == null) {
            $to = 99999999999;
        }
        
        if ($from == null) {
            $from = 0;
        }
        
        //echo "<script>alert(".$from.");</script>";
             $sql = "SELECT *
                      FROM car
                      WHERE price BETWEEN ".$from." AND " .$to. "
                      ORDER BY price DESC";
                      
    } 
    else {
             $sql = "SELECT *
                      FROM car
                      ORDER BY maker
                      ASC";
        }
        
        
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $cars = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    
    if ($cars == null ) {
    echo "<script>alert('no cars yet //skal fjerne alert og fikse btstrp');</script>";

    //$carInfo = displayAllCars();
    }
    
    return $cars;
}


?>

