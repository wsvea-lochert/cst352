<?php
    
    include 'inc/functions.php';
    

    ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Rock and papir </title>
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
    <body>
        <div id="main">
            
            <h1>Rock, Paper or Scissors?</h1>
            <h3>Lets play!</h3>
            <form>
                <input type="submit" value="Play!"/>
            </form>
        
        
        <?php
        rps();
        ?>
        
        
    
        </div>
        
        
        <article>
            <h3>
                – Rock, Paper or Scissors Rules –
            </h3>
            <ul>
                <li><p>– Rock beats Scissors –</p></li>
                <li><p>– Scissors beats Paper –</p></li>
                <li><p>– Paper beats Rock –</p></li>
            </ul>
                <p id="state">
                    – The winner is the one with two victories –
                </p>
        </article>
        
        <footer>
            <p><strong>Web Scripting: CST352.</strong> 2018&copy; William Svea-Lochert <br />
            <strong> Disclamer: </strong> The information in this webpage is fictitious. <br />
            It is used for academic purposes only.</p>
        </footer>
      
    </body>
</html>