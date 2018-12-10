<?php 

session_start();

 //verifies that username and password are valid
 $_SESSION['error'] = "";

 include "sqlConnection.php";
 $dbConn = getConnection("cars");

 $username = $_POST['username_signup'];
 $password = sha1($_POST['password_signup']);
 $password1 = sha1($_POST['password_confirm']);
 $p = $_POST['password_signup'];
 $p1 = $_POST['password_confirm'];
 

 
 //User not added
 if($p !== $p1) {
    //echo '<script language="javascript">';
    //echo 'alert("Password not confirmed, please try again");';
    //echo '</script>';
    echo "hakl";
    return;
    //header("location: ../signup.php");
 }
 //User added
 else {

  $sql = "INSERT INTO car_signup (username, password)
            VALUES ( :username, :password); ";
  
  $namedParameters = array();
  $namedParameters[':username'] = $username;
  $namedParameters[':password'] = $password;
  
  $stmt = $dbConn->prepare($sql);                 
  $stmt->execute($namedParameters);
  
  //echo "Your account has been created!";
  
  header("location: ../index.php");
  
 }

?>