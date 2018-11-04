<?php
    session_start();
    

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin login page </title>
    </head>
    <body>
        
        <h1> Admin login</h1>
        
        <form action="inc/loginProcess.php" method="post">
            
            Username: <input type="text" name="username"/> <br>
            Password: <input type="password" name="password"/> <br>
                      <input type="submit" value="Login"/>
        </form>
        
        <?php 
        echo $_SESSION['error'];
        ?>
        
    </body>
</html>