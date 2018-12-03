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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Index page</title>
</head>
<body>
    <header>
        <!-- navbar -->
        <nav class="nav justify-content-end">
             <a class="nav-link active" id="link1" href="index.html"><i class="fas fa-home"></i> Home</a>
             <a class="nav-link" id="link2" href="#"><i class="fas fa-heart"></i> Favorites</a>
             <button type="button" class="btn btn-outline-primary navLinker"><i class="fas fa-sign-in-alt"></i> <strong>Log in</strong></button>
        </nav>

    </header>

    

    <!-- filter -->
    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="fas fa-bars"> </i> Filters
                        </button>
                    </h5>
                </div>

                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <!-- CARD BODY -->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Select car maker
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Milage from and to: </span>
                                        </div>
                                        <input type="text" aria-label="fromMilage" class="form-control">
                                        <input type="text" aria-label="toMilage" class="form-control">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Price from and to: </span>
                                        </div>
                                        <input type="text" aria-label="fromPrice" class="form-control">
                                        <input type="text" aria-label="toPrice" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- TODO: add colapse when submitt is clicked and filter the search-->
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <!-- cardbody end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- card -->
    <div class="container" id="cardHolder">
        <div class="row">
            <!-- card 1 row 1 -->
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="bmw.JPG" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">BMW 520D</h5>
                    <hr>
                    <h6>Price: $9000.00</h6>
                    <hr>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!--<a href="#" class="btn btn-primary">Go to car!</a>-->
                     <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Check out this car!
                    </button>
                </div>
            </div>

            <!-- card 2 row 1-->
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="bmw.JPG" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">BMW 520D</h5>
                    <hr>
                    <h6>Price: $9000.00</h6>
                    <hr>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!--<a href="#" class="btn btn-primary">Go to car!</a>-->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Check out this car!
                    </button>
                </div>
            </div>

            <!-- card 3 row 1-->
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="bmw.JPG" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">BMW 520D</h5>
                    <hr>
                    <h6>Price: $9000.00</h6>
                    <hr>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <!--<a href="#" class="btn btn-primary">Go to car!</a>-->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Check out this car!
                    </button>
                </div>
            </div>
        </div>
    </div>

      <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">BMW 520D, 2006mod, automatic++</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-body">
                    <!-- Image slider -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <!-- first slider -->
                                <img class="d-block w-100" src="bmw.JPG" alt="First slide">
                            </div>
                            <!-- second slider-->
                            <div class="carousel-item">
                                <img class="d-block w-100" src="bmw2.JPG" alt="Second slide">
                            </div>
                            <!-- third slider -->
                            <div class="carousel-item">
                                <img class="d-block w-100" src="bmw3.JPG" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- TABLE -->
                    <hr>
                    <h3>Price: $9000.00</h3>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><strong>Milage:</strong> 20000</td>
                                <td><strong>weight: </strong> 1995kg</td>
                            </tr>
                            <tr>
                              <td><strong>Year:</strong> 2006</td>
                              <td><strong>Cylinder volume:</strong> 2 liters</td>
                            </tr>
                            <tr>
                                <td><strong>Color:</strong> Green</td>
                                <td><strong>Fuel type:</strong> Diesel</td>
                            </tr>
                            <tr>
                                <td><strong>Doors:</strong> 5</td>
                                <td><strong>Previous owners:</strong> 2</td>
                            </tr>
                            <tr>
                                <td><strong>Effect:</strong> 164hk</td>
                                <td><strong>Inteerior color:</strong> Black</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <!-- description goes here -->
                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                    <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
                <!-- buttons go here-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                    <button type="button" class="btn btn-primary"><i class="fas fa-heart"></i> add to favorites</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="fixed-bottom">

        <div class="row">
            <div class="col-sm-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mollis aliquam ex, eu mollis elit sollicitudin vitae. Ut suscipit quis massa eu maximus. Duis ac aliquam mi.</p>
            </div>

            <div class="col-sm-6 justify-content-end">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mollis aliquam ex, eu mollis elit sollicitudin vitae. Ut suscipit quis massa eu maximus. Duis ac aliquam mi.</p>
            </div>
        </div>
        
    </footer>

</body>
</html>