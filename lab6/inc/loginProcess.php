<?php
session_start();

//verifies that username and password are valid
$_SESSION['error'] = "";

include "sqlConnection.php";
$dbConn = getConnection("quotes");

$username = $_POST['username'];
$password = sha1($_POST['password']);

//single quotes makes sql injection possible
 /*$sql = "SELECT * 
         FROM q_admin 
         WHERE username = '$username' 
         AND   password = '$password' ";*/

//This sql prevents SQL INJECTION!!
 $sql = "SELECT * 
         FROM q_admin 
         WHERE username = :username 
         AND   password = :password ";

 $namedParameters = array();
 $namedParameters[":username"] = $username;
 $namedParameters[":password"] = $password;
         
 //echo $sql;
 $stmt = $dbConn->prepare($sql);
 $stmt->execute($namedParameters);
 $record = $stmt->fetch(PDO::FETCH_ASSOC); //we're expecting just one record
 
  //print_r($record);
 if (empty($record)){
  
     $_SESSION['error'] = "Error: Wrong Username or Password!!";
     header("location: ../login.php");

 } 
 
 else {
     
    $_SESSION['adminName'] = $record['firstName'] . " " . $record['lastName'];
    
    header("location: ../main.php"); //redirects to new site.
     
 }
 
 
 
 

 


?>