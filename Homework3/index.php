<?php
session_start();

include 'inc/submit.php';
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="./css/styles.css" type="text/css" />
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
     
    <title>Sign Up</title>
</head>
<body>
    <header>
            <nav class="nav-wrapper white z-depth-0">
              <div class="container">
                <a href="index.php" class="brand-logo"><img id="logo" src="img/logo.png"></img></a>
                <a href="#" class="sidenav-trigger" data-target="mobile-menu">
                  <i class="material-icons black-text">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                  <li><a class="black-text" href="index.php">Sign up</a></li>
                  
                </ul>
                <ul class="sidenav grey lighten-2" id="mobile-menu">
                  <li><a href="index.php">Sign up</a></li>
                </ul>
              </div>
            </nav>
            
            <!-- input form -->
            <form class="container" id="submitform" method="POST">
                <div class="row">
                    <h1 class="white-text">Sign up today!</h1>
                    <h6 class="white-text">Let's go to space <i class="fas fa-user-astronaut"></i></h6>
                </div>
                <div class="row">
                  
                    <!--Last first name input-->
                    <div class="input-field col s12 m12 l6">
                        <input placeholder="First name" id="first_name" type="text" class="validate valid" name="first_name" value="<?=$_POST['first_name']?>" >
                        <label for="first_name" class="white-text">First Name</label>
                        <span class="helper-text red-text" ><?=$first_nameError?></span>
                    </div>
                    
                    <!--Last name input-->
                    <div class="input-field col s12 m12 l6">
                        <input placeholder="Last name" id="Last_name" type="text" class="validate valid" name="last_name" value="<?=$_POST['last_name']?>">
                        <label for="first_name">Last Name</label>
                        <span class="helper-text red-text"><?=$last_nameError?></span>
                    </div>
                    
                    <div class="input-field col s12 m12 l6">
                      <select name="gender" class=" active white-text">
                      <option value="" disabled selected>Select gender</option>

                        <?php
                          $options = ["Male", "Female", "Other"];
                          for ($i = 0; $i < 3; $i++) {
                            if($options[$i] == $_POST["gender"]){
                              echo "<option value='$options[$i]' selected='selected'> $options[$i]</option>";
                            }
                            else{
                              echo "<option value='$options[$i]'> $options[$i]</option>";
                            }
                            
                          } 
                        ?>
                        
                      </select>
                      <label>Gender</label>
                      <span class="helper-text red-text"><?=$genderError?></span>
                    </div>
                    
                    <!-- birthdate inout -->
                    <div class="input-field col s12 m12 l6">
                    <input type="text" class="validate valid" placeholder="MM/DD/YYYY" name="birthday" value="<?=$_POST['birthday']?>"> 
                    <label for="Birthdate">Date of birth</label>
                    <span class="helper-text red-text"><?=$birthdateError?></span>
                    </div>
                  
                    
                    <!-- Email inout -->
                    <div class="input-field col s12 m12 l12">
                        <input placeholder="Email address" id="first_name" type="text" class="validate valid" name="email" value="<?=$_POST['email']?>">
                        <label for="first_name">Email address</label>
                        <span class="helper-text red-text"><?=$emailError?></span>
                    </div>

                    <p>
                      <label>
                        <input type="checkbox" name="agree" <?=$checked?>/>
                        <span class="white-text">I agree to love this website!</span> <br>
                        <span class="helper-text red-text"><?=$agreeError?></span>
                      </label>
                    </p>
                    
                    
                    <!-- submit button -->
                    <button class="btn waves-effect waves right white black-text" type="submit" name="signup">Submit
                        <i class="material-icons right black-text">send</i>
                    </button>
                </div>
                
            </form>
            <!---->
            
          </header>

          <!-- Compiled and minified JavaScript -->
          <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
          
          <script>
            $(document).ready(function(){
              $('.sidenav').sidenav();
            });
            
            
            $(document).ready(function(){
              $('select').formSelect();
            });
            
            $(document).ready(function() {
            M.updateTextFields();
            });
  
  
          setTimeout(() => {
              document.querySelector(".select-dropdown").click();
              document.body.click();
              $('select').material_select();
             
          }, 10);
          </script>
          
    </body>

</html>