<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "inc/headLinks.php";
    ?>
</head>
<body>
    <header>
        <!-- navbar -->
        <nav class="nav justify-content-end">
            <div class="ccs">
                <a class="btn btn-primary" href="inc/logout.php" id="logoutbtn" role="button"><i class="fas fa-sign-in-alt"></i> <strong>sign out</strong></a>
            </div>
            
        </nav>
    </header>
    
    
    
    <!-- maincontent -->
    
    <div class="container ">
        
        
        <?php
            //TODO: add logic for filter then display all records as default
           // include "inc/filter.php";
        ?>
        <div class="row">
            <h1 class="headerText">Dashboard</h1>
                <button type="button" class="btn btn-outline-primary btn-lg btn-block" id="btnAddRecord"><i class="fas fa-plus"></i> Add new vehicle </button>
        </div>
           
        
        
        <div class="row">
            <!--card-->
            
            <?php 
        // cards created here!
            include "api/getAllCars.php";
            
            $cars = displayAllCars();
            //DO NOT CHANGE!!! -W
            foreach($cars as $car){
                echo "<div class='card' style='width: 23rem;'>";
                    echo "<img class='card-img-top' src='". $car["imgURL"] ."' alt='Card image cap'>";
                    echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>" . $car["maker"] . " " . $car["model"] . "</h5>";
                        echo "<hr>";
                        echo"<h6>Price: " . "$" .  $car["price"] . "</h6>";
                        echo "<hr>";
                        echo "<p class='card-text'>" . $car["description"] . "</p>";
                        echo "<a href='#' class='carLink btn btn-primary' id='". $car["carId"]. "' data-toggle='modal' data-target='#exampleModal'><i class='fas fa-edit'></i> Edit</a>" . "   ";
                         echo "<a href='#' class='btn btn-secondary deleteBtn' name='favBtn' id='". $car["carId"]. "'><i class='fas fa-trash-alt'></i> Delete</a>";
                        //<button id="addToFavBtn" type="button" class="btn btn-primary" onclick=""> add to favorites</button>
                    echo"</div>";
                echo"</div>";
            }
        ?>
        </div>
        
    </div>
    
    
    <!--footer-->
    
    <?php
       // include "inc/footer.php";
    ?>
    
    
</body>
</html>