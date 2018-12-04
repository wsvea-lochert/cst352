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
                                    <br>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Select car model
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <br>
                                    <!-- TODO: add colapse when submitt is clicked and filter the search-->
                                    <button type="submit" class="btn btn-primary">Apply filters</button>
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
                        
                        <!-- cardbody end -->
                    </div>
                </div>
            </div>
        </div>
    </div>