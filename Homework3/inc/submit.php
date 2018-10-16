<?php
session_start();

$first_name = "";
$last_name = "";
$gender = "";
$birthdate = "";
$email = "";
$gender = "";
$agree = "";
$checked = "";

$first_nameError = $last_nameError = $genderError = $birthdateError = $emailError = $agreeError;

if(isset($_POST['signup'])){
    $checker = true;
    
    //first name check
    if(empty($_POST['first_name'])){
        $checker = false;
        $first_nameError = "First name is empty";
    }
    else{
        $first_name = $_POST["first_name"];
    }
    
    //Last name check
    if(empty($_POST["last_name"])){
        $checker = false;
        $last_nameError = "Last name is empty";
    }
    else{
        $last_name = $_POST["last_name"];
    }
    
    if(empty($_POST["gender"])){
        $checker = false;
        $genderError = "Please select gender";
    }
    else{
        $gender = $_POST["gender"];
    }
    
    if(empty($_POST["birthday"])){
        $checker = false;
        $birthdateError = "Please select date of birth";
    }
    else{
        $birthdate = $_POST["birthday"];
    }
    
    if(empty($_POST["email"])){
        $checker = false;
        $emailError = "Please enter your e-mail address";
    }
    else{
        $email = $_POST["email"];
    }
    
    if(!isset($_POST["agree"])){
        $checker = false;
        $agreeError = "Please agree to love this site!";
    }
    else{
        $agree = $_POST["agree"];
        $checked = "checked ='checked'";
    }
    
    if($checker){
        $_SESSION["firstName"] = $first_name;
        $_SESSION["lastName"] = $last_name;
        $_SESSION["gender"] = $gender;
        $_SESSION["birthday"] = $birthdate;
        
        
        header('Location: ./redeam.php');
    }
    
}




?>

