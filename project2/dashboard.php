<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>
    <header>
        <!-- navbar -->
        <nav class="nav justify-content-end">
            
            <a class="btn btn-primary" href="inc/logout.php" id="logoutbtn" role="button"><i class="fas fa-sign-in-alt"></i> <strong>sign out</strong></a>
        </nav>
    </header>
    
    
    
    <!-- maincontent -->
    
    <div class="container ">
        <h1 class="headerText">Dashboard</h1>
        
        <?php
            //TODO: add logic for filter then display all records as default
            include "inc/filter.php";
        ?>
    
        <div class="row">
            <!-- Modal -->
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <!-- TODO: get information from database -->
                    <h5 class="card-title">Car title</h5>
                    
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    
                    <!-- TODO: make delete and edit function-->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-trash-alt"></i> Delete</button> 
                    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button>
                </div>
            </div>
            
            
        </div>
        
    </div>
    
    
    <!--footer-->
    
    <?php
       // include "inc/footer.php";
    ?>
    
    
</body>
</html>